<?php 

$cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[];

?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
		<!-- Basic page needs
        ============================================ --> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home 1 | fc flower</title>
        <meta name="description" content="">
		<!-- Mobile specific metas --> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- carousel CSS -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- carousel Theme CSS -->
		<link rel="stylesheet" href="css/owl.my_theme.css">
		<!-- carousel transitions CSS -->
		<link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Price jquery-ui  -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- fancy-box theme -->
        <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
		<!-- normalizer -->
        <link rel="stylesheet" href="css/normalize.css">
		<!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Mobile menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- main -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive css -->
        <link rel="stylesheet" href="css/custom.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
<marquee direction="left" style="background:aliceblue">SHOP xin th??ng b??o: Nh??n d???p ch??o h?? 2023, nh???m tri ??n kh??ch h??ng lu??n tin t?????ng mua hoa c???a shop FC-flowershop, 100% kh??ch h??ng khi nh???p code <span>code<span> s??? ???????c gi???m 5% gi?? tr??? ????n h??ng. Ch??c qu?? kh??ch c?? m???t mua h?? s??i ?????ng c??ng v???i HQQ_SHOP!</marquee>
    <!--Start Header Top area -->
		<div class="header_area_top"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<!--Start Search area -->
					
						<form action="search.php" name="myForm">
							<div class="search_box">
								<input name="Name" id="itp" class="input_text" type="text" value="T??m Ki???m"/>
								<button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
								</button>
							</div>
						</form> 
						<!--End Search area -->
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Logo area -->
						<div class="logo"> 
							<a href="index.php">
								<img src="img/logo/logo3.png" alt="" />
							</a>
						</div> 
						<!--End Logo area -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Header Right Cart area -->
						<div class="account_card_area"> 
							<ul id="account_nav">
								<li><a href="my-account.php"><i class="fa fa-key"></i>T??i kho???n</a></li>
								<li><a href="view2.php"><i class="fa fa-shopping-cart"></i>Gi??? h??ng<span class="cart_zero"><?php echo count($cart);?></span></a></li>
								<li><a href="./logout.php"><i class="fa fa-key"></i>????ng Xu???t</a></li>
							</ul>
						</div> 
						<!--End Header Right Cart area -->
					</div>
				</div>
			</div>
		</div> 
		<!--End Header Top area -->


		<!--Start Main Menu area -->
		<div class="header_botttom_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--Start desktop menu area -->
						<div class="main_menu">
							<ul id="nav_menu" class="active_cl">
								<li><a href="index.php"><span class="Home">Trang ch???</span></a>
									
								</li>
								<li><a href="shop.php"><span class="Clothings">C???a h??ng</span></a>
									<div class="home_mega_menu">
										<div class="single_megamenu">
											<a href="cate.php?cate=1"><span>Hoa Sinh Nh???t</span></a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=2">Lan H??? ??i???p</a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=3">Hoa Ch??c M???ng</a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=4">Hoa H???ng</a>
										</div>
									</div>
								</li>

								<li><a href="single-blog.php"><span class="Footwear">Blog</span></a>
									<div class="home_mega_menu">
										<a href="single-blog.php">Blog c???a t??i</a>
									</div>
								</li>

								<li><a href="contact.php"><span class="Sales">Gi???i thi??u</span></a>
								</li>

								<li><a href="about-us.php"><span class="Accessaries">V??? ch??ng t??i</span></a>
									
								</li>
								<li><a href="history.php">????n H??ng</a></li>
							</ul>
						</div>
						<!--End desktop menu area -->
					</div>
				</div>
			</div>

			<!--start Mobile Menu area -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">Trang ch???</a>
											
										</li>
										<li><a href="shop.php">C???a h??ng</a>
											
										</li>

										<li><a href="blog.php">Blog</a>
											<ul>
												<li><a href="single-blog.php">Blog c???a t??i</a></li>
											</ul>
										</li>
										<li><a href="shop.php">Shop</a>
											<ul>										
												<li><a href="cart.php">Gi??? h??ng</a></li>
												<li><a href="product.php">S???n ph???m</a></li>
												<li><a href="checkout.php">Thanh to??n</a></li>
												<li><a href="my-account.php">T??i kho???n</a></li>
											</ul>
										</li>
										<li><a href="about-us.php">Trang kh??c</a>
											<ul>										
												<li><a href="about-us.php">Ve Chung Toi</a></li>
												<li><a href="contact.php">Gioi Thi??u</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!--End Mobile Menu area -->
		</div>
		<!--End Main Menu area -->
</body>
</php>