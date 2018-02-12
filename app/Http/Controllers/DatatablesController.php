<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Pledge;

class DatatablesController extends Controller
{
    public function getIndex()
	{
	    return view('layouts/pledge_table');
	}

	/**
	 * Process datatables ajax request.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyData()
	{
	    return Datatables::of(User::query())->make(true);
	}
}
