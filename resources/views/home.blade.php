<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Laravel-Comics</title>
</head>
<body>
    <header>
        <div class="container-90w">
            <img src="./public/images/dc-logo.png" alt="DC logo">
            <div id="menu-container">
                <ul>
                    @foreach ($navlinks as $navlink) 
                    <li>
                        <a href="{{ $navlink['url'] }}">{{ $navlink['text'] }}</a>
                    </li>
                    @endforeach  
                </ul>
            </div>
        </div>
  </header>
    <main>
        <h1></h1>
       
    </main>
    <footer>
    </footer>    
</body>
</html>