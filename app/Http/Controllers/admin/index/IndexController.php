<?php

namespace App\Http\Controllers\admin\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        return view('admin.template.index');
    }
}
