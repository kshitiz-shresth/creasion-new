<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Page;
use App\Partner;
use App\Story;
use App\Team;
use App\TeamCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Article;
use App\Download;
use App\DownloadCategory;
use App\NewsArticle;
use App\Popup;
use App\Career;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    public function getInsta(){
        return $instaData = collect(Http::get('https://systran-systran-platform-for-language-processing-v1.p.rapidapi.com/resources/dictionary/lookup')->json());
    }
    
    public function getCareer(Request $request){
        if ($request->hasFile('cv')) {
            $file_name = $request->cv->hashName();
            $request->cv->store('careers/March2021');
            $cv = json_encode(
                [
                    0 => [
                        "download_link"=>"careers/March2021/".$file_name,
                        "original_name"=>"CV"
                    ]
                ]
                );
        }else{
           $cv = "[]";  
        }
        
        $career = new Career();
        $career->full_name = $request->full_name;
        $career->contact_number = $request->contact_number;
        $career->email = $request->email;
        $career->cover_letter = $request->cover_letter;
        $career->cv = $cv;
        $career->save();
        return 'done';
    }
    
    public function file($filename){
        $path = public_path("myfiles/years/".$filename);

        if(file_exists($path)){
            return response()->file($path);
            return 'yes it exists';
        }
        abort(404);
        
    }

    public function downloads(){
        $categories = DownloadCategory::orderBy('order')->get();
        return view('pages.downloads',compact(
            'categories'
        ));
    }

    public function index(){
        // $instaData = collect(Http::get('https://www.instagram.com/creasionorg/?__a=1')->json())['graphql']['user']['edge_owner_to_timeline_media']['edges'];
        $page = json_decode(Page::where('title','page')->first()->data,true);
        $articles = Article::orderBy('date', 'desc')->get()->take(3);
        $homePageSection = $page['homePageSection'];
        $aboutSection = $page['aboutSection'];
        $counterSection = $page['counterSection'];
        $faqSection = $page['faqSection'];
        $videoSlideSection = $page['videoSlideSection'];
        $popups = Popup::orderBy('order','desc')->get();
        return view('index',compact(
            'homePageSection',
            'aboutSection',
            'articles',
            'counterSection',
            'faqSection',
            'videoSlideSection',
            'popups'
            // 'instaData'
        ));
    }

    // stories
    public function stories(){
        $stories = Story::orderBy('order')->paginate(4);
        return view('pages.stories',compact(
            'stories'
        ));
    }

    // about us
    public function aboutus(){
        $aboutus = json_decode(Page::where('title', 'aboutUs')->first()->data, true);
        return view('pages.about-us',compact(
            'aboutus'
        ));
    }

    public function partners(){
        $topPriorities = Partner::where('top_priority',1)->orderBy('order')->get();
        $others = Partner::where('top_priority','!=',1)->orderBy('order')->get();
        return view('pages.partners',compact(
            'topPriorities',
            'others'
        ));
    }


    public function team(Request $request){
        $teamCategories = TeamCategory::orderBy('order')->get();
        $firstTeamCategoryId = TeamCategory::orderBy('order')->first()->id;
        $team = [];
        if($request->type){
            $team = Team::whereHas('team_category',function($query) use($request){
                $query->where('slug',$request->type);
            })->orderBy('order')->get();
        }
        else{
                $team = Team::where('team_category_id', $firstTeamCategoryId)->orderBy('order')->get();
        }
        return view('pages.team',compact(
            'teamCategories',
            'team'
        ));
    }

    // for Articles
    public function showArticles(Request $request)
    {
       
        $articles = Article::orderBy('date','desc')->get();
        return view('pages.article.lists', compact(
            'articles'
        ));
    }
    
    public function showArticleDetails($slug){
        $article = Article::where('slug',$slug)->first();
        return view('pages.article.single',compact(
            'article'
        ));
    }
    // end of articles

    // for Media
    public function showMedia(){
        $medias = NewsArticle::orderBy('published_date','desc')->get();
        return view('pages.media.lists',compact(
            'medias'
        ));
    }
    public function showMediaDetails($slug)
    {
        $mediaDetails = NewsArticle::where('slug',$slug)->first();
        return view('pages.media.single', compact(
            'mediaDetails'
        ));
    }

    public function showBlogs(Request $request){
        if($request->selected){
            switch ($request->selected) {
                case 'recent':
                    $blogs = Blog::orderBy('date', 'desc');
                    break;
                case 'oldest':
                    $blogs = Blog::orderBy('date', 'asc');
                    break;
                case 'asc':
                    $blogs = Blog::orderBy('title', 'asc');
                    break;
                case 'des':
                    $blogs = Blog::orderBy('title', 'desc');
                    break;
            }
        }
        else{
            $blogs = Blog::orderBy('date', 'desc');
        }
        
        if($request->category){
            $category_id = Category::where('slug',$request->category)->first()->id;
            $blogs = $blogs->where('category_id',$category_id)->get();
        }
        else{
            $blogs = $blogs->get();
        }
        $category = Category::orderBy('order')->get();
        return view('pages.blog.lists',compact(
            'blogs',
            'category'
        ));
    }

    public function showBlogDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        $blog['views'] = $blog['views']+1;
        $blog->save();
        $tags = explode(',',$blog->tags);
        $trendings = Blog::orderBy('views','desc')->get();
        $categories = Category::orderBy('order')->get();
        $nextBlog = Blog::where('id',$blog->id+1)->first();
        $nextBlogSlug = $nextBlog ? $nextBlog->slug : null;
        $previousBlog = Blog::where('id', $blog->id - 1)->first();
        $previousBlogSlug = $previousBlog ? $previousBlog->slug : null;
        return view('pages.blog.single', compact(
            'blog',
            'nextBlogSlug',
            'previousBlogSlug',
            'tags',
            'categories',
            'trendings'
        ));
    }
}
