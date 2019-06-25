@extends('layouts.master')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h1>Contact Management</h1>
            </div>

            <form class="navbar-form navbar-left"  method="get" action="{{route('contact.search')}}">
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
            </form>o

            @if(!isset($contacts))
                <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
            @else
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email </th>
                        <th scope="col">Địa Chỉ</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->lastName }}</td>
                            <td scope="row">{{ $contact->firstName }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->address}}</td>
                            <td>
                                <button onclick="return confirm('are your sure?')" ><a href="{{route('contact.delete',$contact->id)}}" >Delete</a></button>
                            </td>
                        </tr>
                    @endforeach

                    <div>
                        <td>
                            <a href="{{route('contact.create')}}" class="btn btn-primary">create</a>
                        </td>
                        <td></td>
                    </div>
                    </tbody>
                </table>

                <div class="col-2" style="float:right" >{{ $contacts->appends(request()->query()) }}</div>
            @endif
        </div>
@endsection
