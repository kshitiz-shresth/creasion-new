<?php

namespace App\Http\Controllers;

use App\MultipleImage;
use App\SubProject;
use Illuminate\Http\Request;

class MultipleImagesController extends Controller
{
    public function generateImages(Request $request){
        $images = MultipleImage::where('unique_id',$request->sliderID)->first();
        if(!$images){
            return 0;
        }
        return $images->images;
        
    }

    public function generateSubProject(Request $request){
        $image = SubProject::where('slug', $request->slug)->first();
        if (!$image) {
            return 0;
        }
        return $image->title_image;
    }
}
