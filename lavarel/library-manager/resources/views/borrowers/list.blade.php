@extends('home')
@section('title', 'Danh sách người mượn')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Người Mượn</h1>
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

                        @if(isset($totalBorrowerFilter))
                            <span class="text-muted">
                      {{'Tìm thấy' . ' ' . $totalBorrowerFilter . ' '. 'người mươn:'}}
                  </span>
                        @endif

                        @if(isset($bookFilter))
                            <div class="pl-5">
                     <span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                         {{ 'Thuộc môn' . ' ' . $bookFilter->name }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        <form class="navbar-form navbar-left" action="{{ route('borrowers.search') }}" method="get">
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
                    <th scope="col">Tên người mượn</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Ngày Mượn</th>
                    <th scope="col">Ngày Trả</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($borrowers) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($borrowers as $key => $borrower)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $borrower->name }}</td>
                            <td>{{ $borrower->dob }}</td>
                            <td>{{ $borrower->email }}</td>
                            <td>{{ $borrower->class }}</td>
                            <td>{{ $borrower->book_name }}</td>
                            <td>{{ $borrower->day_borrow }}</td>
                            <td>{{ $borrower->day_pay }}</td>

                            <td><a href="{{ route('borrowers.edit', $borrower->id) }}">sửa</a></td>
                            <td><a href="{{ route('borrowers.destroy', $borrower->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{ route('borrowers.create') }}">Thêm mới</a>
                    </div>
                    <div class="col-6">
                        <div class="pagination float-right">
                            {{--{{ $borrower->appends(request()->query()) }}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="bookModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <form action="{{ route('borrowers.filterByBook') }}" method="get">
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
                                        <select class="custom-select w-100" name="city_id">
                                            <option value="">Chọn tên sách</option>
                                            @foreach($borrowers as $borrower)
                                                {{--@if(isset($bookFilter))--}}
                                                    {{--@if($book->id == $bookFilter->id)--}}
                                                        {{--<option value="{{$book->id}}" selected >{{ $book->name }}</option>--}}
                                                    {{--@else--}}
                                                        {{--<option value="{{$book->id}}">{{ $book->name }}</option>--}}
                                                    {{--@endif--}}
                                                {{--@else--}}
                                                    {{--<option value="{{$book->id}}">{{ $book->name }}--}}
                                                    {{--</option>--}}
                                                {{--@endif--}}
                                                {{$borrower->name}}
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
                </form>
            </div>
        </div>
    </div>
@endsection