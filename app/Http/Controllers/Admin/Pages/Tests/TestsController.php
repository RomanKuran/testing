<?php

namespace App\Http\Controllers\Admin\Pages\Tests;

use App\Category;
use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function tests(Request $request){
        if($request->ajax()){
            if(isset($request->categoryId)){
                $categoryActivate=Category::where('id', $request->categoryId)->first();
                $testsGroups=$categoryActivate->testsGroups;
                $selectTestsGroups=view('admin.pages.tests.inc.selectTestsGroups', compact('testsGroups'))->render();
                $tests=null;
                if($testsGroups->count() && $testsGroups->first()->tests()->count()){
                    $tests=$testsGroups->first()->tests()->get();
                    $tests=view('admin.pages.tests.inc.testsTable', compact('tests'))->render();
                }
                $dataFromCategoryId=["selectTestsGroups"=>$selectTestsGroups, 'tests'=>$tests];
                $dataFromCategoryId=json_encode($dataFromCategoryId, JSON_UNESCAPED_UNICODE);
                return $dataFromCategoryId;
            }elseif(isset($request->testGroupId)){
                $tests=Test::where('tests_group_id', $request->testGroupId)->get();
                $tests=view('admin.pages.tests.inc.testsTable', compact('tests'))->render();
                $dataFromTestsGroupId=['tests'=>$tests];
                $dataFromTestsGroupId=json_encode($dataFromTestsGroupId, JSON_UNESCAPED_UNICODE);
                return $dataFromTestsGroupId;
            }
        }else{
            $categories=Category::get();
//            $firstSocialCategory = $socials->first()->getSocialCategory;
            $testsGroups = [];
            $tests = [];
            if($categories->count()){
                $testsGroups = $categories->first()->testsGroups;
                $tests = $testsGroups->first()->tests()->get();
            }

            return view('admin.pages.tests.tests', compact('categories', 'testsGroups', 'tests'));
        }
    }
}
