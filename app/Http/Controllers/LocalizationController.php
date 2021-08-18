<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLang($locale){
        App::setlocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
