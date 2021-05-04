<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories(){
        $categories = Category::get();
        return view('admin.pages.categories.categories', compact('categories'));
    }
}
