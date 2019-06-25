<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Service;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(5);

        $services = Service::all();

        return view('customers.list', compact('customers', 'services'));
    }

    public function create()
    {
        $services = Service::all();

        return view('customers.create', compact('services'));
    }

    public function store(Request $request)
    {
        $this -> validateCustomer();

        $customer = new Customer();
        $customer->fullName = $request->input('fullName');
        $customer->dayRegistration = $request->input('dayRegistration');
        $customer->CMND = $request->input('CMND');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->installationAddress = $request->input('installationAddress');
        $customer->note = $request->input('note');
        $customer->services_id = $request->input('services_id');
        $customer->save();

        return redirect()->route('customers.index');

    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $services = Service::all();

        return view('customers.edit', compact('customer', 'services'));
    }


    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->fullName = $request->input('fullName');
        $customer->dayRegistration = $request->input('dayRegistration');
        $customer->CMND = $request->input('CMND');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->installationAddress = $request->input('installationAddress');
        $customer->note = $request->input('note');
        $customer->services_id = $request->input('services_id');
        $customer->save();
//            Session::flash('success', 'Cập nhật khách hàng thành công');
            return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

//        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function filterByCity(Request $request)
    {
        $idService = $request->input('service_id');

        //kiem tra city co ton tai khong
        $serviceFilter = City::findOrFail($idService);
        //lay ra tat ca customer cua cityFiler
        $customers = Customer::where('service_id', $serviceFilter->id)->get();
        $totalCustomerFilter = count($customers);

        $services = Service::all();

        return view('customers.list', compact('customers', 'services', 'totalCustomerFilter', 'serviceFilter'));
    }

    public function search(Request $request)

    {

        $keyword = $request->input('keyword');

        if (!$keyword) {

            return redirect()->route('customers.index');

        }

        $customers = Customer::where('fullName', 'LIKE', '%' . $keyword . '%')

            ->paginate(5);


        $services = Service::all();

        return view('customers.list', compact('customers', 'services'));


    }
    public function validateCustomer(){
        return request()->validate([
            'fullName' => 'required|min:02|max:30',
            'dayRegistration' => 'required',
            'CMND' => 'required|min:09|max:15',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|min:10|max:12',

        ]);
    }
}
