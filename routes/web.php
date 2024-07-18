<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

use App\Http\Controllers\FeedbackController;

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
})->name('root');


Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Route::get('/profile',[ItemsController::class,'getProfile'])->name('profile');

Route::get('/menu',[ItemsController::class,'getData'])->name('menu');


Route::get('/C2menu',[ItemsController::class,'show'])->name('C2menu');

Route::get('/margalla',[ItemsController::class,'showdata'])->name('margalla');

Route::get('/kybo',[ItemsController::class,'showmenu'])->name('kybo');

Route::get('/C3menu',[ItemsController::class,'displaymenu'])->name('C3menu');


Route::get('/C4menu',[ItemsController::class,'c4menu'])->name('C4menu');

Route::get('/buddies',[ItemsController::class,'buddiesmenu'])->name('buddies');

Route::get('/retro',[ItemsController::class,'retromenu'])->name('retro');

Route::get('/dreamville',[ItemsController::class,'dreamvillemenu'])->name('dreamville');

Route::get('/eatalia',[ItemsController::class,'eataliamenu'])->name('eatalia');


Route::post('/menu',[ItemsController::class,'addtoCart'])->middleware(['auth','verified']);





Route::get('/feedback', function () {
 return view('feedback');
})->name('feedback');




Route::post('feedback',[FeedbackController::class,'addreviews'])->middleware(['auth','verified']);


Route::get('/addtocart/{id}',[ItemsController::class,'getAddToCart'])->middleware(['auth','verified'])->name('addtoCart');

Route::get('/viewcart',[ItemsController::class,'getCart'])->middleware(['auth','verified'])->name('viewcart');

Route::get('/contact', function () {
return view('contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


Route::get('/privacy', function () {
         return view('privacy');
    })->name('privacy');


Route::get('/terms', function () {
         return view('terms');
    })->name('terms');


Route::get('/checkout',[ItemsController::class,'getcheckout'])->middleware(['auth','verified'])->name('checkout');

// Route::get('/orderplaced', function () {
//  return view('orderplaced');
// });


Route::get('/orderplace',[ItemsController::class,'placeorder'])->middleware(['auth','verified'])->name('placed');
Route::post('/order',[ItemsController::class,'postCheckout'])->middleware(['auth','verified']);
















// te::get('/checkout', function () {
//     return view('checkout');
// })->name('checkout');


// Route::get('/orderplaced',[ItemsController::class,'placeorder'])->middleware(['auth','verified'])->name('orderplaced');



// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');



// Route::get('/menu', function () {
//     return view('menu');
// });
// Route::get('/cart', [ItemsController::class, 'cart'])->name('cart');
// Route::post('add-to-cart/{id}', [ItemsController::class, 'addToCart'])->name('add.to.cart');
// Route::patch('update-cart', [ItemsController::class, 'update'])->name('update.cart');
// Route::delete('remove-from-cart', [ItemsController::class, 'remove'])->name('remove.from.cart');

// Route::post('/updatecart',[ItemsController::class,''])

// Route::get('menu', [fastfoodController::class,'index']);

//Route::get('/menu', [fastfoodController::class,'show']);    //this thing is same as the line below 

// Route::get('/menu', 'App\Http\Controllers\fastfoodController@index');   // this has same meaning as the line above 

// Route::get('/menu',[shakecontroller::class,'show']);


// Route::get('/menu/{id}', function (Request $request, $id) {
//     return 'menu'.$id;
// });




// Route::get('menu', function () {


//     return view('menu');
// })->name('menu');




//Route:: get('/get-data',[UserController::class,'index']);



// Route::get('privacy', function () {
//         return view('privacy');
//     })->middleware(['auth','verified'])->name('privacy');





// Route::get('terms', function () {
//     return view('terms');
//     })->middleware(['auth','verified'])->name('terms');




require __DIR__.'/auth.php';


// Route::group(['middleware' => ['auth','verified']], function() {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::resource('/blog', 'BlogController');
//     Route::resource('/category', 'CategoryController');
// });