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
Route::get('/home', function () {
    return view('layouts.home');
});



Route::get('/home',function(){
	return view('layouts.home');
});
Route::get('/login',function(){
	return view('layouts.login');
});
Route::post('/login-submit','AdminController@loginSubmit');

Route::get('/register',function(){
	return view('layouts.register');
});

Route::post('/register-submit','AdminController@registerSubmit');


Route::get('/dashboard',function(){
  return view('layouts.dashboard');
});

Route::get('/students',function(){
  
  return view('layouts.students');
});






Route::get('/all',function(){
	$dp = DB::table('depts')
		->join('empls','depts.id', '=', 'empls.dept_id')
		->select('depts.name as dnm','empls.id','empls.name as enm')
		->get();
		//dd($dp);
		//echo $dp->name;
	foreach($dp as $d){
		//echo "name:".$d->name ."<br>";
		var_dump($d); echo"<br>";
		//echo $d->dnm." => ";
		//echo $d->enm."<br>";
	}

	/*
	$dp = App\Dept::find(2);
	echo "Dept id:".$dp->id;
	echo "<br>Dept Name:".$dp->name."<br>";
	$dp = $dp->empls;

	//dd($dp);
	foreach($dp as $d){
		echo "id:".$d->name."<br>";
	}
	*/
});
