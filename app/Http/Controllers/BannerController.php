<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners'));
    }

    public function create(){
        return view('backend.banner.create');
    }

    public function  store(BannerRequest $request){
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0){
            $slug = $slug.'-'.date('ymdis').'-'.rand(0, 999);
        }
        $data['slug'] = $slug;
        $banner = Banner::create($data);
        if ($request->file('photo')){
            $file = $request->file('photo')->store('public/banner');
            $banner->photo = str_replace('public/', '', $file);
            $banner->save();
        }
        if($banner){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('banner.index');
    }

    public function edit(Banner $banner){
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner){
        $status = $banner->update($request->except('photo'));

        if ($request->file('photo')){
            if($banner->photo){
                $filePath = public_path('storage/'. $banner->photo);
                if(file_exists($filePath)){
                    unlink($filePath);
                }
            }
            $file = $request->file('photo')->store('public/banner');
            $banner->photo = str_replace('public/', '', $file);
            $banner->save();
        }

        if($status){
            request()->session()->flash('success','Banner successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating banner');
        }
        return redirect()->route('banner.index');
    }

    public function delete(Banner $banner){
        if($banner->photo){
            $filePath = public_path('storage/'. $banner->photo);
            if(file_exists($filePath)){
                unlink($filePath);
            }
        }
        $status = $banner->delete();
        if($status){
            request()->session()->flash('success','Banner successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating banner');
        }
        return back();
    }
}
