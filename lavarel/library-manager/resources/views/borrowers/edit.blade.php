@extends('home')
@section('title', 'Chỉnh sửa người mượn')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa người mượn</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('borrowers.update', $borrower->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên người mượn</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDob1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputClass1">Lớp</label>
                        <input type="class" class="form-control" name="class" placeholder="Enter class" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputdayborrow1">Ngày mượn</label>
                        <input type="date" class="form-control" name="day borrow" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPay1">Ngày trả</label>
                        <input type="date" class="form-control" name="day pay" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tên sách</label>
                        <select class="form-control" name="book_id">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
