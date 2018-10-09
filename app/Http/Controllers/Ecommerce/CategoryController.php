<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_Category;

class CategoryController extends Controller
{
	public  function categories()
	{
   $categories = Product_Category::all();
   return view ('frontend/ecommerce/include/header',compact('categories')); 
}
}
