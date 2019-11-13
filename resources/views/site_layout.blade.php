<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Chakra Design</title>
</head>
<body>
<header>
<nav class="bg-black">
    <div class="container mx-auto bg-gray-300">
        <div class="nav-links">
            <a class="label-text" href="" >Work</a>
            <a class="label-text" href="">Career</a>
            <a class="label-text" href="">Contact</a>
        </div>
        <div>
                <span id="brand" class="justify-end">
                    <img class="bg-black" src="" alt="">
                </span>
        </div>
    </div>
</nav>
</header>

<div class="page-content">
@yield('page-content')
</div>
<footer class="h-64 bg-black">
    <div class="container mx-auto">
        <p>contact info</p>
    </div>
</footer>
<script src="/js/app.js"></script>
</body>
</html>
