@extends('layouts.main')

{{-- nome titolo --}}
@section('title','COMICS')
{{-- contenuto jumbotron details--}}
@section('content')
{{-- immagine primo obj in comics
 --}}
<img src="{{$comics{0}['thumb']}}" alt="">

@endsection

{{--  contenuto detail_gallery  --}}
@section('section_content')
{{-- section bg blue --}}
 <div id="section-fill" ></div>

 <section id="preview-section" class="py-4">
    <div class="container-sm row">
        <div class="contents pe-2">
            <h3>{{$comics{0}['title']}}</h3>
            <div class="ctrls">
              <div class="price">
                  <p>U.S. Price: <span>{{$comics{0}['price']}}</span></p>
                  <p class="opacity">available</p>
              </div>
              <div class="disp">
                  <p>Check Availability <i class="fas fa-chevron-down"></i></p>
              </div>
            </div>
            <p>{{$comics{0}['description']}}</p>
        </div>
        <div class="adv-ctrls">
            <h4>advertisments</h4>
            <img src="{{asset('images/adv.jpg')}}" alt="logo adv">
        </div>

    </div>
 </section>
 <section id="details-section" class="py-4">
    <div class="container-sm row">
        <div id="talent" class="col-6">
         <h3>Talent</h3>
         <hr>
         <div class="art">
             <h5 class="col-6">Art by:</h5>
             <small>
             @foreach ($comics{0}['artists'] as $artist)
                <a href="#">{{$artist}}</a>
                @if (!$loop->last) , @endif
             @endforeach
            </small>  
         </div>
         <hr>
         <div class="written">
            <h5 class="col-6">Written by:</h5>
            <small>
            @foreach ($comics{0}['writers'] as $writer)
               <a href="#">{{$writer}}</a>
               @if (!$loop->last) , @endif
            @endforeach
           </small>  
        </div>
        </div>
        <div id="specs" class="col-6">
        <h3>Specs</h3>
        <hr>
        <div class="series">
            <h5 class="col-6">Series:</h5>
            <a href="#">{{$comics{0}['series']}}</a>
        </div>
        <hr>
        <div class="prices">
            <h5 class="col-6">U.S. Prices:</h5>
            <small> {{$comics{0}['price']}}</small>
        </div>
        <hr>
        <div class="sale">
            <h5 class="col-6">On Sale Date:</h5>
            <small> {{ date('M-d-Y',strtotime($comics{0}['sale_date'])) }}</small>
        </div>
        <hr>
        </div>
    </div>
 </section>
@endsection

{{-- secition links  --}}
@section('section_links')
    {{-- TODO >> --}}
@endsection