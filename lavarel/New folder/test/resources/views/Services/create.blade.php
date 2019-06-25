@extends('layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới dịch vụ</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('services.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên dịch vụ</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name" >
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
