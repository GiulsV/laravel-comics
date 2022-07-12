<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Laravel-Comics</title>
</head>
<body>
    @include('partials/header')
    <main>
        <div class="jumbotron">
            <div id="jumbo-label"><p>current series</p></div>
        </div>
        <div class="container-90w">
        @yield('content')
        </div>
        <a id="load-more-btn" href="#">load more</a>
    </main>
    <footer>
    </footer>    
</body>
</html>