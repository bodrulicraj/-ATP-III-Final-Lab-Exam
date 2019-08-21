<?php

namespace App\Http\Controllers;
use Response;
use App\admin;
use App\CustomerReviewsList;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;

class AdminController extends Controller
{
	public function index(Request $req)
	{
	  if($req->session()->has('username')){
		return view('admin.index');
	  }else {
		return redirect()->route('login.index');
	  }
	}

  	// Code for Customer List Function
	public function CustomerReviewsList(Request $req)
	{
		if($req->session()->has('username')){
		$result = CustomerReviewsList::all();
		// $result = Student::all()->sortBy('studentName');
		// $result = Student::all()->sortByDesc('studentName');
		return view('admin.CustomerReviewsList', ['CustomerReviewsList' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Student Details
	public function detailStudent(Request $req)
	{
		if($req->session()->has('username')){
		$result = CustomerReviewsList::where('studentId', $req->studentId)->get();
		return Response::json($result);
		}else {
		return redirect()->route('login.index');
		}
	}

	// // Code for Delete Student
	// public function deleteStudent(Request $req)
	// {
	// 	if($req->session()->has('username')){
	// 	if(CustomerReviewsList::destroy($req->studentId)){
	// 		$result = CustomerReviewsList::all();
	// 		$arr = ["CustomerReviewsList" => $result, "message" => "Reviews Delete Successfully!"];
	// 		return Response::json($arr);
	// 	}else {
	// 		$result = ["message" => "Reviews Delete Fail!"];
	// 		return Response::json($result);
	// 	}
	// 	}else {
	// 	return redirect()->route('login.index');
	// 	}
	// }

	// Code for Delete Student
	public function deleteStudent(Request $req)
	{
		if($req->session()->has('username')){
		if(CustomerReviewsList::destroy($req->studentId)){
			$result = CustomerReviewsList::all();
			$arr = ["CustomerReviewsList" => $result, "message" => "Reviews Delete Successfully!"];
			return Response::json($arr);
		}else {
			$result = ["message" => "Reviwes Delete Fail!"];
			return Response::json($result);
		}
		}else {
		return redirect()->route('login.index');
		}
	}

}
