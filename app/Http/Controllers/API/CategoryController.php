<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // all categorys
    public function index()
    {
        $categorys = Category::all()->toArray();
        return array_reverse($categorys);
    }

    // add category
    public function add(Request $request)
    {
        $category = new Category([
            'category_name' => $request->name,
        ]);
        $category->save();

        return response()->json('The category successfully added');
    }

    // edit category
    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    // update category
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json('The category successfully updated');
    }

    // delete category
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json('The category successfully deleted');
    }
}
