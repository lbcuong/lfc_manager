<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MainPageController extends Controller
{
    public function index()
    {
        $players = DB::table('player')->get();
        return view('main_page')->with('players', $players);
    }
}
