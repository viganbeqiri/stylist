<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::orderBy('id', 'desc')->paginate(10);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'cat_name' => 'required',
        ]);

        Category::create($data);
        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'cat_name' => 'required',
        ]);

        Category::find($id)->update($data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $products = Product::where('category_id', $id)->get();

        DB::beginTransaction();

        try {
            foreach ($products as $product) {
                $product->tags()->detach();
                $product->delete();
            }
            Category::find($id)->delete();
            DB::commit();

            return redirect()->back()->with('success', 'Products and associated tags deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'Error deleting products: ' . $e->getMessage());
        }
    }
}
