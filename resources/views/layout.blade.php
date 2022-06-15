<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/general.css">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @yield('title')
    <meta
        name="description"
        content="Portfolio Website Jochem Dijkdrent"
    />
    <script src="/js/profile.js"></script>
</head>
<!-- navigatiebalk bovenkant -->

<body>
<div class="navigation">
    <span style="cursor: pointer" onclick="toggleNav()">≡</span>
     <a class="{{ Request::path() === '/' ? 'active' : '' }}" href= "/"> Home</a>
     <a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="/profile">Profile</a>
     <a class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
     <a class="{{ Request::path() === 'faq' ? 'active' : '' }}" href="/faq"> FAQ</a>
     <a class="{{ Request::path() === 'blog' ? 'active' : '' }}" href="/blog"> Blog</a>
    <a class="{{ Request::path() === 'kitsu' ? 'active' : '' }}" href="/kitsu"> Api</a>

</div>
<div id="mySidebar" class="sidebar">
    <a
        href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
        target="_blank"
    >Onderwijs en Examen regelingen</a
    >
    <a
        href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
        target="_blank"
    >Uitvoeringsregeling HZ</a
    >
    <a href="https://learn.hz.nl/" target="_blank">Learn omgeving HZ</a>
    <a
        href="https://teams.microsoft.com/l/channel/19%3a827654897ab746089c081f24aff1c984%40thread.skype/General?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
        target="_blank"
    >Teams omgeving HZ</a
    >
    <a
        href="https://apps.hz.nl/angular/studievoortgang/studiestatus"
        target="_blank"
    >Studievoortgang</a
    >
    <a href="https://github.com/HZ-HBO-ICT" target="_blank"
    >Github omgeving</a
    >
    <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">×</a>

</div>
@yield('content')
</body>
</html>
