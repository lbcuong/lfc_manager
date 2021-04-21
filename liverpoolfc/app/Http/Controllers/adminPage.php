<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminPage extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            return view('admin.dashboard');
        } catch (\Exception $e) {
            die("Could not connect to the database. Please check your configuration. error:" . $e );
        }
    }
}
