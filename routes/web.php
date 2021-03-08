<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use App\Category;
use App\Order;
use App\OrderedDish;
use App\Http\Requests\OrderFormRequest;
use App\Mail\OrderReceived;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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

   $restaurants = Restaurant::all();
    $categories = Category::all();

    return view('welcome', compact('restaurants', 'categories'));
});

// Route::get('/restaurants', 'RestaurantsController@index')->name('restaurants.index');
Route::get('/restaurant/{restaurant}', 'RestaurantsController@show')->name('restaurants.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/my-restaurants', 'MyRestaurantsController')->middleware('auth');

Route::resource('/my-dishes', 'MyDishesController')->middleware('auth');

Route::get('order-summary', function (Request $request) {

    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => '78rb6wd4qwjzhq8j',
        'publicKey' => 'qpyf7g338z7k862m',
        'privateKey' => 'd9a03f66933afa31343acd753c302269'
    ]);

    $token = $gateway->ClientToken()->generate();


    $cart = json_decode($request->cart);

    $request->session()->put('cart', $cart);

    $total = 0;
    foreach ($cart as $item) {

        $subTotal = $item->price * $item->quantity;
        $total += $subTotal;
    }

    $request->session()->put('total', $total);

    return view('guest.order_summary', compact('cart', 'total', 'token'));
});



Route::post('/checkout', function(OrderFormRequest $request) {

    $validated = $request->validated();

    $totalDishes = 0;
    foreach($request->session()->get('cart') as $el) {

        $totalDishes += $el->quantity;
    }


    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => '78rb6wd4qwjzhq8j',
        'publicKey' => 'qpyf7g338z7k862m',
        'privateKey' => 'd9a03f66933afa31343acd753c302269'
    ]);



    $result = $gateway->transaction()->sale([
        'amount' => $request->session()->get('total'),
        'paymentMethodNonce' => 'fake-valid-nonce',
        'options' => [
          'submitForSettlement' => True
        ]
    ]);



    if ($result->success) {


        $transactionId = $result->transaction;

        $newOrder = new Order;
        $newOrder->name = $validated['name'];
        $newOrder->surname = $validated['surname'];
        $newOrder->address = $validated['address'];
        $newOrder->phone = $validated['phone'];
        $newOrder->email = $validated['email'];
        $newOrder->information = $validated['information'];
        $newOrder->total_price = $request->session()->get('total');
        $newOrder->total_dishes = $totalDishes;
        $newOrder->date_order = Carbon::now()->format('Y-m-d h:i:s');
        $newOrder->payment = 1;
        $newOrder->save();

        Mail::to($newOrder->email)->send(new OrderReceived());

        foreach($request->session()->get('cart') as $element) {

           $newOrderedDish = new OrderedDish;
           $newOrderedDish->unitary_price = $element->price;
           $newOrderedDish->dish_quantity = $element->quantity;
           $newOrderedDish->order_id = $newOrder->id;
           $newOrderedDish->dish_id = $element->id;
           $newOrderedDish->save();
        }


        return view('guest.transaction_success', compact('transactionId'));

    } else {

        dd($result->errors->deepAll());

    }

})->name('checkout');


Route::get('/stats/{restaurant}', function (Restaurant $restaurant) {

    dd($restaurant->id);

    return view('user.stats');
})->name('stats');
