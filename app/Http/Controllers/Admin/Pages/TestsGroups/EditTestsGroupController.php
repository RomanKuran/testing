<?php

namespace App\Http\Controllers\Admin\Pages\TestsGroups;

use App\Http\Controllers\Controller;
use App\TestsGroup;
use Illuminate\Http\Request;

class EditTestsGroupController extends Controller
{
    public function editTestsGroup(Request $request){
        $id = $request->testsGroupId;
        $fieldName = $request->fieldName;
        $value = $request->value;
        return TestsGroup::where('id', $id)->update([$fieldName => $value]);
    }
}
