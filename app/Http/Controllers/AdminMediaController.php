<?php

namespace FoodThinkTank\Http\Controllers;

use Illuminate\Http\Request;
use FoodThinkTank\Photo;
class AdminMediaController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('admin.media.index', compact('photos'));
    }
    public function create()
    {
        return view('admin.media.create');
    }
    public function upload()
    {
        return 'upload';
    }
}
