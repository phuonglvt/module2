<?php

namespace App\Http\Controllers;

use App\Borrower;
use Illuminate\Http\Request;
use App\Book;
//use App\Services\BookService;


class BookController extends Controller
{
    protected $bookService;

    public function index()
    {
        $borrowers = Borrower::all();
        $books = Book::all();

        return view('books.list',compact('books', 'borrowers'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request, $id)
    {
//        $dataBook = $this->bookService->create($request->all(), $id);
//
//        return response()->json($dataBook['books'], $dataBook['statusCode']);
        return view('books.store');
    }

    public function show($id)
    {
        $dataBook = $this->bookService->findById($id);

        return response()->json($dataBook['books'], $dataBook['statusCode']);
    }

    public function edit(Request $request, $id)
    {
        $dataBook = $this->bookService->edit($request->all(), $id);

        return response()->json($dataBook['books'], $dataBook['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataBook = $this->bookService->update($request->all(), $id);

        return response()->json($dataBook['books'], $dataBook['statusCode']);
    }

    public function destroy($id)
    {
        $dataBook = $this->bookService->destroy($id);

        return response()->json($dataBook['message'], $dataBook['statusCode']);
    }

    public function filterByCategory(Request $request)
    {
        $dataBook = $this->bookService->filterByCategory($request);

        return response()->json($dataBook['category'], $dataBook['statusCode']);
    }
}
