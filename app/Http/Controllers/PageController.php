<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function nosotros() {
        return view('pages.nosotros');
    }

    public function productos() {
        return view('pages.productos');
    }

    public function contacto() {
        return view('pages.contacto');
    }
}
