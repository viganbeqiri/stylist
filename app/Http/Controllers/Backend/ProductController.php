<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.cat_name as category_name')
            ->paginate(20);

        return view('backend/product/index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('backend/product/create', $data);
    }

    public function store(Request $request)
    {

        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'qty' => 'required|integer',
            'code' => 'required|string',
            'category_id' => 'required|numeric',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'nullable|string',
            'images.*' => 'mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $imagePaths = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = Str::slug($request->name, '-');
                    $imageName = $name . '-' . Str::random(10) . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $imagePaths[] = $imageName;
                }
            }

            $product =  Product::create([
                'name' => $request->name,
                'purchase_price' => (float)$request->purchase_price,
                'selling_price' => (float)$request->selling_price,
                'qty' => (int)$request->qty,
                'code' => $request->code,
                'category_id' => $request->category_id,
                'rating' => $request->rating,
                'description' => $request->description,
                'images' => $imagePaths,
            ]);

            if (!empty($request->tag)) {
                $tags = Tag::whereIn('id', $request->tag)->pluck('id')->toArray();
                $product->tags()->sync($tags);
            }

            return redirect()->route('product.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function edit($id)
    {
        $data['product'] = Product::where('id', $id)->first();
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('backend/product/edit',$data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'qty' => 'required|integer',
            'code' => 'required|string',
            'category_id' => 'required|numeric',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'nullable|string',
            'images.*' => 'mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $product = Product::where('id', $id)->first();
            $imagePaths = $product->images;
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = Str::slug($request->name, '-');
                    $imageName = $name . '-' . Str::random(10) . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $imagePaths[] = $imageName;
                }
            }else{
                $imagePaths = $product->images;
            }

            $product->update([
                'name' => $request->name,
                'purchase_price' => (float)$request->purchase_price,
                'selling_price' => (float)$request->selling_price,
                'qty' => (int)$request->qty,
                'code' => $request->code,
                'category_id' => $request->category_id,
                'rating' => $request->rating,
                'description' => $request->description,
                'images' => $imagePaths,
            ]);

            if (!empty($request->tag)) {
                $tags = Tag::whereIn('id', $request->tag)->pluck('id')->toArray();
                $product->tags()->sync($tags);
            }

            return redirect()->route('product.index')->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->tags()->detach();
        $product->delete();
        return redirect()->route('product.index');
    }
}
