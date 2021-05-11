<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index($slug){
        // it will check whether view exists or not
        if (view()->exists('pages.static.' . $slug)) {
            return view('pages.static.' . $slug);
        }
        // otherwise throw 404;
        return abort('404', "Page Not Found");
    }
    
}
