async function init() {
    // try {
    //     let response = await fetch("https://kitsu.io/api/edge/users?filter[name]=Jokemu");
    //     let data = await response.json();
    //     console.log(data)
    //     return data
    // } catch (err) {
    //     console.error("Error: ", err);
    // }
    let indicator = 0;
    let list = await getAnimeData(indicator.toString());
    console.log(list);

    await updatePage(list);
}

async function updatePage(list) {
    const domElement = document.getElementById("anime");

    list.forEach(function(anime) {
        const ul = document.createElement("div");
        ul.innerHTML =
            `<div class="container">
                <img style="width: 200px" src="${anime.relatedAnime.attributes.posterImage.original}" class="card-img" alt="Anime Afbeelding">
             </div>
                  <div>
                    <a class="card-title" href="https://kitsu.io/anime/${anime.relatedAnime.id}">${anime.relatedAnime.attributes.canonicalTitle}</a>
                    <p style="color: black; margin-top: 30px" class="card-text">My Rating: ${anime.rating.rating} / 5.0</p>
                    <p style="color: black" class="card-text">Status: ${anime.relatedAnime.attributes.status}</p>
                    <p style="color: black; margin-top: -10px; line-height: 20px; font-size: 15px; width: 500px; overflow: hidden; white-space: normal; text-overflow: ellipsis;" class="card-text">${anime.relatedAnime.attributes.description}</p>
                 </div>`;
        domElement.append(ul);
    })


}
async function getAnimeData() {
    try {
        let response = await fetch(`https://kitsu.io/api/edge/users/1288763/library-entries?page[limit]=15&sort=-rating&filter[status]=completed`);
        let list = await response.json();

        let animes = list.data;

        let animeRating = [];

        for (const anime of animes) {
            let rating = anime.attributes;
            let relatedAnime = await fetchAnimeData(anime.relationships.anime.links.related);

            if (rating && relatedAnime != null){
                let grade = {
                    rating,
                    relatedAnime
                };
                animeRating.push(grade);
            }
        }

        return animeRating;
    } catch (err) {
        console.error("Error: ", err);
    }
}

async function fetchAnimeData(relation) {
    try {
        let response = await fetch(relation);
        let list = await response.json();
        let data = list.data
        return data
    } catch (err) {
        console.error("Error: ", err);
    }
}

init()
