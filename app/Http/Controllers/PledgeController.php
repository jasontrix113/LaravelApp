<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Pledge;
class PledgeController extends Controller
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
     public function index()
    {
        $pledge = DB::table('pledge')->get();
        if(count($pledge) > 0)
                {
                     return view('layouts/pledge_transaction_history', ['pledge' => $pledge]);
                }
                else
                {
                  return view('layouts/pledge');
                }    
    }
    public function index_summary()
    {
        return view('layouts/summary_reports');
    }
}
