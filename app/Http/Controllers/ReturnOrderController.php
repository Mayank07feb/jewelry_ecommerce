<?php

namespace App\Http\Controllers;

use App\Models\ReturnOrder;
use Illuminate\Http\Request;

class ReturnOrderController extends Controller
{
    public function index(){
        $returns = ReturnOrder::orderBy('created_at', 'desc')->get();
        return view('backend.return.index', compact('returns'));
    }

    public function returnStatus(Request $request,ReturnOrder $return,){
        $status = $return->update(['status' => $request->status]);
        if ($status){
            \request()->session()->flash('success', 'Status changed successfully');
        }else{
            \request()->session()->flash('error', 'Failed, Try again!');
        }
        return back();
    }
}
