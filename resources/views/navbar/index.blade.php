<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/admin/admin.css">
		<link rel="stylesheet" href="/css/admin/reviewsList.css">


		<!--  -->
		<link rel="stylesheet" href="{{asset('custom')}}/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/bootstrap.min.js"></script>
		@yield('student_ajax')
  	</head>
	
	<body>
		<div class="full_container">
			<div class="teacher_header_wraper">
				<div class="teacher_header container_center">
					<div class="teacher_logo">
						<a href="#"><img src="/images/logo.png" alt="Logo"/></a>
						<!-- <a href="#"><h2>Online School Portal</h2></a> -->
						<a href="#"><h2>Computer Shop Portal</h2></a>
					</div>

					<div class="teacher_menu_icon">
						
					</div>
				</div>
			</div>		
			
			<div class="content_wraper">
				<div class="content container_center">
					<div class="content_left">
						<div class="teacher_photo">
							<!--<img src="" alt="Profile Photo" />-->						
  							<!-- <img src="/images/team/bodrul.jpg" alt="Bodrul" /> -->
						</div>
						<div class="teacher_name">
							<p>Welcome, Bodrul Islam</P>							
						</div>						
						<div class="teacher_menu_section">
							<ul>
								<li><a href="{{route('admin.index')}}"> My Account</a></li>
								<li><a href="{{route('admin.CustomerReviewsList')}}">&#x2756 Customer Reviews List</a></li>
								<li><a href="{{route('logout.logout')}}">&#x27A5 Logout</a></li>
							</ul>
						</div>
					</div>
					
					<div class="content_right">
						@yield('mainBar')
					</div>
				</div>
			</div>			
			<div class="footer_wraper">
				<div class="footer container_center">
					<div class="footer_top">
					</div>
					<div class="footer_bottom">
						<p>Copyright 2018-19 &copy; ComputerShop.com <br/> &reg All Right Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
@yield('view_modal')
