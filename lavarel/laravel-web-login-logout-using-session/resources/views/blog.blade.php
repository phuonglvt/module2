@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Thiên Vương
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection