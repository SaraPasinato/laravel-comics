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
        
   
    <div class="card">
        <img src="{{$comic['thumb']}}" alt="">
        <h5>{{$comic['title']}}</h5>
        <h6> {{$comic['type']}}</h6>
     </div>
     @endforeach
 </div>
</section>

@endsection