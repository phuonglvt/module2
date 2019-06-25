@extends('layouts.master')
@section('content')
    <body>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-8">
                <h1>CREATE</h1>
            </div>

            <div class="col-8">
                <form action="{{route('contact.add')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control {{ $errors->has('firstName') ? 'is-danger' : '' }}" name="firstName" value="{{old('firstName')}}" >
                    </div>

                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" class="form-control {{ $errors->has('lastName') ? 'is-danger' : '' }}" name="lastName" value="{{old('lastName')}}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" value="{{old('phone')}}" >
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" >
                    </div>

                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-danger' : '' }}" name="address" >
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>

                    <div class="btn btn"><a href="{{route('contact.index')}}">Back</a></div>
                </form>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection