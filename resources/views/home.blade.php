@extends('layout.master')
@section('content')

<h1>bienvenido , </h1>
@if (Auth::check())
{{Auth::user()->email}}
@endif
<br>
<a href="auth/logout">cerrar secion</a>
@endsection