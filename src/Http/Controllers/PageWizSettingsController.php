<?php

namespace Halocedark\PageWiz\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageWizSettingsController extends Controller
{
    //
    public static function asset($path)
    {
        return asset("packages/halocedark/page-wiz/{$path}");
    }
}
