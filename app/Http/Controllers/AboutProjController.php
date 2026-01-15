<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutProjController extends Controller {
    public function __invoke() {
        return view('aboutPage');
    }
}