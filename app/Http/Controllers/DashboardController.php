<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pledge;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pledge = DB::table('pledge')->get();
        return view('layouts/dashboard',['pledge' => $pledge]);
    }
      
    
}
