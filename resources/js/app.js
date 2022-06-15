require('./bootstrap');

function getSwapiData() {
    fetch("https://kitsu.io/api/edge/users/1288763/library-entries")
        .then((response) => response.json())
        .then((data) => {
            const ul = document.createElement("ul");
            ul.innerHTML = `<li>${data.name}</li>`;
            domElement.append(ul);
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}
