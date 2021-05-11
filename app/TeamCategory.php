<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TeamCategory extends Model
{
    public function teams(){
        return $this->hasMany(\App\Team::class, 'team_category_id');
    }
}
