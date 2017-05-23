<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.pages'));
    }
}
