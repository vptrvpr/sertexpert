@extends('layouts.main')
@section('title',$article[0]['title_page'])
@section('description',$article[0]['description_page'])
@section('content')
    <article-component :article="{{$article}}" :url="'{{env('APP_URL')}}'"></article-component>
    @endsection
