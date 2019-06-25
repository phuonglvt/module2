@extends('layouts.master')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Dịch Vụ</h1>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên dịch vụ</th>
                    {{--<th scope="col">Số khách hàng</th>--}}
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($services) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($services as $key => $service)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $service->name }}</td>
                            {{--<td>{{ count($service->customers) }}</td>--}}
                            <td><a href="{{ route('services.edit', $service->id) }}">sửa</a></td>
                            <td><a href="{{ route('services.destroy', $service->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('services.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
