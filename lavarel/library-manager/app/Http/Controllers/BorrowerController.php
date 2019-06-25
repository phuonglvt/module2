<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Borrower;
use App\Services\BorrowerService;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $borrowerService;

//    public function __construct()
//    {
//        //$this->borrowerService = $borrowerService;
//    }

    public function index(){

        //$dataBorrower = $this->borrowerService->getAll();

        $dataBorrower = Borrower::all();
        //dd($dataBorrower);
        return response()->json($dataBorrower);
    }

    public function show($id)
    {
        $dataBorrower = $this->borrowerService->findById($id);

        return response()->json($dataBorrower['borrower'], $dataBorrower['statusCode']);
    }

    public function store(Request $request)
    {
        $dataBorrower = $this->borrowerService->create($request->all());

        return response()->json($dataBorrower['borrower'], $dataBorrower['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataBorrower = $this->borrowerService->update($request->all(), $id);

        return response()->json($dataBorrower['borrower'], $dataBorrower['statusCode']);
    }

    public function destroy($id)
    {
        $dataBorrower = $this->borrowerService->destroy($id);

        return response()->json($dataBorrower['message'], $dataBorrower['statusCode']);
    }

    public function edit(Request $request, $id)
    {
        $dataBorrower = $this->borrowerService->edit($request, $id);

        return response()->json($dataBorrower['borrower'], $dataBorrower['statusCode']);
    }

    public function create(Request $request)
    {
        $dataBorrower = $this->borrowerService->create($request);

        return response()->json($dataBorrower['borrower'], $dataBorrower['statusCode']);
    }
}