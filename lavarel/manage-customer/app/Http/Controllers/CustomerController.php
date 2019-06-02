<?php
//
//namespace App\Http\Controllers;
//
//use App\City;
//use App\Customer;
//use App\Http\Requests\StoreCustomerPost;
//use http\Env\Response;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
//
//class CustomerController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return Response
//     */
//
//    public function index()
//    {
//        $customers = Customer::paginate(5);
//
//        $cities = City::all();
//
//        return view('customers.list', compact('customers', 'cities'));
//
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return Response
//     */
//
//    public function create()
//    {
//       $cities = City::all();
//      return view('customers.create', compact('cities'));
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @return Response
//     */
//
//    public function store( Request $request)
//    {
//        $this->validateCustomer();
//
//        $customer = new Customer();
//        $customer->name     = $request->input('name');
//        $customer->email    = $request->input('email');
//        $customer->dob      = $request->input('dob');
//        $customer->city_id  = $request->input('city_id');
//        $customer->save();
//
//        //dung session de dua ra thong bao
////        Session::flash('success', 'Tạo mới khách hàng thành công');
//        //tao moi xong quay ve trang danh sach khach hang
//        return redirect()->route('customers.index');
//    }
//
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function edit($id)
//    {
//        $customer = Customer::findOrFail($id);
//        $cities = City::all();
//
//        return view('customers.edit', compact('customer', 'cities'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function update(Request $request, $id)
//    {
//        $customer = Customer::findOrFail($id);
//        $customer->name     = $request->input('name');
//        $customer->email    = $request->input('email');
//        $customer->dob      = $request->input('dob');
//        $customer->city_id  = $request->input('city_id');
//        $customer->save();
//
//        //dung session de dua ra thong bao
//        Session::flash('success', 'Cập nhật khách hàng thành công');
//        //cap nhat xong quay ve trang danh sach khach hang
//        return redirect()->route('customers.index');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function destroy($id)
//    {
//        $customer = Customer::findOrFail($id);
//        $customer->delete();
//
//        //dung session de dua ra thong bao
//        Session::flash('success', 'Xóa khách hàng thành công');
//        //xoa xong quay ve trang danh sach khach hang
//        return redirect()->route('customers.index');
//    }
//
//
//
//    public function filterByCity(Request $request)
//    {
//        $idCity = $request->input('city_id');
//
//        //kiem tra city co ton tai khong
//        $cityFilter = City::findOrFail($idCity);
//        //lay ra tat ca customer cua cityFiler
//        $customers = Customer::where('city_id', $cityFilter->id)->get();
//        $totalCustomerFilter = count($customers);
//
//        $cities = City::all();
//
//        return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
//    }
//
//    public function search(Request $request)
//
//    {
//
//        $keyword = $request->input('keyword');
//
//        if (!$keyword) {
//
//            return redirect()->route('customers.index');
//
//        }
//
//        $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')
//
//            ->paginate(5);
//
//
//        $cities = City::all();
//
//        return view('customers.list', compact('customers', 'cities'));
//
//
//    }
//    public function validateCustomer(){
//        return request()->validate([
//            'name' => 'required|min:02|max:30',
//            'email' => 'required|email',
//            'dob' => 'required',
//        ]);
//    }
//
//}


namespace App\Http\Controllers;

use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();

        return response()->json($customers, 200);
    }

    public function show($id)
    {
        $dataCustomer = $this->customerService->findById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function store(Request $request)
    {
        $dataCustomer = $this->customerService->create($request->all());

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataCustomer = $this->customerService->update($request->all(), $id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function destroy($id)
    {
        $dataCustomer = $this->customerService->destroy($id);

        return response()->json($dataCustomer['message'], $dataCustomer['statusCode']);
    }
}