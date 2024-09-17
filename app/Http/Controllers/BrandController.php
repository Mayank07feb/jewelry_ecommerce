<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('backend.brand.index', compact('brands'));
    }

    public function create(){
        return view('backend.brand.create');
    }

    public function  store(BrandRequest $request){
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Brand::where('slug', $slug)->count();
        if ($count > 0){
            $slug = $slug.'-'.date('ymdis').'-'.rand(0, 999);
        }
        $data['slug'] = $slug;
        $brand = Brand::create($data);
        if($brand){
            request()->session()->flash('success','Brand successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding brand');
        }
        return redirect()->route('brand.index');
    }

    public function edit(Brand $brand){
        return view('backend.brand.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand){
        $status = $brand->update($request->all());
        if($status){
            request()->session()->flash('success','Brand successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating brand');
        }
        return redirect()->route('brand.index');
    }

    public function delete(Brand $brand){
        if($brand->photo){
            $filePath = public_path('storage/'. $brand->photo);
            if(file_exists($filePath)){
                unlink($filePath);
            }
        }
        $status = $brand->delete();
        if($status){
            request()->session()->flash('success','Brand successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting brand');
        }
        return back();
    }
}
