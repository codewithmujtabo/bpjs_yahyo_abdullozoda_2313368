<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    // This method returns the view 'pages.home'
    public function home() {
        return view('pages.home');
    }
}
?>