<?php

namespace App\Http\Controllers\Admin\Pages\Tests;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;

class CreateTestController extends Controller
{
    public function createTest(Request $request){
        parse_str($request->data, $formdata);

        $newTest = new Test();
        $newTest->name = $formdata['name'];
        $newTest->tests = $formdata['tests'];
        $newTest->answers = $formdata['answers'];
        $newTest->type = 'test';
        $newTest->is_deleted = 0;
        $newTest->tests_group_id = $formdata['tests_group_id'];
        $newTest->save();

        $tests = $newTest->get();
        $tests = view('admin.pages.tests.inc.testsTable', compact('tests'))->render();
        $tests = ["tests" => $tests];
        $tests = json_encode($tests, JSON_UNESCAPED_UNICODE);
        return $tests;
    }
}
