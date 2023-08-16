@extends('layout.main')
@section('main-content')
<div id="app">
    @if (!Session()->has('user'))
    <register-page></register-page>
    @endif
</div>
@stop
