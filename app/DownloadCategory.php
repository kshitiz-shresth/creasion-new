<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DownloadCategory extends Model
{
    public function downloads(){
        return $this->hasMany(\App\Download::class,'category_id')->orderBy('order');
    }
}
