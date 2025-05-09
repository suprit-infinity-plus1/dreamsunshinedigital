<?php


use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\DreamTransportController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;   
use App\Http\Controllers\BlogController;   


// Route::get('/', function () {
//     return view('frontend.home.index');
// });
//-------------------------------Contact and About us--------------------------
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/about', [MainController::class, 'about'])->name('about');

//-------------------------------Blog --------------------------
Route::get('/blog-main', [BlogController::class,'blogMain'])->name('blog');
Route::prefix('blog')->group(function () {
    // Existing route
    Route::get('/smart-business', [BlogController::class, 'smartBusiness'])->name('smart-business');

    // New routes for the blog cards
    Route::get('/smart-strategies-managing-bulk-inventory', [BlogController::class, 'smartStrategiesManagingBulkInventory'])->name('smart-strategies-managing-bulk-inventory');
    Route::get('/stocking-premium-dates-elevate-product-offering', [BlogController::class, 'stockingPremiumDatesElevateProductOffering'])->name('stocking-premium-dates-elevate-product-offering');
    Route::get('/right-way-store-eggs-extend-shelf-life', [BlogController::class, 'rightWayStoreEggsExtendShelfLife'])->name('right-way-store-eggs-extend-shelf-life');
    Route::get('/identify-high-quality-basmati-rice-buyers-guide', [BlogController::class, 'identifyHighQualityBasmatiRice'])->name('identify-high-quality-basmati-rice-buyers-guide');
});

// -------------------------------Dream Trnasport --------------------------

Route::get('/dream-transport', [DreamTransportController::class,'dreamTransport'])->name('dream-transport');

// -------------------------------Dream Sunshine Developers --------------------------

Route::get('/dream-sunshine-developers', [DevelopersController::class,'dreamSunshineDevelopers'])->name('dream-sunshine-developers');



//-------------------------------Category Product--------------------------
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/single-product', action: [MainController::class, 'singleproduct'])->name('singleproduct');
// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/food-&-grocery', [CategoryController::class, 'foodgrocery'])->name('category.foodgrocery');
Route::get('/category/anaya-rice', [CategoryController::class, 'anaya-rice'])->name('category.anaya-rice');

Route::get('/category/iramdates', [CategoryController::class, 'iramDates'])->name('category.iramdates');
Route::get('/category/dates', [CategoryController::class, 'dates'])->name('category.dates');
Route::get('/category/dry-fruits', [CategoryController::class, 'dryFruits'])->name('category.dry-fruits');
Route::get('/category/dry-fruits', [CategoryController::class, 'dryFruits'])->name('category.dry-fruits');
Route::get('/category/oil', [CategoryController::class, 'oil'])->name('category.oil');
Route::get('/category/sugar', [CategoryController::class, 'sugar'])->name('category.sugar');
Route::get('/category/dairyeggs', [CategoryController::class, 'dairyeggs'])->name('category.dairyeggs');
Route::get('/category/dairy', [CategoryController::class, 'dairy'])->name('category.dairy');
Route::get('/category/realeggs', [CategoryController::class, 'realeggs'])->name('category.realeggs');
Route::get('/category/beverages', [CategoryController::class, 'beverages'])->name('category.beverages');
Route::get('/category/soft-drinks', [CategoryController::class, 'softDrinks'])->name('category.soft-drinks');
Route::get('/category/realoxy', [CategoryController::class, 'realoxy'])->name('category.realoxy');
Route::get('/category/anayatealeave', [CategoryController::class, 'anayatealeave'])->name('category.anayatealeave');

Route::prefix('products')->group(function () {
Route::get(uri: '/rice', action: [MainController::class, 'rice'])->name('singleproduct.rice');
Route::get(uri: '/dates', action: [MainController::class, 'dates'])->name('singleproduct.dates');
Route::get(uri: '/oil_bottle', action: [MainController::class, 'oil_bottle'])->name('singleproduct.oil_bottle');
Route::get(uri: '/oil_pouch', action: [MainController::class, 'oil_pouch'])->name('singleproduct.oil_pouch');
Route::get(uri: '/oil_container', action: [MainController::class, 'oil_container'])->name('singleproduct.oil_container');
Route::get(uri: '/dreamsugar', action: [MainController::class, 'dreamsugar'])->name('singleproduct.dreamsugar');

Route::get(uri: '/milk', action: [MainController::class, 'milk'])->name('singleproduct.milk');
Route::get(uri: '/milkbuffalo', action: [MainController::class, 'milkbuffalo'])->name('singleproduct.milkbuffalo');
Route::get(uri: '/milk_tetrapack', action: [MainController::class, 'milk_tetrapack'])->name('singleproduct.milk_tetrapack');
Route::get(uri: '/yogurt', action: [MainController::class, 'yogurt'])->name('singleproduct.yogurt');
Route::get(uri: '/ghee', action: [MainController::class, 'ghee'])->name('singleproduct.ghee');
Route::get(uri: '/realeggs', action: [MainController::class, 'realeggs'])->name('singleproduct.realeggs');
Route::get(uri: '/paneer', action: [MainController::class, 'paneer'])->name('singleproduct.paneer');

Route::get(uri: '/anayatealeave', action: [MainController::class, 'anayatealeave'])->name('singleproduct.anayatealeave');
Route::get(uri: '/jeeramasala', action: [MainController::class, 'jeeramasala'])->name('singleproduct.jeeramasala');
Route::get(uri: '/applejuice', action: [MainController::class, 'applejuice'])->name('singleproduct.applejuice');
Route::get(uri: '/orangejuice', action: [MainController::class, 'orangejuice'])->name('singleproduct.orangejuice');
Route::get(uri: '/realoxy1', action: [MainController::class, 'realoxy1'])->name('singleproduct.realoxy1');
Route::get(uri: '/realoxy2', action: [MainController::class, 'realoxy2'])->name('singleproduct.realoxy2');
});
