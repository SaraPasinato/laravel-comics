<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Main</title>
</head>
<body>
    <header>
        <div class="row container">
            <!-- logo + nav links -->
            <div class="col">
              <img src="{{asset('images/dc-logo.png')}}" alt="logo dc" />
            </div>
            <nav class="col">
              <ul class="list-nav">
                <li><a href="#">Characters</a></li>
                <li><a href="#">Comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collections</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>
              </ul>
            </nav>
          </div>
    </header>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>