<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id','title','user_id','photo_id','category_id','body'];

    public function user()
    {
        return $this->belongsTo('FoodThinkTank\User');
    }
    public function photo()
    {
        return $this->belongsTo('FoodThinkTank\Photo');
    }
    public function category()
    {
        return $this->belongsTo('FoodThinkTank\Category');
    }

}
