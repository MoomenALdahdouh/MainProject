<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('language'))) {
            Session::put('applocale', $lang);
        }
        return redirect(url()->previous());
    }
}
