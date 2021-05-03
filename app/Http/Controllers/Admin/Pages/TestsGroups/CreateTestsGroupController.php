<?php

namespace App\Http\Controllers\Admin\Pages\TestsGroups;

use App\Http\Controllers\Controller;
use App\TestsGroup;
use Illuminate\Http\Request;

class CreateTestsGroupController extends Controller
{
    public function createTestsGroup(Request $request){
        parse_str($request->data, $formdata);

        $newTestsGroup = new TestsGroup();
        $newTestsGroup->category_id = $formdata['category_id'];
        $newTestsGroup->name = $formdata['name'];
        $newTestsGroup->is_deleted = 0;
        $newTestsGroup->save();

        $testsGroups = $newTestsGroup->where('category_id', $formdata['category_id'])->get();
        $testsGroups = view('admin.pages.testsGroups.inc.testsGroupsTable', compact('testsGroups'))->render();
        $testsGroups = ["testsGroups" => $testsGroups];
        $testsGroups = json_encode($testsGroups, JSON_UNESCAPED_UNICODE);
        return $testsGroups;
    }
}
