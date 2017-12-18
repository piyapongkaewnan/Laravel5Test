<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function __construct() {
       // $this->middleware('auth');
    }

    public function index() {
        $SiteName = 'Laravel Test';
        $Contact = 'Piyapong Kaewnan';
        return View('about', [
            'SiteName' => $SiteName,
            'Contact' => $Contact
        ]);
    }

}
