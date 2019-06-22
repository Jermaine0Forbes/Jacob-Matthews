<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Http\Requests;

class AjaxController extends Controller
{
    public function getBudgets(){
        
        $coll = Collection::select("id","name")->limit(10)->get()->toJson();
//        $coll = Collection::select("id","name")->limit(10)->get();
//        $coll = Collection::select("id","name")->get()->toJson();
        
//        dd($coll);
        return $coll;
    }
}
