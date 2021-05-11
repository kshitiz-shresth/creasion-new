<?php

namespace App\Http\Controllers;

use App\NewsArticle;
use App\OnlineCoverage;
use App\PrintCoverage;
use Illuminate\Http\Request;

class NewsArticlesController extends Controller
{
    public function newsArticles(Request $request){
        if($request->edit){
            $newsArticle = NewsArticle::find($request->id);
            $newsArticle->title = $request->title;
            $newsArticle->slug = $request->slug;
            $newsArticle->published_date = $request->date;
            $newsArticle->print_coverages = json_encode($request->printCoverage);
            $newsArticle->online_coverages = json_encode($request->onlineCoverage);
            $newsArticle->update();
            return 'done';
        }
        $newsArticle = new NewsArticle();
        $newsArticle->title = $request->title;
        $newsArticle->slug = $request->slug;
        $newsArticle->published_date = $request->date;
        $newsArticle->print_coverages = json_encode($request->printCoverage);
        $newsArticle->online_coverages = json_encode($request->onlineCoverage);
        $newsArticle->save();
        return 'done';

    }


    public function fetchPrintCoverage(){
        $printCoverageCategory = PrintCoverage::orderBy('order')->get(['id','title']);
        return $printCoverageCategory;
    }

    public function fetchOnlineCoverage(){
        $onlineCoverageCategory = OnlineCoverage::orderBy('order')->get(['id', 'title']);
        return $onlineCoverageCategory;
    }
}
