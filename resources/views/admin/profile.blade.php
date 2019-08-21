@extends('navbar.index')

@section('title')
	Admin | Profile
@endsection

@section('mainBarAdmin')
	<li><a href="{{route('admin.CustomerReviewsList')}}">&#x2756 Customer Reviews List</a></li>
	<li><a href="{{route('admin.profile')}}">&#x2756 profile</a></li>
@endsection	

@section('mainBar')
    <div class="profile">
		<table class="teacher_info">
		    @foreach ($teacherProfile as $Profile)
                <tr>
                    <td class="info_col" >ID:</td>
                    <td class="info_val"> {{$Profile['uid']}}  </td>
                </tr>
                <tr>
                    <td class="info_col" >Name:</td>
                    <td class="info_val"> {{$Profile['name']}}  </td>
                </tr>
                <tr>
                    <td class="info_col">Email:</td>
                    <td class="info_val"> {{$Profile['email']}}  </td>
                </tr>
                <tr>
                    <td class="info_col">Phone:</td>
                    <td class="info_val"> {{$Profile['phone']}}  </td>
                </tr>    					
			@endforeach								
		</table>
    </div>
@endsection