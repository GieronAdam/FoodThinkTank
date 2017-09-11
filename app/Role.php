<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['id', 'name'];

    public function users()
    {
        return $this->hasMany('FoodThinkTank\User');
    }
}
