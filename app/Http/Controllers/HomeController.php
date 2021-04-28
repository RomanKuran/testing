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
        $categories = Category::where('is_deleted', 0)->get();
        if(isset($categoryId)){
            $category = Category::where('id', $categoryId)->where('is_deleted', 0)->first();
            if(isset($category)){
                $groups = $category->testsGroups;
            }else{
                return redirect()->route('home');
            }
        }else{
            $firstCategory = $categories->first();
            $groups = $firstCategory->testsGroups;
        }
        return view('home.home', compact('categories', 'groups'));
    }
}
