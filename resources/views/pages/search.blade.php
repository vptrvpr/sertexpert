@extends('layouts.main')
@section('content')
    <search-component :articles="{{$articles}}" :url="'{{env('APP_URL')}}'" :title="'{{$title}}'"></search-component>
    @endsection
