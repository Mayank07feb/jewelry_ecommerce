<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    public function create(){
        $categories = Category::where('is_parent', '1')->get();
        $brands = Brand::where('status', 'active')->get();
        return view('backend.product.create', compact('brands'))->with('categories', $categories);
    }

    public function  store(ProductRequest $request){
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0){
            $slug = $slug.'-'.date('ymdis').'-'.rand(0, 999);
        }
        $data['slug'] = $slug;
        $product = Product::create($data);
//        $product = '';
        if ($request->file('images')){
            $images = $request->file('images');
            foreach ($images as $image){
                $file = $image->store('public/productImage');
                ProductImage::create(['product_id' => $product->id, 'image' => str_replace('public/', '', $file)]);
            }
//            $product->photo = str_replace('public/', '', $file);
        }
        if($product){
            request()->session()->flash('success','Product successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding product');
        }
        return redirect()->route('product.index');
    }

    public function edit(Product $product){
        $categories = Category::where('is_parent', '1')->get();
        $brands = Brand::all();

        return view('backend.product.edit', compact('product', 'categories', 'brands'));
    }

    public function update(ProductRequest $request, Product $product){
        $status = $product->update($request->except('photo'));

        if ($request->file('photo')){
            if($product->photo){
                $filePath = public_path('storage/'. $product->photo);
                if(file_exists($filePath)){
                    unlink($filePath);
                }
            }
            $file = $request->file('photo')->store('public/product');
            $product->photo = str_replace('public/', '', $file);
            $product->save();
        }

        if($status){
            request()->session()->flash('success','Product successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating product');
        }
        return redirect()->route('product.index');
    }

    public function delete(Product $product){
        if($product->photo){
            $filePath = public_path('storage/'. $product->photo);
            if(file_exists($filePath)){
                unlink($filePath);
            }
        }
        $status = $product->delete();
        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting product');
        }
        return back();
    }


}
