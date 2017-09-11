<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany('FoodThinkTank\User');
    }
}
