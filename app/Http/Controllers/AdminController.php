<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categoryIndex(){
        $categories = Admin::all();
        return view("admin.category-create",compact("categories"));
    }
    public function addCategory(Request $request){


        $categories =Admin::all();
        return view("admin.category-create", compact("categories"));


}

}
