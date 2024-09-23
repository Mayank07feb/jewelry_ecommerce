<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\File;


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
        $carats = $request->carats;
        foreach ($carats as $key=>$val){
            ProductVariation::create([
                'product_id' => $product->id,
                'carat' => $val,
                'price' => $request->prices[$key],
            ]);
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
        $status = $product->update($request->all());

        if ($request->file('images')){
            $images = $request->file('images');
            foreach ($images as $image){
                $file = $image->store('public/productImage');
                ProductImage::create(['product_id' => $product->id, 'image' => str_replace('public/', '', $file)]);
            }
//            $product->photo = str_replace('public/', '', $file);
        }
        $carats = $request->carats;
        foreach ($carats as $key=>$val){
            if (isset($request->variationIds[$key])){
                $variation = ProductVariation::find($request->variationIds[$key])->first();
                $variation->update([
                    'carat' => $val,
                    'price' => $request->prices[$key],
                ]);
            }else{
                ProductVariation::create([
                    'product_id' => $product->id,
                    'carat' => $val,
                    'price' => $request->prices[$key],
                ]);
            }

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
    public function imageDelete(ProductImage $image){
        if ($image->image){
            $filePath = public_path('storage/'.$image->image);
            if (file_exists($filePath)){
                unlink($filePath);
            }
        }
        $status = $image->delete();
        if($status){
            request()->session()->flash('success','Product image removed');
        }
        else{
            request()->session()->flash('error','Error occurred while removing product image');
        }
        return back();
    }

    public function variationDelete(ProductVariation $variation){
        $status = $variation->delete();
            if($status){
                request()->session()->flash('success', 'Variation deleted successfully');
            }else{
                \request()->session()->flash('error', 'failed, try again!');
            }
            return back();
    }
}
