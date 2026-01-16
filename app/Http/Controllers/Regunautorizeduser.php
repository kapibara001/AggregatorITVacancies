<?php

namespace App\Http\Controllers;

use illuminate\View\View;

class Regunautorizeduser extends Controller {
    public function __invoke() {
        return view('layouts.winforreg');
    }
}