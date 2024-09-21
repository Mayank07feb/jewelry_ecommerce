<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create(){
        $categories = Category::where('is_parent', '1')->get();
        return view('backend.category.create')->with('categories', $categories);
    }

    public function  store(CategoryRequest $request){
//        dd($request->all());
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Category::where('slug', $slug)->count();
        if ($count > 0){
            $slug = $slug.'-'.date('ymdis').'-'.rand(0, 999);
        }
        $data['slug'] = $slug;
        $category = Category::create($data);
        if ($request->file('photo')){
            $file = $request->file('photo')->store('public/category');
            $category->photo = str_replace('public/', '', $file);
            $category->save();
        }
        if($category){
            request()->session()->flash('success','Category successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding category');
        }
        return redirect()->route('category.index');
    }

    public function edit(Category $category){
        $categories = Category::where('is_parent', '1')->get();
        return view('backend.category.edit', compact('category', 'categories'));
    }

    public function update(CategoryRequest $request, Category $category){
        $status = $category->update($request->except('photo'));

        if ($request->file('photo')){
            if($category->photo){
                $filePath = public_path('storage/'. $category->photo);
                if(file_exists($filePath)){
                    unlink($filePath);
                }
            }
            $file = $request->file('photo')->store('public/category');
            $category->photo = str_replace('public/', '', $file);
            $category->save();
        }

        if($status){
            request()->session()->flash('success','Category successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating category');
        }
        return redirect()->route('category.index');
    }

    public function delete(Category $category){
        if($category->photo){
            $filePath = public_path('storage/'. $category->photo);
            if(file_exists($filePath)){
                unlink($filePath);
            }
        }
        $status = $category->delete();
        if($status){
            request()->session()->flash('success','Category successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting category');
        }
        return back();
    }

    public function childCategories(Request $request){
        $data = Category::where('parent_id', $request->id)->get();
        if ($data->count() <= 0){
            return response()->json(['status'=>false,'msg'=>'','data'=>null]);
        }else{
            return response()->json(['status'=>true,'msg'=>'','data'=>$data]);
        }
    }
}
