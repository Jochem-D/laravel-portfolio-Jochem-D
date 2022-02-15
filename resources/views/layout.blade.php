<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/general.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @yield('title')
    <meta
        name="description"
        content="Portfolio Website Jochem Dijkdrent"
    />
    <script src="javascript/profile.js"></script>
</head>
<!-- navigatiebalk bovenkant -->

<body>
<div class="navigation">
     <a class="{{ Request::path() === '/' ? 'active' : '' }}" href= "/"> Home</a>
     <a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="/profile">Profile</a>
     <a  class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
     <a class="{{ Request::path() === 'faq' ? 'active' : '' }}" href="/faq"> FAQ</a>
     <a class="{{ Request::path() === 'blog' ? 'active' : '' }}" href="/blog"> Blog</a>
</div>
@yield('content')
</body>
</html>
