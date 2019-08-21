@extends('navbar.index')

@section('title')
	Admin | Admin
@endsection


@section('mainBarAdmin')
	<li><a href="{{route('admin.CustomerReviewsList')}}">&#x2756 Customer Reviews List</a></li>
	<li><a href="{{route('admin.profile')}}">&#x2756 Profile</a></li>
@endsection								

@section('mainBar')


@endsection