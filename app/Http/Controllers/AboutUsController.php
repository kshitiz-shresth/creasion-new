<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('admin.aboutus');
    }

    public function store(Request $request)
    {
        // check whether it is first time or not
        $page = Page::where('title', 'aboutUs')->first();
        // update
        if ($page) {
            // $data = collect([
            //     'homePageSection' => $request->homePageSection,
            //     'aboutSection' => $request->aboutSection,
            //     'counterSection' => $request->counterSection,
            //     'faqSection' => $request->faqSection,
            //     'videoSlideSection' => $request->videoSlideSection,

            // ]);
            $data = $request->aboutUsData;
            $page->data = $request->aboutUsData;
            $page->update();
            return 'done';
        }
        // store
        $page = new Page();
        $page->title = 'aboutUs';
        // $data = collect([
        //     'homePageSection' => $request->homePageSection,
        //     'aboutSection' => $request->aboutSection,
        //     'counterSection' => $request->counterSection,
        //     'faqSection' => $request->faqSection,
        //     'videoSlideSection' => $request->videoSlideSection,


        // ]);
        $data = $request->data;

        $page->data = json_encode($data);
        $page->save();
        return 'done';
    }

    public function fetchData()
    {
        $page = Page::where('title', 'aboutUs')->first();
        if (!$page) {
            $page = 'null';
        } else {
            $page = $page->data;
        }
        return $page;
    }
}
