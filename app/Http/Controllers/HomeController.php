<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                $groups = $category->testsGroups()->
                whereHas("tests", function($query) {
                    $query->selectRaw("count(tests.id) > 0");
                    $query->select('tests.*');
                })
                ->with(["userTestsAnswer" => function($q){
                    $user = Auth::user();
                    $q->where('user_tests_answers.user_id', $user->id);
                    $q->orderBy('percentage', 'desc')->first();
                }])
                    ->get();
            }else{
                return redirect()->route('home');
            }
        }else{
            $firstCategory = $categories->first();

            $groups = $firstCategory->testsGroups()->
                whereHas("tests", function($query) {
                    $query->selectRaw("count(tests.id) > 0");
                    $query->select('tests.*');
                })
                ->with(["userTestsAnswer" => function($q){
                    $user = Auth::user();
                    $q->where('user_tests_answers.user_id', $user->id);
                    $q->orderBy('percentage', 'desc')->first();
                }])
                ->get();
        }
        return view('home.home', compact('categories', 'groups'));
    }
}
