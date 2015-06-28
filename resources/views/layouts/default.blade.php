<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
</head>
<body>
<header class="header">
    <div class="header-branding">erik belusic.</div>
</header>
<nav class="nav">
    <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="">Link</a></li>
        <li class="menu__item"><a class="menu__link" href="">Link</a></li>
        <li class="menu__item"><a class="menu__link" href="">Link</a></li>
        <li class="menu__item"><a class="menu__link" href="">Link</a></li>
    </ul>
</nav>
<main class="main">
    @yield('content')
</main>
<footer class="footer"></footer>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>