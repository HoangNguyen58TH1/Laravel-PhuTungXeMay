<?php

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
    return view('welcome');
});

// //
Route::get('admin',[
    //tên ở as đặt gì cũng được. Ko qtrong
    'as'    =>'trangchu',
    'uses'  =>'PageController@getAdmin'
]);
Route::get('/','PageController@index');
//

//index: là Slug.
Route::get('index',[
    //tên ở as đặt gì cũng được. Ko qtrong
    'as'    =>'trangchu',
    'uses'  =>'PageController@getIndex'
]);


//loai-san-pham: là Slug.
//type là tham số được truyền vào từ function getLoaisp ở PageController.php
Route::get('loai-san-pham/{type}',[
    //tên ở as đặt gì cũng được. Ko qtrong
    'as'    =>'loaisanpham',
    'uses'  =>'PageController@getLoaiSp'
]);

//
Route::get('chi-tiet-san-pham/{id}',[
    'as'    =>'chitietsanpham',
    'uses'  =>'PageController@getChiTiet'
]);
//
Route::get('gioi-thieu',[
    'as'    =>'gioithieu',
    'uses'  =>'PageController@getGioiThieu'
]);
//
Route::get('lien-he',[
    'as'    =>'lienhe',
    'uses'  =>'PageController@getLienHe'
]);
//Tạo 1 route mới để thêm vào Cart
Route::get('add-to-cart/{id}', [
    'as'    =>'themgiohang',
    'uses'  =>'PageController@getAddtoCart'
]);
//Xóa 1 SP
//sau khi tạo Route sẽ tạo 1 cái Controller
Route::get('del-cart/{id}',[
    'as'    =>'xoagiohang',
    //'uses' ở đây là gọi đến Controller
    'uses'  =>'PageController@getDelItemCart'
]);
//
Route::get('dat-hang',[
    'as'    =>'dathang',
    'uses'  =>'PageController@getCheckout'
]);
//đặt hàng
Route::post('dat-hang',[
    'as'    =>'dathang',
    'uses'  =>'PageController@postCheckout'
]);

//Login
Route::get('dang-nhap',[
    'as'    =>'login',
    'uses'  =>'PageController@getLogin'
]);
//post - Login
Route::post('dang-nhap',[
    'as'    =>'login',
    'uses'  =>'PageController@postLogin'
]);
//Signin
Route::get('dang-ki',[
    'as'    =>'signin',
    'uses'  =>'PageController@getSignin'
]);
//post - Signin
Route::post('dang-ki',[
    'as'    =>'signin',
    'uses'  =>'PageController@postSignin'
]);
//đăng xuất
Route::get('dang-xuat',[
    'as'    =>'logout',
    'uses'  =>'PageController@postLogout'
]);
//search
Route::get('search',[
    'as'    =>'search',
    'uses'  =>'pageController@getSearch'
]);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Khai báo Middleware trong Kernel trước thì mới sử dụng tại Route được, gom tất cả những cái cần thiết trong trang admin, vào group prefix admin để sử dụng middleware bảo mật cho trang admin.
// Route::group(['prefix' => 'admin','middleware' => 'adminAuth'],function(){

	// Route::get('/','AdminController@index');

	// Route group The Loai
	Route::group(['prefix' => 'theloai'],function(){
		// Route URL: admin/theloai/danhsach
		Route::get('danhsach','TheLoaiController@getDanhSach');

		// Route URL: admin/theloai/them
		Route::get('them','TheLoaiController@Them');

		Route::post('them','TheLoaiController@XuLyThemTL');

		// Route URL: admin/theloai/sua
		Route::get('sua/{id}','TheLoaiController@Sua');

		Route::post('sua/{id}','TheLoaiController@XuLySuaTL');

		Route::get('xoa/{id}','TheLoaiController@Xoa');
	// });

	// Route group Loai Tin
	// Route::group(['prefix' => 'loaitin'],function(){
	// 	Route::get('danhsach','LoaiTinController@getDanhSach');

	// 	Route::get('them','LoaiTinController@Them');

	// 	Route::post('them','LoaiTinController@XuLyThemLT');

	// 	Route::get('sua/{id}','LoaiTinController@Sua');

	// 	Route::post('sua/{id}','LoaiTinController@XuLySuaLT');

	// 	Route::get('xoa/{id}','LoaiTinController@Xoa');
	// });

	// // Route group Tin Tuc
	// Route::group(['prefix' => 'tintuc'],function(){
	// 	Route::get('danhsach','TinTucController@getDanhSach');

	// 	Route::get('them','TinTucController@Them');

	// 	Route::post('them','TinTucController@XuLyThemTT');

	// 	Route::get('sua/{id}','TinTucController@Sua');

	// 	Route::post('sua/{id}','TinTucController@XuLySuaTT');

	// 	Route::get('xoa/{id}','TinTucController@Xoa');
	// });

	// // Route group User
	// Route::group(['prefix' => 'user'],function(){
	// 	Route::get('danhsach','UserController@getDanhSach');

	// 	Route::get('them','UserController@Them');

	// 	Route::post('them','UserController@XuLyThemUser');

	// 	Route::get('sua/{id}','UserController@Sua');

	// 	Route::post('sua/{id}','UserController@XuLySuaUser');

	// 	Route::get('xoa/{id}','UserController@Xoa');
	// });

	// // Route group Slide
	// Route::group(['prefix' => 'slide'],function(){
	// 	Route::get('danhsach','SlideController@getDanhSach');

	// 	Route::get('them','SlideController@Them');

	// 	Route::post('them','SlideController@XuLyThemSlide');

	// 	Route::get('sua/{id}','SlideController@Sua');

	// 	Route::post('sua/{id}','SlideController@XuLySuaSlide');

	// 	Route::get('xoa/{id}','SlideController@Xoa');
	// });

	// // Route group Ajax
	// Route::group(['prefix'=>'ajax'],function(){
	// 	Route::get('layloaitin/{idTheLoai}','AjaxController@getLoaiTin');

	// 	Route::get('timestamp','AjaxController@timestamp');
	// });
});