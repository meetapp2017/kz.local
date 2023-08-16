@extends('layout.main')
@section('main-content')
    <div id="app">
        @if (!Session()->has('user'))
            <login-page></login-page>
        @endif
    </div>
@stop
