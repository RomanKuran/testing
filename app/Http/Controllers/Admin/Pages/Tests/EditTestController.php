<?php

namespace App\Http\Controllers\Admin\Pages\Tests;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;

class EditTestController extends Controller
{
    public function edit(Request $request){
        $id = $request->testId;
        $fieldName = $request->fieldName;
        $value = $request->value;
        return Test::where('id', $id)->update([$fieldName => $value]);
    }
}
