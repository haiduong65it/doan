<?php

Route::get('/', function () {
    return view('welcome');

});

Route::get('index', function () {
    return view('admin/layout/layout');
});

Route::get('admin/dangnhap','userController@getLoginAdmin');
Route::post('admin/dangnhap','userController@postLoginAdmin');
Route::get('admin/logout','userController@getLogoutAdmin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function () {
	Route::group(['prefix'=>'user'], function () {

    	Route::get('danhsach','userController@getDanhsach');

		Route::get('sua/{id}','userController@getSua');
		Route::post('sua/{id}','userController@postSua');

		Route::get('them','userController@getThem');
		Route::post('them','userController@postThem');

		Route::get('xoa/{IDNV}','nhanvienController@getXoa');
	});
	Route::group(['prefix'=>'nhanvien'], function () {

    	Route::get('danhsach','nhanvienController@getDanhsach');

		Route::get('sua/{IDNV}','nhanvienController@getSua');
		Route::post('sua/{IDNV}','nhanvienController@postSua');

		Route::get('them','nhanvienController@getThem');
		Route::post('them','nhanvienController@postThem');

		Route::get('xoa/{IDNV}','nhanvienController@getXoa');
	});
	Route::group(['prefix'=>'thuonghieu'], function () {

    	Route::get('danhsach','thuonghieuController@getDanhsach');

		Route::get('sua/{MaTH}','thuonghieuController@getSua');
		Route::post('sua/{MaTH}','thuonghieuController@postSua');

		Route::get('them','thuonghieuController@getThem');
		Route::post('them','thuonghieuController@postThem');

		Route::get('xoa/{MaTH}','thuonghieuController@getXoa');
	});
	Route::group(['prefix'=>'sanpham'], function () {

    	Route::get('danhsach','sanphamController@getDanhsach');

		Route::get('sua/{MaSP}','sanphamController@getSua');
		Route::post('sua/{MaSP}','sanphamController@postSua');

		Route::get('them','sanphamController@getThem');
		Route::post('them','sanphamController@postThem');

		Route::get('xoa/{MaSP}','sanphamController@getXoa');
	});
	Route::group(['prefix'=>'donhang'], function () {

    	Route::get('danhsach','donhangController@getDanhsach');

		Route::get('duyetdon/{MaDH}','donhangController@getDuyet');
		Route::post('duyetdon/{MaDH}','donhangController@postDuyet');

		Route::get('xoa/{MaDH}','donhangController@getXoa');
	});
	Route::group(['prefix'=>'thanhvien'], function () {

    	Route::get('danhsach','thanhvienController@getDanhsach');

		Route::get('xoa/{idtv}','thanhvienController@getXoa');
	});
	Route::group(['prefix'=>'ajax'],function(){

		Route::get('quanhuyen/{id_tinh}','AjaxController@getqh');

		Route::get('xaphuong/{id_huyen}','AjaxController@getpx');

	});
});

Route::get('trangchu','PagesController@trangchu');