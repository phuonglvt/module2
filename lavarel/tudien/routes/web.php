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
    $dictionary = array(
        "hello"=>"xin chào", 
        "how"=>"thế nào", 
        "book"=>"quyển vở", 
        "computer"=>"máy tính");
      $searchword = $request->search; 
      $flag = 0;
      foreach($dictionary as $word => $description) {
         if($word == $searchword){
            $flag = 1;
            return view('result',compact('word', 'description'));
         }
      } 
      if($flag == 0){
            return('Không tìm thấy từ cần tra');
      }
    });
