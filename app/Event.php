<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','description','event_date','hour','place','user_id','photo_id'];


    public function user()
    {
        return $this->belongsTo('FoodThinkTank\User');
    }
    public function photo()
    {
        return $this->belongsTo('FoodThinkTank\Photo');
    }
}
