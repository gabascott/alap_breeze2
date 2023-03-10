<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somoskői Gábor</title>
    <!--Link-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!--Script-->
    <script type="module" src="{{ url('script/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <main>
        <header>
            <h1>Ajánlataink</h1>
        </header>
        <nav>
            <li><a href="{{url('/')}}">Kezdőlap</a></li>
            <li><a href="{{url('/uj_ingatlan')}}">Új ingatlan</a></li>
        </nav>
        <article class="ingatlan_container">
            
        </article>
        <footer>Készítette:Somoskői Gábor</footer>
    </main>
</body>
</html>