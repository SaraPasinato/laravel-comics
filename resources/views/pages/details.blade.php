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
 <div id="section-fill"></div>  
 <section id="preview-section"></section>
 <section id="details-section"></section>
@endsection