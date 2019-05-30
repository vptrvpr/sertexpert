@extends('layouts.main')
@section('title','Вопросы о сертификации от экспертов SERTEXPERT')
@section('description','Важные вопросы о сертификации продукции: что нужно знать о сертификации и декларировании продукции на территории России и Таможенного союза')
@section('content')
    <questions-component :questions="{{$questions}}"></questions-component>
@endsection
