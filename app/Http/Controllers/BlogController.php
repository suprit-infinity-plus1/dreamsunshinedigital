<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogMain(){
        return view("frontend.blog.blog-main");
    }
    public function smartBusiness()
    {
        return view('frontend.blog.smart-business-blog');
    }

    
    // New method for "smart-strategies-managing-bulk-inventory"
    public function smartStrategiesManagingBulkInventory()
    {
        return view('frontend.blog.smart-strategies-managing-bulk-inventory');
    }

    // New method for "stocking-premium-dates-elevate-product-offering"
    public function stockingPremiumDatesElevateProductOffering()
    {
        return view('frontend.blog.stocking-premium-dates-elevate-product-offering');
    }

    // New method for "right-way-store-eggs-extend-shelf-life"
    public function rightWayStoreEggsExtendShelfLife()
    {
        return view('frontend.blog.right-way-store-eggs-extend-shelf-life');
    }

    // New method for "identify-high-quality-basmati-rice-buyers-guide"
    public function identifyHighQualityBasmatiRice()
    {
        return view('frontend.blog.identify-high-quality-basmati-rice-buyers-guide');
    }
}
