<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home/{name}', function ($name) {
    echo 'Ahlan wasahlan '. $name;
});

//ni panggil customer and order
// Route::get('customer/{id}', function ($id) {
//     $customer = App\Customer::find($id);
//     echo $customer->name . '<br />';
//     echo 'Orders:' . '<br />';

//     echo '<ul>';
//     foreach ($customer->orders as $order) {
//     	# code...
//     	echo '<li>' .  $order->name . '</li>';
//     }
//     echo '</ul>';
// });

Route::get('customer/{id}', 'CustomerController@customer');


Route::get('customer_name', function(){
	$customer = App\Customer::where('name', '=', 'adibah')->first();
	echo $customer->id ;
});
 
Route::get('orders', function(){
 	$orders = App\Order::all();
 	foreach ($orders as $order){
 		echo $order->name ." oriented by " . $order->customer->name .  "<br />";
 	}

 });




// //create an item
// Route::post('test',function(){
// 	echo 'POST';
// }); 

// //read an item
// Route::get('test', function(){
// 	echo '<form method="POST" action="test">';
// 	echo '<input type="submit">';
// 	echo '<input type="hidden" value="PUT" name="_method">';  
// 	echo '</form>';
// });

// //update an item 
// Route::put('test',function(){
// 	echo 'PUT';
// });

// //delete an item
// Route::delete('test',function(){
// 	echo 'DELETE';
// }); 

Route::get('mypage', function(){
 	$data  = array(
 		'var1' => 'Burger',
 		'var2' => 'Fries',
 		'var3' => 'Spaghetti',
 		'orders' => App\Order::all()
 		 );
 	return view('mypage', $data);
 });

 
Route::group(['middleware' => ['web']], function() {
	Route::auth();
	Route::get('/', function () {
	    return view('welcome');
	});

Route::get('access', function(){
	echo 'You have accessed!';
})->middleware('isAdmin');

	Route::get('/home', 'HomeController@index');


}); 


Route::get('/chat', 'ChatController@index');
Route::post('sendmessage', 'ChatController@sendMessage');
