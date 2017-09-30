<?php
	if(!empty($_GET['selectType'])) {
		switch ($_GET['selectType']) {
			case 'Coupon' : 
				$hasFilter = true;
				$selectType = 'Coupon';
			break;
			case '2for1' : 
				$hasFilter = true;
				$selectType = '2 for 1';
			break;
			case 'FreeDelivery' : 
				$hasFilter = true;
				$selectType = 'Free delivery';
			break;
			case 'FreeGift' : 
				$hasFilter = true;
				$selectType = 'Free gift';
			break;
			case 'Discount' : 
				$hasFilter = true;
				$selectType = 'Discount';
			break;
			case 'Other' : 
				$hasFilter = true;
				$selectType = 'Other';
			break;
			default :  
				$selectType ='';
				$hasFilter = false;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Κουπόνια - Προσφορές - Εκπτώσεις</title>
	<meta name="description" content="Κουπόνια - Προσφορές - Εκπτώσεις">
	<?php
		include_once('/home/ellhn/public_html/mikrostore.eu/web/parts/headCode.php');
	?>
	<meta name="keywords" content="" />
</head>
<body> 
    <?php
        if($_SERVER['PHP_SELF'] == '/index.php') {
            include_once("/tracking-code.js");
        }
		else if($_SERVER['PHP_SELF'] == '/web/index.php') {
            include_once("../tracking-code.js");
        }
		else {
			/*echo $_SERVER['PHP_SELF'];*/
		}
    ?>
<!--header-->
	<div class="container">
		<div class="header" id="home">	
			<div class="header-para">
				<p style="display:none">The quick brown <span>fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.</span></p>	
			</div>	
			<ul class="header-in">
				<li><a>Επικοινωνία &emsp; > </a> </li>
				<li><a> 698 668 9057</a></li>
				<li ><a href="mailto:strigkos@gmail.com">strigkos@gmail.com</a></li>
			</ul>
				<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" ></a>
			</div>
			<div class="header-top-on">
				<ul class="social-in">
					<li><a href="https://twitter.com/alaellhnika" target="_blank"><i class="ic"> </i></a></li>
					<!--
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="ic1"></i></a></li>
					<li><a href="#"><i class="ic2"></i></a></li>
					<li><a href="#"><i class="ic3"></i></a></li>
					-->
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
		<div class="header-bottom">
				<div class="top-nav">
				
			  <ul class="megamenu skyblue">
				<li class="active grid"><a href="https://mikrostore.eu/web">ΕΥΚΑΙΡΙΕΣ - ΔΙΑΦΟΡΟΙ ΤΥΠΟΙ ΠΡΟΣΦΟΡΩΝ </a>

					<div class="megapanel">
						<div class="row">
							<div class="col1" style="display:none">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Accessories</a></li>
										<li><a href="store.html">Bags</a></li>
										<li><a href="store.html">Caps & Hats</a></li>
										<li><a href="store.html">Hoodies & Sweatshirts</a></li>
										<li><a href="store.html">Jackets & Coats</a></li>
										<li><a href="store.html">Jeans</a></li>
										<li><a href="store.html">Jewellery</a></li>
										<li><a href="store.html">Jumpers & Cardigans</a></li>
										<li><a href="store.html">Leather Jackets</a></li>
										<li><a href="store.html">Long Sleeve T-Shirts</a></li>
										<li><a href="store.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							
							<div class="col1">
								<div class="h_nav">
									<h4>Τύπος Προσφοράς</h4>
									<ul>
										<li><a href="index.php">ΟΛΕΣ</a></li>
										<li><a href="index.php?selectType=Coupon">Coupon</a></li>
										<li><a href="index.php?selectType=2for1">2for1</a></li>
										<li><a href="index.php?selectType=FreeDelivery">FreeDelivery</a></li>
										<li><a href="index.php?selectType=FreeGift">FreeGift</a></li>
										<li><a href="index.php?selectType=Discount">Discount</a></li>
										<li><a href="index.php?selectType=Other">Other</a></li>
									</ul>	
								</div>												
							</div>
							
							<div class="col1" style="display:none">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Shirts</a></li>
										<li><a href="store.html">Shoes, Boots & Trainers</a></li>
										<li><a href="store.html">Shorts</a></li>
										<li><a href="store.html">Suits & Blazers</a></li>
										<li><a href="store.html">Sunglasses</a></li>
										<li><a href="store.html">Sweatpants</a></li>
										<li><a href="store.html">Swimwear</a></li>
										<li><a href="store.html">Trousers & Chinos</a></li>
										<li><a href="store.html">T-Shirts</a></li>
										<li><a href="store.html">Underwear & Socks</a></li>
										<li><a href="store.html">Vests</a></li>
									</ul>	
								</div>							
							</div>

						</div>
					</div>

				</li>
				<li><a class="pink" href="#moreOffers">ΑΛΛΕΣ ΕΚΠΤΩΣΕΙΣ</a></li>
					<!--
					
				    <li class="grid"><a  href="#">Brands</a>
					   <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Accessories</a></li>
										<li><a href="store.html">Bags</a></li>
										<li><a href="store.html">Caps & Hats</a></li>
										<li><a href="store.html">Hoodies & Sweatshirts</a></li>
										<li><a href="store.html">Jackets & Coats</a></li>
										<li><a href="store.html">Jeans</a></li>
										<li><a href="store.html">Jewellery</a></li>
										<li><a href="store.html">Jumpers & Cardigans</a></li>
										<li><a href="store.html">Leather Jackets</a></li>
										<li><a href="store.html">Long Sleeve T-Shirts</a></li>
										<li><a href="store.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Shirts</a></li>
										<li><a href="store.html">Shoes, Boots & Trainers</a></li>
										<li><a href="store.html">Shorts</a></li>
										<li><a href="store.html">Suits & Blazers</a></li>
										<li><a href="store.html">Sunglasses</a></li>
										<li><a href="store.html">Sweatpants</a></li>
										<li><a href="store.html">Swimwear</a></li>
										<li><a href="store.html">Trousers & Chinos</a></li>
										<li><a href="store.html">T-Shirts</a></li>
										<li><a href="store.html">Underwear & Socks</a></li>
										<li><a href="store.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="store.html">Levis</a></li>
										<li><a href="store.html">Persol</a></li>
										<li><a href="store.html">Nike</a></li>
										<li><a href="store.html">Edwin</a></li>
										<li><a href="store.html">New Balance</a></li>
										<li><a href="store.html">Jack & Jones</a></li>
										<li><a href="store.html">Paul Smith</a></li>
										<li><a href="store.html">Ray-Ban</a></li>
										<li><a href="store.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
								
				<li><a class="pink" href="gifts.html">gifts</a></li>
			 <li class="grid"><a  href="#">stores</a>
					   <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Accessories</a></li>
										<li><a href="store.html">Bags</a></li>
										<li><a href="store.html">Caps & Hats</a></li>
										<li><a href="store.html">Hoodies & Sweatshirts</a></li>
										<li><a href="store.html">Jackets & Coats</a></li>
										<li><a href="store.html">Jeans</a></li>
										<li><a href="store.html">Jewellery</a></li>
										<li><a href="store.html">Jumpers & Cardigans</a></li>
										<li><a href="store.html">Leather Jackets</a></li>
										<li><a href="store.html">Long Sleeve T-Shirts</a></li>
										<li><a href="store.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="store.html">Shirts</a></li>
										<li><a href="store.html">Shoes, Boots & Trainers</a></li>
										<li><a href="store.html">Shorts</a></li>
										<li><a href="store.html">Suits & Blazers</a></li>
										<li><a href="store.html">Sunglasses</a></li>
										<li><a href="store.html">Sweatpants</a></li>
										<li><a href="store.html">Swimwear</a></li>
										<li><a href="store.html">Trousers & Chinos</a></li>
										<li><a href="store.html">T-Shirts</a></li>
										<li><a href="store.html">Underwear & Socks</a></li>
										<li><a href="store.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="store.html">Levis</a></li>
										<li><a href="store.html">Persol</a></li>
										<li><a href="store.html">Nike</a></li>
										<li><a href="store.html">Edwin</a></li>
										<li><a href="store.html">New Balance</a></li>
										<li><a href="store.html">Jack & Jones</a></li>
										<li><a href="store.html">Paul Smith</a></li>
										<li><a href="store.html">Ray-Ban</a></li>
										<li><a href="store.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				-->
			  </ul> 
				</div>
					<div class="cart icon1 sub-icon1" style="display:none">
						<h6 >Shopping Cart:
						<span class="item">3 items</span>
						<span class="rate">70$</span>
						<li><a href="#" class="round"> </a>
						<ul class="sub-icon1 list">
						  <h3>Recently added items(3)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
										<div class="list_img"><img src="images/si.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                           <div class="cart_box">
							   	 <div class="message1">
							   	     <div class="alert-close1"> </div> 
										<div class="list_img"><img src="images/si1.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
								<div class="cart_box">
							   	 <div class="message2">
							   	     <div class="alert-close2"> </div> 
										<div class="list_img"><img src="images/si.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
							  <div class="check_button"><a href="cart.html">View Cart</a></div>
					      <div class="clearfix"></div>
						</ul>
					</li>
				</h6>
				
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="page">
			<h6><a href="#">mikroStore</a><b>|</b> Κουπόνια - Προσφορές - <span class="for">Εκπτώσεις</span></h6>
		</div>
		<div class="content">
			<div class="col-md-9">
				<!-- Begin of Slider -->
				<div class="shoe">
					<img class="img-responsive" src="images/banner.jpg" alt="" >
					<div class="shop">
						<h4>ΕΥΚΑΙΡΙΕΣ<span>ΜΟΝΟ</span></h4>
						<p>ΟΛΕΣ ΣΕ ΜΙΑ ΣΕΛΙΔΑ</p>
					</div>
				</div>
				<!-- End of Slider -->
				
				<!-- BEGIN OF Coupons GRID -->

				<?php
					/* $selectType */
					include_once('/home/ellhn/public_html/mikrostore.eu/offers/grid-coupons.php');
				?>
				<!-- END OF GRID 1 -->
				<a name="moreOffers" style="display:default"></a>
				<!-- BEGIN OF Program GRID -->
				<?php
					include_once('/home/ellhn/public_html/mikrostore.eu/offers/grid-template.php');
				?>
				<!-- END OF GRID 2 -->
			</div>

		<div class="col-md-3 col-md">
			<div class=" possible-about">
				<h4>Επιλογές</h4>
					<div class="tab1" style="display:none">
						<ul class="place">
							<li class="sort">Με βάση την <span>ΤΙΜΗ</span></li>
							<li class="by"><img src="images/do.png" alt=""></li>
							<div class="clearfix"></div>
						</ul>
						<div class="single-bottom">
							<a href="#">
								<input type="checkbox" id="brand" value="">
								<label for="brand"><span></span><b>Rs.3000-Rs.4000</b></label>
							</a>
							<a href="#">
								<input type="checkbox" id="brand1" value="">
								<label for="brand1"><span></span> <b>Rs.3000-Rs.2000</b></label>
							</a>
							<a href="#">
								<input type="checkbox" id="brand2" value="">
								<label for="brand2"><span></span> <b>Rs.2000-Rs.1000</b></label>
							</a>
							<a href="#">
								<input type="checkbox" id="brand3" value="">
								<label for="brand3"><span></span> <b>Rs.1000-Rs.500</b></label>
							</a>
							<a href="#">
								<input type="checkbox" id="brand4" value="">
								<label for="brand4"><span></span><b>Rs.500-below</b></label>
							</a>
						</div>
					</div>
					<div class="tab2" style="display:default">
						<ul class="place">
							<li class="sort">Τύποι <span>ΠΡΟΣΦΟΡΩΝ</span></li>
							<li class="by"><img src="images/do.png" alt=""></li>
							<div class="clearfix"> </div>
						</ul>
						
						<div class="single-bottom">
							<a href="#">
								<input type="checkbox" checked disabled id="nike" value="">
								<label for="nike"><span></span><b>2 σε 1</b></label>
							</a>
							<a href="#">
								<input type="checkbox" checked disabled id="nike1" value="">
								<label for="nike1"><span></span><b>Έκπτωση</b></label>
							</a>
							<a href="#">
								<input type="checkbox" checked disabled id="nike2" value="">
								<label for="nike2"><span></span><b>Δωρεάν παράδοση</b></label>
							</a>
							<a href="#">
								<input type="checkbox" checked disabled id="nike3" value="">
								<label for="nike3"><span></span><b>Με κάποιο δώρο</b></label>
							</a>
							<a href="#">
								<input type="checkbox" checked disabled  id="nike4" value="">
								<label for="nike4"><span></span><b>Άλλη προσφορά</b></label>
							</a>
						</div>
					</div>

					<div class="tab3" style="display:none">
						<ul class="place">
							
							<li class="sort">Sort by <span>colour</span> </li>
							<li class="by"><img src="images/do.png" alt=""></li>
							<div class="clearfix"> </div>
						</ul>
						<ul class="w_nav2">
							<li><a class="color1" href="#"></a></li>
							<li><a class="color2" href="#"></a></li>
							<li><a class="color3" href="#"></a></li>
							<li><a class="color4" href="#"></a></li>
							<li><a class="color5" href="#"></a></li>
							<li><a class="color6" href="#"></a></li>
							<li><a class="color7" href="#"></a></li>
							<li><a class="color8" href="#"></a></li>
							<li><a class="color9" href="#"></a></li>
							<li><a class="color10" href="#"></a></li>
							<li><a class="color12" href="#"></a></li>
							<li><a class="color13" href="#"></a></li>
							<li><a class="color14" href="#"></a></li>
							<li><a class="color15" href="#"></a></li>
							<li><a class="color5" href="#"></a></li>
							<li><a class="color6" href="#"></a></li>
							<li><a class="color7" href="#"></a></li>
							<li><a class="color8" href="#"></a></li>
							<li><a class="color9" href="#"></a></li>
							<li><a class="color10" href="#"></a></li>
						</ul>
					</div>
					<div class="tab4">
						<ul class="place">
							<li class="sort">Ύψος <span> ΕΚΠΤΩΣΕΩΝ</span> </li>
							<li class="by"><img src="images/do.png" alt=""></li>
							<div class="clearfix"> </div>
						</ul>
						<div class="single-bottom">
						<!--
						<a href="#">
							<input type="checkbox"  id="up" value="">
							<label for="up"><span></span><b>Upto 10%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up1" value="">
							<label for="up1"><span></span> <b>10%-20%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up2" value="">
							<label for="up2"><span></span> <b>20%-30%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up3" value="">
							<label for="up3"><span></span> <b>30%-40%</b></label>
						</a>
						-->
						<a href="#">
							<input type="radio" checked disabled  id="up4" value="">
							<label for="up4"><span></span><b>Πάνω από 20%</b></label>
						</a>
					
						</div>
					</div>
					<div class="tab5" style="display:none">
						<ul class="place">
							
							<li class="sort">Sort by <span>rating</span> </li>
							<li class="by"><img src="images/do.png" alt=""></li>
							<div class="clearfix"> </div>
						</ul>
						<div class="star-at">
						<div class="two">
							<a href="#"> <i></i>  </a>	
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
						</div>
						<div class="two">
							<a href="#"> <i></i>  </a>	
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
							
						</div>
						<div class="two">
							<a href="#"> <i></i>  </a>	
							<a href="#"> <i></i>  </a>
							<a href="#"> <i></i>  </a>
							
						</div>
						<div class="two">
							<a href="#"> <i></i>  </a>	
							<a href="#"> <i></i>  </a>
							
						</div>
						</div>
					
					</div>
					
					<!--script-->
					<script>
						$(document).ready(function(){
							$(".tab1 .single-bottom").hide();
							$(".tab2 .single-bottom").hide();
							$(".tab3 .w_nav2").hide();
							$(".tab4 .single-bottom").hide();
							$(".tab5 .star-at").hide();
							$(".tab1 ul").click(function(){
								$(".tab1 .single-bottom").slideToggle(300);
								$(".tab2 .single-bottom").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .star-at").hide();
							})
							$(".tab2 ul").click(function(){
								$(".tab2 .single-bottom").slideToggle(300);
								$(".tab1 .single-bottom").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .star-at").hide();
							})
							$(".tab3 ul").click(function(){
								$(".tab3 .w_nav2").slideToggle(300);
								$(".tab4 .single-bottom").hide();
								$(".tab5 .star-at").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab1 .single-bottom").hide();
							})
							$(".tab4 ul").click(function(){
								$(".tab4 .single-bottom").slideToggle(300);
								$(".tab5 .star-at").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab1 .single-bottom").hide();
							})	
							$(".tab5 ul").click(function(){
								$(".tab5 .star-at").slideToggle(300);
								$(".tab4 .single-bottom").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab1 .single-bottom").hide();
							})	
						});
					</script>
				<!-- script -->
			</div>
			<div class="content-bottom-grid" style="display:none">
					<h3>Best Sellers</h3>
					<div class="latest-grid">
						<div class="news">
							<a href="single.html"><img class="img-responsive" src="images/si.jpg" title="name" alt=""></a>
						</div>
						<div class="news-in">
							<h6><a href="single.html">Product name here</a></h6>
							<p>Description Lorem ipsum </p>
							<ul>
								<li>Price: <span>$110</span> </li><b>|</b>
								<li>Country: <span>US</span></li>
							</ul>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latest-grid">
						<div class="news">
							<a href="single.html"><img class="img-responsive" src="images/si1.jpg" title="name" alt=""></a>
						</div>
						<div class="news-in">
							<h6><a href="single.html">Product name here</a></h6>
							<p>Description Lorem ipsum </p>
							<ul>
								<li>Price: <span>$110</span> </li><b>|</b>
								<li>Country: <span>US</span></li>
							</ul>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latest-grid">
						<div class="news">
							<a href="single.html"><img class="img-responsive" src="images/si.jpg" title="name" alt=""></a>
						</div>
						<div class="news-in">
							<h6><a href="single.html">Product name here</a></h6>
							<p>Description Lorem ipsum</p>
							<ul>
								<li>Price: <span>$110</span> </li><b>|</b>
								<li>Country: <span>US</span></li>
							</ul>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latest-grid">
						<div class="news">
							<a href="single.html"><img class="img-responsive" src="images/si1.jpg" title="name" alt=""></a>
						</div>
						<div class="news-in">
							<h6><a href="single.html">Product name here</a></h6>
							<p>Description Lorem ipsum </p>
							<ul>
								<li>Price: <span>$110</span> </li><b>|</b>
								<li>Country: <span>US</span></li>
							</ul>
						</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- -->
			<div class="money" style="display:none">
				<h3>Payment Options</h3>
				<ul class="money-in">
					<li><a href="single.html"><img class="img-responsive" src="images/p1.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p2.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p3.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p4.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p5.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p6.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p1.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p4.png" title="name" alt=""></a></li>
					<li><a href="single.html"><img class="img-responsive" src="images/p2.png" title="name" alt=""></a></li>
				</ul>
			</div>
		</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="footer">
				<p class="footer-class">Powred by  <a href="https://ellhnika.gr/mikro-web/" target="_blank">mikroWeb</a>
				</p>
				<a href="#home" class="scroll to-Top" > GO TO TOP 🢙</a>
		<div class="clearfix"> </div>
		</div>	 	
	 </div>
	</div>
	<!---->
</body>
</html>
<!--
	A Design by W3layouts 
	Author: W3layout
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->