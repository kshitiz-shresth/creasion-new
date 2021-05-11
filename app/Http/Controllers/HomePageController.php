<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function trial(){
        return view('welcome');
    }
    //
    public function index(){
        return view('admin.homepage');
    }

    public function store(Request $request){
        // check whether it is first time or not
        $page = Page::where('title','page')->first();
        // update
        if($page){
            $data = collect([
                'homePageSection'=>$request->homePageSection,
                'aboutSection'=>$request->aboutSection,
                'counterSection'=>$request->counterSection,
                'faqSection' => $request->faqSection,
                'videoSlideSection' => $request->videoSlideSection,

            ]
            );
            $page->data = json_encode($data);
            $page->update();
            return 'done';
        }
        // store
        $page = new Page();
        $page->title = 'page';
        $data = collect([
            'homePageSection' => $request->homePageSection,
            'aboutSection' => $request->aboutSection,
            'counterSection' => $request->counterSection,
            'faqSection'=>$request->faqSection,
            'videoSlideSection' => $request->videoSlideSection,


        ]);
        $page->data = json_encode($data);
        $page->save();
        return 'done';
    }

    public function fetchData(){
        $page = Page::where('title', 'page')->first();
        if (!$page) {
            $page = 'null';
        } else {
            $page = $page->data;
        } 
        return $page;
    }
}
