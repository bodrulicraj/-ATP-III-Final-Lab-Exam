<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;


class SignUpController extends Controller
{
  public function index()
  {
    return view('signup.index');
  }

  public function create_user(SignupRequest $request)
  {
    $addUser = DB::table('users')->insert(
      ['username' => $request->username, 'email' => $request->email, 'password' => $request->password, 'userType' => $request->userType]
    );

    if($addUser){
      $request->session()->flash('success','Registration Successfully!');
      return redirect()->route('signup.index');
    }else {
      $request->session()->flash('error','Registration Fail!');
      return redirect()->route('signup.index');
    }
  }
}
