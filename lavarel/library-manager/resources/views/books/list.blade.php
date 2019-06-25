@extends('home')
@section('title', 'Danh sách sách')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách sách</h1>
            </div>
            <div class="col-12">

                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-outline-primary" href="" data-toggle="modal" data-target="#bookModal">
                            Lọc
                        </a>
                        <br>
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </p>
                        @endif

                        @if(isset($totalBookFilter))
                            <span class="text-muted">
                      {{'Tìm thấy' . ' ' . $totalBookFilter . ' '. 'sách:'}}
                  </span>
                        @endif

                        @if(isset($categoryFilter))
                            <div class="pl-5">
                     <span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                         {{ 'Thuộc loại sách' . ' ' . $categoryFilter->name }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        <form class="navbar-form navbar-left" action="" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search" value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>oo<th scope="col">Tên tác giả</th>
                    <th scope="col">Môn</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Thể loại</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($books) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($books as $key => $book)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->subject }}</td>
                            <td>{{ $book->status }}</td>
                            <td>{{ $book->categories->category }}</td>

                            {{--<td><a href="{{ route('books.edit', $book->id) }}">sửa</a></td>--}}
                            {{--<td><a href="{{ route('books.destroy', $book->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{ route('book.create') }}">Thêm mới</a>
                    </div>
                    <div class="col-6">
                        {{--<div class="pagination float-right">--}}
                            {{--{{ $book->appends(request()->query()) }}--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="bookModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div  method="get" id="search">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!--Lọc theo khóa học -->
                            <div class="select-by-program">
                                <div class="form-group row">
                                    <label  class="col-sm-5 col-form-label border-right">Lọc người mượn theo tên sách</label>
                                    <div class="col-sm-7">
                                        <select class="book-select w-100" name="category_id">
                                            <option value="">Chọn thể loại sách</option>
                                            @foreach($books as  $key => $book)
                                                @if(isset($books))
                                                    @if($book->name )
                                                        <option value="{{$book->id}}" selected >{{ $book->category }}</option>
                                                    @else
                                                        <option value="{{$book->id}}">{{ $book->category }}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$book->id}}">{{ $book->category }}
                                                    </option>
                                                @endif
                                                {{--{{$book->name}}--}}
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                            <!--End-->

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submitAjax" class="btn btn-primary" >Chọn</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection