@extends('home')
@section('title', 'Danh sách thể loại sách')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Thể Loại Sách</h1>
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
                    <th scope="col">Tên loại sách</th>
                    <th scope="col">Số luong</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @if(count($categories) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($categories as $key => $category)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->amount }}</td>
                            <td>
                                @foreach($category->books as $book)
                                    {{ $book->name }}
                                    <br>
                                    @endforeach
                            </td>
                            <td><a href="{{ route('categories.edit', $category->id) }}">sửa</a></td>
                            <td><a href="{{ route('categories.destroy', $category->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

            <a class="btn btn-primary" href="{{ route('categories.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
