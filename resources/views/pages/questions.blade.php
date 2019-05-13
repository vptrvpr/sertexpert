@extends('layouts.main')
@section('content')
    <questions-component :questions="{{$questions}}"></questions-component>
@endsection
