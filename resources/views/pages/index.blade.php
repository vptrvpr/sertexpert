@extends('layouts.main')
@section('title','Центр сертификации SERTEXPERT - сертификация и декларирование ТР ТС и ГОСТ Р')
@section('description','Оформление пактов разрешительной документации в компании SERTEXPERT: сертификаты и декларации ТР ТС и ГОСТ Р, СГР, пожарная безопасность и другие сертификационные документы. Обращайтесь к профессионалам в сфере сертификации!')
@section('content')
    <index-component :data="{{$info}}"></index-component>
    @endsection
