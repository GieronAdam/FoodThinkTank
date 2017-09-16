<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('FoodThinkTank\Post');
    }
}
