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
    <!-- >>creare un includes header -->
   @include('includes.header')
    <main>
        <!-- TODO >>creare un layout jumbotron -->
        <section id='jumbotron'>
            <div class="container-sm">
                <p><a href="#" class="btn btn-primary-full">Current Series</a></p>
            </div>
        </section>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>