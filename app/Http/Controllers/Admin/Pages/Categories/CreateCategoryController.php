<?php

namespace App\Http\Controllers\Admin\Pages\Categories;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function createCategory(Request $request){
        parse_str($request->data, $formdata);

        $newCategory = new Category();
        $newCategory->name = $formdata['name'];
        $newCategory->is_deleted = 0;
        $newCategory->save();

        $categories = $newCategory->get();
        $categories = view('admin.pages.categories.inc.categoriesTable', compact('categories'))->render();
        $categories = ["categories" => $categories];
        $categories = json_encode($categories, JSON_UNESCAPED_UNICODE);
        return $categories;
    }
}
