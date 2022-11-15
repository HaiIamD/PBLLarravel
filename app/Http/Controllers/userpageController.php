<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userpageController extends Controller
{
    public function index()
    {
        return view('/userpage',[
         'tittle'=>'dashboard'
        ]);
    }
}
