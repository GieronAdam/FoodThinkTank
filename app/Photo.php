<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $uploads = '/images/';

    public function users()
    {
        return $this->hasMany('FoodThinkTank\User');
    }
    public function photos()
    {
        return $this->hasMany('FoodThinkTank\Post');
    }
    public function events()
    {
        return $this->hasMany('FoodThinkTank\Events');
    }
}
