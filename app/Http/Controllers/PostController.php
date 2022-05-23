<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views\datamahasiswa;

class PostController extends Controller
{
    public function index(){
        return view('datamahasiswa');
    }
}
