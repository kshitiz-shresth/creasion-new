<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DownloadCategory;

class Download extends Model
{
    public function download_category()
    {
        return $this->belongsTo(DownloadCategory::class, 'category_id');
    }
}
