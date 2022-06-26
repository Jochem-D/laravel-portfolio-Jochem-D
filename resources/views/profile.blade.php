@extends('layout')

@section('title')
    <title>Informatie over Jochem</title>
@endsection

@section('content')

<!-- navigatiebalk bovenkant -->
<!-- img team en youtubelink -->
<article>
    <img src="resources/Teamfotocut.jpg" class="togoa2" alt="togo-a2" />
    <iframe
        width="444"
        height="250"
        src="https://www.youtube.com/embed/MmB9b5njVbA"
    >
    </iframe>
    <!-- tekst -->
    <div class="Info">
        <h1>Persoonlijke gegevens</h1>
        <ul>
            <li>Naam: Jochem Dijkdrent</li>
            <li>Leeftijd: 17 jaar</li>
            <li>Woonplaats: Kloetinge</li>
            <li>
                Vooropleiding en profiel: Mijn vooropleiding was Havo met het
                profiel natuur en techniek
            </li>
        </ul>
    </div>
    <h1>Vrije tijd</h1>
    <ul>
        <li>Ik speel korfbal bij Togo</li>
        <li>Ik speel games met vrienden</li>
        <li>Ik werk part-time bij ZES goes</li>
        <li>Ik heb een tweelingzus genaamd Rowi</li>
        <li>Ik kijk anime en cartoons</li>
    </ul>
    <h1>Games die ik speel</h1>
    <ul>
        <li>Minecraft</li>
        <li>Portal</li>
        <li>Beatsaber</li>
        <li>Professor Layton</li>
        <li>Cookie clicker</li>
        <li>Terraria</li>
    </ul>
    <h1>Karakteristieken</h1>
    <ol>
        <li>Onzeker</li>
        <li>Snel afgeleid</li>
        <li>Optimistisch</li>
        <li>Sociaal</li>
    </ol>
</article>

<footer class="footer">
    <img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz" />
</footer>
@endsection
