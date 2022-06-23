@extends('layouts.dashboard.main2')

@section('power')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->first_name }}!</h1>
@endsection