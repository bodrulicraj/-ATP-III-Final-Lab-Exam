@extends('home.index')

@section('title')
	Home | User
@endsection

							

@section('MainBar')

<div class="top container_center">
	  	<div class="footer_top_title">
			<ul >
				<!-- <li ><a href="/product/allProduct">All Products</a></li>
				<li ><a href="/product/men/men">Men</a></li>
				<li ><a href="/product/women/women">Women</a></li>
				<li ><a href="/product/kids/kids">Kids</a></li> -->
			</ul>
		</div>
		<div class="cloth">
			<div class="cloth_part">
				<div class="cloth_part1">
					<a href="{{route('asus.product')}}"><img src="/images/img/a.png" alt="Logo"/></a>							
					<a href="{{route('asus.product')}}"><h2>ASUS</h2></a>		
				</div>
				<div class="cloth_part2">
					<a href="#"><img src="/images/img/l.png"></a>
					<a href="#"><h2>LG</h2></a>	
				</div>
				<div class="cloth_part3">
					<a href="#"><img src="/images/img/d.jpg"></a>
					<a href="#"><h2>DELL</h2></a>		
				</div>
			</div>
		</div>
</div>
			  
@endsection