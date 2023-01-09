<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitThangDo;

class SubmitThangDoController extends Controller
{
    public function store(Request $request){
        if($request){
            return response()->json(['success' => 'Đã nhận được thành công.']);
        }
    }
}
