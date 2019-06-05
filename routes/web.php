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
	
	Route::auth();
	
	Route::get('/', function () {
	return view('welcome');
	});
	
	// 検索ページ
	Route::get('/search', 'SearchController@search');
	Route::post('/search', 'SearchController@search');
	
	// 一覧ページ
	Route::get('/list', 'ListController@list');
	
	// 照会ページ
	Route::get('/inquery', 'InqueryController@Inquery');
	
	// 登録ページ
	Route::get('/contact' , 'ContactController@edit');
	Route::get('/contact_result' , 'ContactresultController@create');
	
	// 更新ページ
	Route::get('/update' , 'UpdateController@edit');
	Route::get('/update_result' , 'UpdateresultController@update');
	
	// 削除ページ
	Route::get('/delete' , 'DeleteController@edit');
	Route::get('/delete_result' , 'DeleteresultController@delete');
	
	
	Route::get('/login','LoginController@create');
	
	Route::get('/loginform','LoginController@form');
	
	
	Route::get('/home', 'HomeController@index')->name('home');
	
	
	Route::get('/about', [
	uses' => 'AboutController@show'
	]);
	
	
	
	Route::get('/v_bind_test', function () {
	return view('v_bind_test')->with('test', '変数テスト');
	});
	
	Route::get('/post_test', 'PostTestController@form');
	
	
	Route::post('/post_test', 'PostTestController@form');
	
	Route::get('/new', 'NewController@new');
	
	Route::get('/newresult', 'NewController@newresult');
	
