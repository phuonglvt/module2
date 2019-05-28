<?php

namespace App\Http\Controllers;

use App\Book;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(){
        $books = Book::all();
        return $books;
        return view('book.list', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $books = new Book();
        $books->name= $request->input('name');
        $books->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach tinh thanh
        return redirect()->route('books.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $books = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $books = Book::findOrFail($id);
        $books->name     = $request->input('name');
        $books->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach tinh
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $books = Book::findOrFail($id);

        //xoa khach hang thuoc tinh thanh nay

        $books->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa  thành công');
        //cap nhat xong quay ve trang danh sach tinh thanh
        return redirect()->route('books.index');
    }
}

