<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about(){
        return view('frontend.aboutus.about');
    }
    public function contact(){
        return view('frontend.contactus.contact');
    }

    public function singleProduct()
    {
        return view('frontend.singleProduct.index');
    }

    //---------------FoodGrocery---------------
    public function rice(){
        return view('frontend.singleproduct.foodgrocery.rice');
    }
    public function dates(){
        return view('frontend.singleproduct.foodgrocery.dates');
    }
    public function oil_bottle(){
        return view('frontend.singleproduct.foodgrocery.oil_bottle');
    }
    public function oil_pouch(){
        return view('frontend.singleproduct.foodgrocery.oil_pouch');
    }
    public function oil_container(){
        return view('frontend.singleproduct.foodgrocery.oil_container');
    }
    public function dreamsugar(){
        return view('frontend.singleproduct.foodgrocery.dreamsugar');
    }
    public function anayatealeave(){
        return view('frontend.singleproduct.beverages.anayatealeave');
    }

   
//---------------DairyEggs---------------

    public function milk(){
        return view('frontend.singleproduct.dairyeggs.milk');
    }
    public function milkbuffalo(){
        return view('frontend.singleproduct.dairyeggs.milkbuffalo');
    }
    public function milk_tetrapack(){
        return view('frontend.singleproduct.dairyeggs.milk_tetrapack');
    }
    public function yogurt(){
        return view('frontend.singleproduct.dairyeggs.yogurt');
    }
    public function ghee(){
        return view('frontend.singleproduct.dairyeggs.ghee');
    }
    public function realeggs(){
        return view('frontend.singleproduct.dairyeggs.realeggs');
    }
    public function paneer(){
        return view('frontend.singleproduct.dairyeggs.paneer');
    }

    //---------------Beverages---------------

    
    public function jeeramasala(){
        return view('frontend.singleproduct.beverages.jeeramasala');
    }
    public function applejuice(){
        return view('frontend.singleproduct.beverages.applejuice');
    }
    public function orangejuice(){
        return view('frontend.singleproduct.beverages.orangejuice');
    }
    
    public function realoxy1(){
        return view('frontend.singleproduct.beverages.realoxy1');
    }
    public function realoxy2(){
        return view('frontend.singleproduct.beverages.realoxy2');
    }
    


}
