@extends('layouts.main')
{{-- nome titolo --}}
@section('title','HOME')
 
{{-- contenuto jumbotron --}}
@section('content')
<div class="container-sm">
    <p><a href="#" class="btn btn-primary-full">Current Series</a></p>
</div>
@endsection

{{-- contenuto main --}}
@section('section_content')
<section id="gallery">
 <div class="comics">
    @foreach ($comics as $comic)
    <div class="card" >
      <a href="{{ url("/comics_list/$loop->index") }}">  
           <img src="{{$comic['thumb']}}" alt="">
           <h5>{{$comic['title']}}</h5>
           <h6> {{$comic['type']}}</h6>
      </a>
     </div>
     @endforeach
 </div>
 <div class="controls">
    <p><a href="#" class="btn btn-primary-full"> Load more</a></p>
  </div>
</section>

@endsection

@section('section_links')
<nav id="site">
    <div class="row container-sm">
        <ul class="list-nav-center">
            <li class="list-nav-li">
                <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="link-digital comics" >
                <a href="">Digital comics</a>
             </li>
            <li class="list-nav-li">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="merchandise" >
                <a href="">Dc merchandise</a>
             </li>
            <li class="list-nav-li">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="" >
                <a href="">subscription</a>
             </li>
            <li class="list-nav-li">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="shop-locator">
                <a href="">Comics shop locator</a>
             </li>
            <li class="list-nav-li">
                <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="visa" >
                <a href="">Dc power visa</a>
             </li>
          
        </ul>
    </div>
</nav>
@endsection