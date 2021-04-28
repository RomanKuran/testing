<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($categoryId = null)
    {
        if(isset($categoryId)){

        }else{
            $categories = Category::where('is_deleted', 0)->get();
            $firstCategory = $categories->first();
            return view('home.home', compact('categories', 'firstCategory'));
        }
    }
}
