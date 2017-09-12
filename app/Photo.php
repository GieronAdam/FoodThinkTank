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

}
