<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     return view('frontend.category.index'); // This will return the category view
    // }
    public function foodgrocery()
    {
        return view('frontend.category.foodgrocery'); // This will return the category view
    }
    public function anayarice()
    {
        return view('frontend.category.food_grocery.anaya-rice'); // This will return the category view
    }

    public function iramDates(){
        return view('frontend.category.iramdates.iramdates');
    }
    public function dates()
    {
        return view('frontend.category.food_grocery.dates'); // This will return the category view
    }
    public function dryFruits(){
        return view('frontend.category.iramdates.dry-fruits');
    }
    public function oil()
    {
        return view('frontend.category.food_grocery.oil'); // This will return the category view
    }
    public function sugar()
    {
        return view('frontend.category.food_grocery.sugar'); // This will return the category view
    }
    public function dairyeggs()
    {
        return view('frontend.category.dairyeggs'); // This will return the category view
    }
    public function dairy()
    {
        return view('frontend.category.dairy_eggs.dairy'); // This will return the category view
    }
    public function realeggs()
    {
        return view('frontend.category.dairy_eggs.realeggs'); // This will return the category view
    }
    public function beverages()
    {
        return view('frontend.category.beverages'); // This will return the category view
    }
    public function softDrinks()
    {
        return view('frontend.category.beverages.soft-drinks'); // This will return the category view
    }
    public function realoxy()
    {
        return view('frontend.category.beverages.realoxy'); // This will return the category view
    }
    public function anayatealeave()
    {
        return view('frontend.category.beverages.anayatealeave'); // This will return the category view
    }
}
