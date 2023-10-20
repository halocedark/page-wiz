<?php

namespace Halocedark\PageWiz\Http\Controllers;

use App\Http\Controllers\Controller;
use Halocedark\PageWiz\Http\Controllers\PageWizSettingsController;
use Illuminate\Http\Request;

class PageWizEditorController extends Controller
{

    public function index()
    {
        return view("PageWiz::index", [
            'assets_url' => PageWizSettingsController::asset('resources/assets/css/editor.css'),
        ]);
    }
}
