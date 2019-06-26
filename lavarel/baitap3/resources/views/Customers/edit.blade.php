@extends('layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-8">
                <h1>EDIT</h1>
            </div>

            <div class="col-8">
                <form  method="post" action="{{route('customers.update',$customer->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control {{ $customer->fullName ? '' : 'is-danger' }}"  name="fullName" value="{{old('fullName',$customer->fullName)}}" >
                    </div>

                    <div class="form-group">
                        <label>Ngày đăng ký</label>
                        <input type="date" class="form-control {{ $customer->dayRegistration ? :'is-danger' }}" name="dayRegistration" value="{{old('dayRegistration')}}">
                    </div>

                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="number" class="form-control {{ $customer->CMND ? :'is-danger' }}" name="CMND" value="{{old('CMND')}}">
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control {{ $customer->address ? :'is-danger' }}" name="address" value="{{old('address')}}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control {{ $customer->phone ? :'is-danger' }}" name="phone" value="{{old('phone')}}" >
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control {{ $customer->email ? :'is-danger' }}" name="email" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label>Địa Chỉ Lắp Đặt</label>
                        <input type="text" class="form-control {{ $customer->installationAddress ? :'is-danger' }}" name="installationAddress" value="{{old('installationAddress')}}">
                    </div>

                    <div class="form-group">
                        <label>Mã dịch vụ</label>
                        <input type="text" class="form-control {{ $customer->services_id ? :'is-danger' }}" name="services_id" value="{{old('services_id')}}">
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <input type="text" class="form-control {{ $customer->note ? :'is-danger' }}" name="note" value="{{old('note')}}">
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