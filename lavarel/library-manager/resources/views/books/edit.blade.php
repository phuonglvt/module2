@extends('home')
@section('title', 'Chỉnh sửa sách')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa sách</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('books.update', $book->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên sách</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAuthor1">Tác giả</label>
                        <input type="text" class="form-control" name="author" placeholder="Enter author" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputSubject1">Môn học</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter subject" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputStatus1">Tình trạng sách</label>
                        <input type="text" class="form-control" name="status" placeholder="Enter status" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Thể loại sách</label>
                        <select class="form-control" name="category_id">
                            @foreach($categiries as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
