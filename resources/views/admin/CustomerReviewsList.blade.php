@extends('navbar.index')

@section('title')
	Admin | Reviews List
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
								<td>{{$user['customerId']}}</td>
								<td>{{$user['customerName']}}</td>
								<td>{{$user['customerEmail']}}</td>
								<td>{{$user['customerReview']}}</td>
								<td><input type="button" name="view" value="View" id="{{$user['customerId']}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
								<td><input type="button" name="delete" value="Delete" id="{{$user['customerId']}}" class="btn btn-primary btn-sm delete_data table_btn" ></td>
							</tr>
						<?php $count++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection


