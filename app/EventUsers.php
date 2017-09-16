<?php

namespace FoodThinkTank;

use Illuminate\Database\Eloquent\Model;

class EventUsers extends Model
{
    protected $fillable = ['name', 'lastname', 'email', 'phone', 'event_id', 'user_id', 'is_confirmed'];
}
