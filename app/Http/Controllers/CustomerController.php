<?php

namespace App\Http\Controllers;
use Response;
use App\customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
	public function index(Request $req)
	{
	  if($req->session()->has('username')){
		return view('customer.index');
	  }else {
		return redirect()->route('login.index');
	  }
	}

}
