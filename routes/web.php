<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\InquiryController;
use App\Http\Controllers\Sc_admin\OrdersController;
use App\Http\Controllers\Sc_admin\BlogController;
use App\Http\Controllers\Sc_admin\CustomersController;
use App\Http\Controllers\Sc_admin\FoodcategoriesController;
use App\Http\Controllers\Sc_admin\MenuController;
use App\Http\Controllers\Sc_admin\DashboardController;
use App\Http\Controllers\Sc_admin\BannersController;
use App\Http\Controllers\Sc_admin\KitchenController;
use App\Http\Controllers\Sc_admin\ManagerestaurantController;
use App\Http\Controllers\Sc_admin\TransactionsController;
use App\Http\Controllers\Sc_admin\BooktableController;
use App\Http\Controllers\Sc_admin\UsersController;



    Route::group(['name' => 'client'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
    Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contact-us');
    Route::get('/menu-details', [HomeController::class, 'menu'])->name('menu-details');
    Route::get('/success', [HomeController::class, 'success'])->name('success');
    Route::get('/about-us', [HomeController::class, 'aboutus'])->name('about-us');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog-detail', [BlogController::class, 'details'])->name('blog-detail');
});


Auth::routes();
// Route::group(['middleware' => ['admin'],'prefix' => 'auth'], function () {
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/messages', [DashboardController::class, 'messages'])->name('messages');

    //orders routes
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/order-details/{id}', [OrdersController::class, 'orderdetails'])->name('orderdetails');
    Route::get('/accept-order/{id}', [OrdersController::class, 'acceptorder'])->name('acceptorder');
    Route::get('/reject-order/{id}', [OrdersController::class, 'rejectorder'])->name('rejectorder');





    //customers routes
    Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
    Route::get('/addcustomers', [CustomersController::class, 'create'])->name('addcustomer');
    Route::post('/storecustomer', [CustomersController::class, 'store'])->name('storecustomer');
    Route::get('/import', [CustomersController::class, 'import'])->name('import');
    Route::post('/uploadcsv', [CustomersController::class, 'uploadcsv'])->name('uploadcsv');

    //food category routes
    Route::get('/foodcategories', [FoodcategoriesController::class, 'index'])->name('foodcategories');
    Route::get('/create-foodcat', [FoodcategoriesController::class, 'create'])->name('addfoodcategory');
    Route::post('/storefoodcategory', [FoodcategoriesController::class, 'store'])->name('storefoodcategory');
    Route::get('/food-category/{id}', [FoodcategoriesController::class, 'edit'])->name('editcategory');
    Route::post('/update-category/{id}', [FoodcategoriesController::class, 'update'])->name('updatecategory');
    Route::get('delete-category/{id}',[FoodcategoriesController::class, 'destroy'])->name('delete-category');


    //menu routes
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/create', [MenuController::class, 'create'])->name('addmenu');
    Route::post('/storemenu', [MenuController::class, 'store'])->name('storemenu');
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/create', [MenuController::class, 'create'])->name('addmenu');
    Route::get('/edit-menu/{id}', [MenuController::class, 'edit'])->name('editmenu');
    Route::post('/update-menu/{id}', [MenuController::class, 'update'])->name('updatemenu');
    Route::get('/delete-menu/{id}', [MenuController::class, 'deletemenu'])->name('delete-menu');
// });

    //Cart & checkout routes
    Route::get('cart', [CheckoutController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [CheckoutController::class, 'addToCart'])->name('add.to.cart');
    Route::post('update-cart', [CheckoutController::class, 'update'])->name('update.cart');
    Route::post('remove-from-cart', [CheckoutController::class, 'remove'])->name('remove.from.cart');
    Route::get('place-order', [CheckoutController::class, 'placeOrder'])->name('place-order');
    Route::post('checkout-order', [CheckoutController::class, 'checkoutOrder'])->name('checkout-order');


    //banners routes
    Route::get('/banners', [BannersController::class, 'index'])->name('banners');
    Route::get('/addbanner', [BannersController::class, 'create'])->name('addbanner');
    Route::post('/storebanner', [BannersController::class, 'store'])->name('storebanner');

    //kitchen routes
    Route::get('/kitchen-list',[KitchenController::class, 'index'])->name('kitchen-list');
    Route::get('stock',[KitchenController::class, 'stock'])->name('stock');
    Route::get('/add-stock', [KitchenController::class, 'create'])->name('addstock');
    Route::post('/uploadkitchencsv', [KitchenController::class, 'uploadcsv'])->name('uploadkitchencsv');
    Route::get('assign-stock/{id}', [KitchenController::class, 'assignStock'])->name('assignStock');
    Route::post('/storekitchenassignment', [KitchenController::class, 'store'])->name('store-kitchen-assignment');

    // book table

    Route::post('book-table',[InquiryController::class, 'bookTable'])->name('book-table');


    //address routes
    Route::get('restaurant-address/{id}',[HomeController::class, 'resAddress'])->name('restaurant-address');

    //Restaurant lisitng

    Route::get('restaurant-list',[ManagerestaurantController::class, 'restaurantList'])->name('restaurant-list');
    Route::get('create-restaurant',[ManagerestaurantController::class, 'create'])->name('create-restaurant');
    Route::post('add-restaurant',[ManagerestaurantController::class, 'addRestaurant'])->name('add-restaurant');
    Route::get('edit-restaurant/{id}',[ManagerestaurantController::class, 'editRestaurant'])->name('edit-restaurant');
    Route::post('update-restaurant/{id}',[ManagerestaurantController::class, 'updateRestaurant'])->name('update-restaurant');
    Route::get('delete-restaurant/{id}',[ManagerestaurantController::class, 'deleteRestaurant'])->name('delete-restaurant');

    //stock transactions

    Route::post('transactions/{stock}', [TransactionsController::class,'storeStock'])->name('transactions.storeStock');
    Route::resource('transactions', 'TransactionsController')->only(['index']);



    //book table routes
    Route::get('/tablebooking', [BooktableController::class, 'index'])->name('tablebooking');
    Route::get('/accept-booking/{id}', [BooktableController::class, 'acceptbooking'])->name('acceptbooking');
    Route::get('/reject-booking/{id}', [BooktableController::class, 'rejectbooking'])->name('rejectbooking');

    //users routes
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/create-user', [UsersController::class, 'create'])->name('adduser');
    Route::post('/storeuser', [UsersController::class, 'store'])->name('storeuser');
    Route::get('/suspend/{id}', [UsersController::class, 'suspend'])->name('suspend-user');
    Route::get('/activate-user/{id}', [UsersController::class, 'activate'])->name('activate-user');
    Route::get('/edit-user/{id}', [UsersController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [UsersController::class, 'update'])->name('updateuser');
