<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
}
