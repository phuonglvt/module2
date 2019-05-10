<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/', function (Request $request) {
    $product_name = $request->product_name;
    $list_price = $request->list_price;
    $discount_percent = $request->discount_percent;
    $discount_amount = $list_price * $discount_percent/100;
    $discount_price =   $list_price- $discount_amount;
    return view('show_discount_amount', compact('product_name', 'list_price', 'discount_percent', 'discount_amount', 'discount_price'));
});
