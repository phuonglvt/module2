@extends('layouts.master')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h1>DV Viễn Thông - CNTT</h1>
            </div>

            <form class="navbar-form navbar-left"  method="get" action="{{route('customers.search')}}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Search" >
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
            </form>

            @if(!isset($customers))
                <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
            @else
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Tên</th>
                        <th scope="col">Ngày đăng ký</th>
                        <th scope="col">Số CMND</th>
                        <th scope="col">Địa chỉ liên hệ </th>
                        <th scope="col">Điện thoại liên hệ </th>
                        <th scope="col">Email </th>
                        <th scope="col">Địa chỉ lắp đặt </th>
                        <th scope="col">Mã dịch vụ </th>
                        <th scope="col">Ghi chú </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td scope="row">{{ $customer->fullName }}</td>
                            <td>{{ $customer->dayRegistration }}</td>
                            <td>{{ $customer->CMND }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->installationAddress}}</td>
                            <td>{{ $customer->services_id }}</td>
                            <td>{{ $customer->note }}</td>
                            <td><button onclick=""><a href="{{route('customers.edit', $customer->id)}}">sửa</a></button></td>
                            <td>
                                <button onclick="return confirm('are your sure?')" ><a href="{{route('customers.destroy',$customer->id)}}" >Delete</a></button>
                            </td>
                        </tr>
                    @endforeach

                    <div>
                        <td>
                            <a href="{{route('customers.create')}}" class="btn btn-primary">create</a>
                        </td>
                        <td></td>
                    </div>
                    </tbody>
                </table>

                <div class="col-2" style="float:right" >{{ $customers->appends(request()->query()) }}</div>
            @endif
        </div>
    </div>
@endsection
