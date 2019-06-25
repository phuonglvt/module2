<?php

namespace App\Http\Controllers;

use App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $services = Service::all();
        return view('services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $service = new Service();
        $service->name= $request->input('name');
        $service->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach tinh thanh
        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->name = $request->input('name');
        $service->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach tinh
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        //xoa khach hang thuoc tinh thanh nay
//        $service->customers()->delete();

        $service->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa  thành công');
        //cap nhat xong quay ve trang danh sach tinh thanh
        return redirect()->route('services.index');
    }
}
