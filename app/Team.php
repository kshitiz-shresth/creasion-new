<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    public function team_category(){
        return $this->belongsTo(TeamCategory::class,'team_category_id');
    }
}
