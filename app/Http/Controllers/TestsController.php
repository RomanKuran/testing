<?php

namespace App\Http\Controllers;

use App\Category;
use App\TestsGroup;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test($groupId = null){
        $categories = Category::where('is_deleted', 0)->get();
        $group = TestsGroup::where('is_deleted', 0)->where('id', $groupId)->first();
        if(isset($group)){
            $tests = $group->tests()->where('is_deleted', 0)->get();
//            dd(json_decode($tests[0]->tests, true));
            if(count($tests) > 0){
                return view('home.tests.test', compact('tests','categories'));
            }
        }
//        if(isset($categoryId)){
//            $category = Category::where('id', $categoryId)->where('is_deleted', 0)->first();
//            if(isset($category)){
//                $groups = $category->testsGroups;
//            }else{
//                return redirect()->route('home');
//            }
//        }else{
//            $firstCategory = $categories->first();
//            $groups = $firstCategory->testsGroups;
//        }
//        return view('home.home', compact('categories', 'groups'));
    }
}
