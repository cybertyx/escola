<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuemSomosController extends Controller
{
    public function index() {
        return view('site.quemsomos.quemsomos');
    }
}
