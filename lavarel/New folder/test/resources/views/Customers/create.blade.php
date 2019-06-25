@extends('layouts.master')
@section('content')
    <body>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-8">
                <h1>CREATE</h1>
            </div>

            <div class="col-8">
                <form action="{{route('customers.store')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control {{ $errors->has('fullName') ? 'is-danger' : '' }}" name="fullName" value="{{old('fullName')}}" >
                    </div>

                    <div class="form-group">
                        <label>Ngày đăng ký</label>
                        <input type="date" class="form-control {{ $errors->has('dayRegistration') ? 'is-danger' : '' }}" name="dayRegistration" value="{{old('dayRegistration')}}">
                    </div>

                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="number" class="form-control {{ $errors->has('CMND') ? 'is-danger' : '' }}" name="CMND" value="{{old('CMND')}}">
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-danger' : '' }}" name="address" value="{{old('address')}}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" value="{{old('phone')}}" >
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label>Địa Chỉ Lắp Đặt</label>
                        <input type="text" class="form-control {{ $errors->has('installationAddress') ? 'is-danger' : '' }}" name="installationAddress" value="{{old('installationAddress')}}">
                    </div>

                    <div class="form-group">
                        <label>Mã dịch vụ</label>
                        <input type="number" class="form-control {{ $errors->has('services_id') ? 'is-danger' : '' }}" name="services_id" value="{{old('services_id')}}">
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <input type="text" class="form-control {{ $errors->has('note') ? 'is-danger' : '' }}" name="note" value="{{old('note')}}">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>

                    <div class="btn btn"><a href="{{route('customers.index')}}">Back</a></div>
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