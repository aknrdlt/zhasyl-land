<?php

namespace App\Http\Controllers;

use App\Models\VideoBanner;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $video = VideoBanner::find(1);
        $link = substr($video->video, 19, 50);
        return view('index', compact('link'));
    }
}
