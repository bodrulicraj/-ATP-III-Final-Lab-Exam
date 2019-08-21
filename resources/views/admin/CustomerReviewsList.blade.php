@extends('navbar.index')

@section('title')
	Admin | Reviews List
@endsection

@section('student_ajax')
	<script type="text/javascript" src="{{asset('custom')}}/style/ajax/student.js"></script>
@endsection

@section('mainBarAdmin')
	<li><a href="{{route('admin.CustomerReviewsList')}}">&#x2756 Customer Reviews List</a></li>
@endsection	

@section('mainBar')
	<div class="studentList_wraper">
		<div class="studentList_table">
			<div class="student_list_title">
				<h3>Reviews List</h3>
			</div>
			<div class="table_area">
				<table class="student_table" >
					<thead >
						<tr>
							<th>Serial</th>
							<th>Customer Id</th>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Customer Review</th>
							<th>Action</th>
							<th>Action</th>
					</thead>
					<tbody>
						<?php $count =1; ?>
						@foreach ($CustomerReviewsList as $user)
							<tr class="text-center">
								<td>{{$count}}</td>
								<td>{{$user['studentId']}}</td>
								<td>{{$user['studentName']}}</td>
								<td>{{$user['studentEmail']}}</td>
								<td>{{$user['studentReview']}}</td>
								<td><input type="button" name="view" value="View" id="{{$user['studentId']}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
								<td><input type="button" name="delete" value="Delete" id="{{$user['studentId']}}" class="btn btn-primary btn-sm delete_data table_btn" ></td>
							</tr>
						<?php $count++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('view_modal')
<div id="viewStudent" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Student Details</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body" id="student_detail">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
@endsection




