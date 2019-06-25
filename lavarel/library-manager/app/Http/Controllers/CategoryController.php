<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use http\Env\Response;
use App\Book;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('categories.list', compact('categories', 'books'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category = $request->input('name');
        $categories->save();

        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('$categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->category = $request->input('name');
        $categories->save();

        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);

        $categories->books->delete();
//        $categories->delete;

        Session::flash('success', 'Xóa thành công');
        return redirect()->route('categories.index');
    }
}
