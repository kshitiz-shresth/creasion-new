<?php

namespace App;

use Storage;
use TCG\Voyager\Facades\Voyager;
use App\PrintCoverage;
use App\OnlineCoverage;

class Kshitiz
{
    public static function image($address, $type = null)
    {
        if (empty($address)) {
            return '';
        }
        $address = str_replace('\\', '/', $address);
        $img = '.' . pathinfo($address, PATHINFO_EXTENSION);
        $imgName = str_replace($img, '', $address);
        if ($type) {
            $img = $imgName . '-' . $type . $img;
        } else {
            $img = $imgName . $img;
        }

        return Storage::disk(config('voyager.storage.disk'))->url($img);
    }

    public static function slug_title($slug)
    {
        $title = str_replace('-', ' ', $slug);
        return ucwords($title);
    }

    public static function printCoverageImage($id){
        return Voyager::image(PrintCoverage::find($id)->image);
    }

    public static function onlineCoverageImage($id){
        return Voyager::image(OnlineCoverage::find($id)->image);
    }
}
