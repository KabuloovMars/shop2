<?php

namespace App\Http\Controllers;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        $usertype = auth()->user()->user_type;
        if($usertype == 1){
            return view("admin.home");
        }else{
            return view("home.index");
        }    

    }
}
