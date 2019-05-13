@extends('layouts.main')
@section('content')
    <article-component :article="{{$article}}" :url="'{{env('APP_URL')}}'"></article-component>
    @endsection
