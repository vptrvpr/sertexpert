@extends('layouts.main')
@section('content')
    <contacts-component :contacts="{{$contacts}}"></contacts-component>
    @endsection
