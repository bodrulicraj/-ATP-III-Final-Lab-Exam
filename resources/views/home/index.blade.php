
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    	<!-- <title>Home</title> -->
		<title>@yield('title')</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/product.css">
  </head>
  <body>
    <div class="header_wraper">
      <div class="header container_center">
        <div class="logo">
          <!-- <a href="#"><img src="images/logo.png" alt="Logo" /></a> -->
					<a href="#"><h2>Online Computer Shop</h2></a>
				</div>

				<div class="social_media">
         
				</div>
			</div>
		</div>

    <div class="nav_wraper">
			<div class="nav container_center">
				<div class="menu_left">
						<ul>
							<li><a href="{{route('home.index')}}" id="active" >Home</a></li>
							<li><a href="{{route('user.index')}}"> USERS</a></li>
							<li><a href="{{route('signup.index')}}"> Register</a></li>
						</ul>
				</div>

				<div class="menu_right">
					<ul>
						<li><a href="{{route('login.index')}}"> &#x27A4; Login</a></li>
					</ul>
				</div>
      </div>
    </div>


    <div class="footer_wraper">
      <div class="footer">
        <div class="footer_top">
          <div class="top container_center">  					  
	  				@yield('MainBar')
  				  <div class="footer_top_title">
  				  </div>
  					
  				</div>
  			</div>
  			<div class="footer_bottom">
  			  <div class=" bottom container_center">
  				  <p>Copyright 2018-19 &copy; onlineschool.com <br/> &reg All Right Reserved</p>
  	  		</div>
  			</div>
  		</div>
  	</div>
  </body>
</html>
