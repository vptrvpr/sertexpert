@extends('layouts.main')
@section('content')
    <news-component :news="{{$articles}}" :url="'{{env('APP_URL')}}'"></news-component>
    @endsection
