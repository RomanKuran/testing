<?php

namespace App\Http\Controllers\Admin\Pages\Categories;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditCategoryController extends Controller
{
    public function edit(Request $request){
        $id = $request->id;
        $fieldName = $request->fieldName;
        $value = $request->value;
        return Category::where('id', $id)->update([$fieldName => $value]);
    }
}
