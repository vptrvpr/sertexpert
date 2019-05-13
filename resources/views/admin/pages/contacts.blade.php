@extends('layouts.admin')
@section('content')
    <div class="container-scroller">
        <admin-navbar-component :auth-user="'{{Auth::user()}}'" :url="'{{env('APP_URL')}}'" ></admin-navbar-component>
        <div class="container-fluid page-body-wrapper">
            <admin-sidebar-component></admin-sidebar-component>
            <admin-contact-component></admin-contact-component>
        </div>
    </div>
@endsection
