<?php

namespace App\Http\Controllers;

use App\Milestone;
use App\Page;
use Illuminate\Http\Request;

class MileStoneCountroller extends Controller
{
    public function show(){
        $milestones = Milestone::orderBy('order')->get();
        $page = Page::where('title','milestone')->first();
        return view('pages.our-history',compact(
            'milestones',
            'page'
        ));
    }

    public function store(Request $request){
        // if milestone is available update
        $milestone = Page::where('title', 'milestone')->first();
        if($milestone){
            $milestone->data  = json_encode($request->data);
            $milestone->save();
        }
        // else create
        else{
            $milestone = new Page();
            $milestone->title = 'milestone';
            $milestone->data  = json_encode($request->data);
            $milestone->save();
        }
        return 'succeed';
    }

    public function fetchData(){
        return Page::where('title','milestone')->first();
    }
}
