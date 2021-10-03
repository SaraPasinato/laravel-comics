<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' integrity='sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==' crossorigin='anonymous'/>
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
        {{--  layout gallery  --}}
        <div >
            @yield('section_content')
        </div>
        {{--  layout links  --}}
        <div>
            @yield('section_links')
        </div>
    </main>
     {{--  creare un includes footer  --}}
     @include('includes.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>