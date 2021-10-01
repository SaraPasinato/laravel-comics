<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>DC COMICS |@yield('title')</title>
</head>
<body>
   {{--  creare un includes header  --}}
   @include('includes.header')
    <main>
       {{--  >>creare un layout jumbotron  --}}
        <section id='jumbotron'>
            <div class="container-sm">
               @yield('content')
            </div>
        </section>
        {{-- TODO layout gallery  --}}
        <section>
            @yield('section-content')
        </section>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>