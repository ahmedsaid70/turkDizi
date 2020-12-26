<?php

namespace App\Http\Controllers\First;

use App\Http\Requests\myRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class myController extends Controller
{
    public function users(){
        return "users";
    }
    public function panel(){
        return "panel";
    }
    public function create(myRequest $request){
        dd($request->input("id"));
    }
}
