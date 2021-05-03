<?php

namespace App\Http\Controllers\Admin\Pages\TestsGroups;

use App\Category;
use App\Http\Controllers\Controller;
use App\TestsGroup;
use Illuminate\Http\Request;

class TestsGroupsController extends Controller
{
    public function testsGroups(Request $request){
        if($request->ajax()){
            $categoryId = $request->categoryId;
            $category = Category::where('id', $categoryId)->first();
            $testsGroups = $category->testsGroups()->get();
            $testsGroups=view('admin.pages.testsGroups.inc.testsGroupsTable', compact('testsGroups'))->render();
            $testsGroups=["testsGroups"=>$testsGroups];
            $testsGroups=json_encode($testsGroups, JSON_UNESCAPED_UNICODE);
            return $testsGroups;
        }else{
            $categories = Category::get();
            $firstCategory = $categories->first();
            $testsGroups = $firstCategory->testsGroups()->get();

            return view('admin.pages.testsGroups.testsGroups', compact('testsGroups', 'categories'));
        }
    }
}
