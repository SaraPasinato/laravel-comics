@extends('layouts.main')

{{-- nome titolo --}}
@section('title','COMICS')
{{-- contenuto jumbotron details--}}
@section('content')
{{-- TODO: inserire immagine primo obj in comics
 --}}
<img src="{{$comics{0}['thumb']}}" alt="">

@endsection

{{--  contenuto main  --}}