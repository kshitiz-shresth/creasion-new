<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    public function sliders(){
        return $this->belongsTo(MultipleImage::class,'slider_id','unique_id');
    }

}
