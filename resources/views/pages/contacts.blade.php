@extends('layouts.main')
@section('title','Контакты центра сертификации SERTEXPERT')
@section('description','Контакты центра сертификации SERTEXPERT (СертЭксперт) в вашем городе: номера телефонов, e-mail, часы работы офиса')
@section('content')
    <contacts-component :contacts="{{$contacts}}"></contacts-component>
    @endsection
