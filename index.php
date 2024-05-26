<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
	$id = intval($_GET['id']);
	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity']++;
	} else {
		$sql_p = "SELECT * FROM products WHERE id={$id}";
		$query_p = mysqli_query($con, $sql_p);
		if (mysqli_num_rows($query_p) != 0) {
			$row_p = mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);
		} else {
			$message = "Product ID is invalid";
		}
	}
	echo "<script>alert('Product has been added to the cart')</script>";
	echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">

	<title>Candy Cove</title>
	<!--=======My Css======-->
	<link rel="stylesheet" href="my_css/topMainHeader.css">
	<link rel="stylesheet" href="my_css/Menu_Bar.css">
	<link rel="stylesheet" href="my_css/bodyContent.css">
	<link rel="stylesheet" href="my_css/common.css">
	<link rel="stylesheet" href="my_css/mySlider.css">
	<link rel="stylesheet" href="my_css/products.css">
	<link rel="stylesheet" href="my_css/myFooter.css">
	<!--=======/My Css======-->


	<!--=======Fonts======-->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<!--=======/Fonts======-->


	<!--====== Favicon ======-->
	<!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
	<!--====== /Favicon ======-->

</head>

<body class="cnt-home">
	<!-- ============================================== HEADER ============================================== -->
	<header class="header-style-1">
		<?php include('includes/top-header.php'); ?>
		<?php include('includes/main-header.php'); ?>
	</header>
	<!-- ============================================ /.HEADER =============================================== -->
	<!--=========== CATEGORIES =========-->
	<?php include('includes/menu-bar.php'); ?>
	<!--=========== /.CATEGORIES =========-->
	<!-- ======================================== BODY(content) & FOOTER ===================================== -->
	<div class="body-content outer-top-xs" id="top-banner-and-menu">
		<!--======================================= Main Body Content =========================================-->
		<div class="container">
			<div class="furniture-container homepage-container">
				<!--===== Slider and Info =====-->
				<div class="SliderSection row">
					<!-- ================ Side Categories (Hidden) ================-->
					<div class="col-xs-12 col-sm-12 col-md-3 sidebar forHideDisplay">
						<?php include('includes/side-menu.php'); ?>
					</div>
					<!--============= /.Side Categories ==============-->

					<!--======================== Slider & Links ==============================-->
					<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

						<!--===== Slider ======-->
						<div class="slider">
							<div class="list">
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? home-made-food-product-poster" alt="image 1" width="100%">

									<div class="content">
										<div class="title">MAGIC SLIDER</div>
										<div class="type">FLOWER</div>
										<div class="description">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum
											consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor
											sit amet consectetur adipisicing elit. Sequi, aut.
										</div>
										<div class="button">
											<button>SEE MORE</button>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? home-food-product-poster" alt="image 2" width="100%">

									<div class="content">
										<div class="title">MAGIC SLIDER</div>
										<div class="type">NATURE</div>
										<div class="description">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum
											consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor
											sit amet consectetur adipisicing elit. Sequi, aut.
										</div>
										<div class="button">
											<button>SEE MORE</button>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? sweet-food-product-poster" alt="image 3" width="100%">

									<div class="content">
										<div class="title">MAGIC SLIDER</div>
										<div class="type">PLANT</div>
										<div class="description">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum
											consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor
											sit amet consectetur adipisicing elit. Sequi, aut.
										</div>
										<div class="button">
											<button>SEE MORE</button>
										</div>
									</div>
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? food-product-poster" alt="image 4" width="100%">

									<div class="content">
										<div class="title">MAGIC SLIDER</div>
										<div class="type">NATURE</div>
										<div class="description">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum
											consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor
											sit amet consectetur adipisicing elit. Sequi, aut.
										</div>
										<div class="button">
											<button>SEE MORE</button>
										</div>
									</div>
								</div>
							</div>
							<div class="thumbnail">

								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? home-made-food-product-poster" alt="image 1">
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? home-food-product-poster" alt="image 2">
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? sweet-food-product-poster" alt="image 3">
								</div>
								<div class="item">
									<img src="https://source.unsplash.com/1348x449/? food-product-poster" alt="image 4">
								</div>

							</div>
							<div class="nextPrevArrows">
								<button class="prev">
									< </button>
										<button class="next" id="autoClickButton"> > </button>
							</div>
						</div>
						<!--===== /Slider ======-->

						<!--================= BESTSELLER HEADING AND LINKS ===================-->
						<div class="space-for-best-seller">
							<div class="best-seller">
								<div class="bestSellerHeading">
									<h3>OUR BESTSELLERS</h3>
								</div>
								<tabs-nav class="tabs-nav tabs-nav-center ">
									<div class="tabs-nav__item-list">
										<button type="button" class="tabs-nav__item heading" aria-expanded="true" aria-controls="block-template--17128539554113__featured-collections-collection-1"><a href="#product-tabs-slider">FEATURED PRODUCTS</a></button>
										<button type="button" class="tabs-nav__item heading" aria-expanded="false" aria-controls="block-template--17128539554113__featured-collections-2fc94ba2-1234-44f7-a8e1-5d0b5cfda9ff"><a href="#secondProductSlider">SMART PHONES</a></button>
										<button type="button" class="tabs-nav__item heading" aria-expanded="false" aria-controls="block-template--17128539554113__featured-collections-80234426-9fa7-4010-9f7b-22c4d528ba37"><a href="#thirdProductSlider">LAPTOPS</a></button>
										<button type="button" class="tabs-nav__item heading" aria-expanded="false" aria-controls="block-template--17128539554113__featured-collections-f31cef92-cf4e-4332-b0bd-42d49d1c54c1"><a href="#forthProductSlider">FASHION</a></button>
									</div>
								</tabs-nav>

							</div>
						</div>
						<!--================= /.BESTSELLER HEADING AND LINKS ===================-->

						<!--===== info-boxes =====-->
						<div class="info-boxes wow fadeInUp forHideDisplay">
							<div class="info-boxes-inner">
								<div class="row forFlex">
									<div class="col-md-6 col-sm-4 col-lg-4">
										<div class="info-box">
											<div class="row forMargin">
												<div class="col-xs-2">
													<i class="icon fa fa-dollar"></i>
												</div>
												<div class="col-xs-10">
													<h4 class="info-box-heading green">money back</h4>
												</div>
											</div>
											<h6 class="text">30 Day Money Back Guarantee.</h6>
										</div>
									</div><!-- .col -->

									<div class="hidden-md col-sm-4 col-lg-4">
										<div class="info-box">
											<div class="row forMargin">
												<div class="col-xs-2">
													<i class="icon fa fa-truck"></i>
												</div>
												<div class="col-xs-10">
													<h4 class="info-box-heading orange">free shipping</h4>
												</div>
											</div>
											<h6 class="text">free ship-on oder over Rs. 600.00</h6>
										</div>
									</div><!-- .col -->

									<div class="col-md-6 col-sm-4 col-lg-4">
										<div class="info-box">
											<div class="row forMargin">
												<div class="col-xs-2">
													<i class="icon fa fa-gift"></i>
												</div>
												<div class="col-xs-10">
													<h4 class="info-box-heading red">Special Sale</h4>
												</div>
											</div>
											<h6 class="text">All items-sale up to 20% off </h6>
										</div>
									</div><!-- .col -->
								</div><!-- /.row -->
							</div><!-- /.info-boxes-inner -->

						</div>
						<!--===== info-boxes =====-->
						<!-- this inbox will be replaced by links for section -->
					</div>
					<!--======================== /.Slider & Links ==============================-->
				</div>
				<!--===== /.Slider and Info =====-->


				<!--============== Featured Products (First Row) ==============-->
				<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
					<div class="more-info-tab clearfix">
						<h3 class="new-product-title pull-left">Featured Products</h3>
						<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
							<li class="active"><a href="#all" data-toggle="tab">All</a></li>
							<li><a href="#books" data-toggle="tab">Books</a></li>
							<li><a href="#furniture" data-toggle="tab">Furniture</a></li>
						</ul><!-- /.nav-tabs -->
					</div>

					<div class="tab-content outer-top-xs forAlignAccToMe">
						<div class="tab-pane in active" id="all">
							<div class="product-slider">
								<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
									<?php
									$ret = mysqli_query($con, "select * from products");
									while ($row = mysqli_fetch_array($ret)) {
										# code...



									?>


										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage" alt=""></a>
														</div><!-- /.image -->


													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																Rs.<?php echo htmlentities($row['productPrice']); ?> </span>
															<span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?> </span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<?php if ($row['productAvailability'] == 'In Stock') { ?>
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
													<?php } else { ?>
														<div class="action" style="color:red">Out of Stock</div>
													<?php } ?>
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->
									<?php } ?>

								</div><!-- /.home-owl-carousel -->
							</div><!-- /.product-slider -->
						</div>




						<div class="tab-pane" id="books">
							<div class="product-slider">
								<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
									<?php
									$ret = mysqli_query($con, "select * from products where category=3");
									while ($row = mysqli_fetch_array($ret)) {
										# code...


									?>


										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage" alt=""></a>
														</div><!-- /.image -->


													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																Rs. <?php echo htmlentities($row['productPrice']); ?> </span>
															<span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?></span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<?php if ($row['productAvailability'] == 'In Stock') { ?>
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
													<?php } else { ?>
														<div class="action" style="color:red">Out of Stock</div>
													<?php } ?>
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->
									<?php } ?>


								</div><!-- /.home-owl-carousel -->
							</div><!-- /.product-slider -->
						</div>






						<div class="tab-pane" id="furniture">
							<div class="product-slider">
								<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
									<?php
									$ret = mysqli_query($con, "select * from products where category=5");
									while ($row = mysqli_fetch_array($ret)) {
									?>


										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage" alt=""></a>
														</div>


													</div>


													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																Rs.<?php echo htmlentities($row['productPrice']); ?> </span>
															<span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?></span>

														</div>

													</div>
													<?php if ($row['productAvailability'] == 'In Stock') { ?>
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
													<?php } else { ?>
														<div class="action" style="color:red">Out of Stock</div>
													<?php } ?>
												</div>

											</div>
										</div>
									<?php } ?>


								</div>
							</div>
						</div>
					</div>
				</div>
				<!--============== /.Featured Products (First Row) ===============-->


				<!--================= (Second & Third Row) =================-->
				<div class="sections prod-slider-small outer-top-small">
					<div class="row">
						<div class="col-md-6" id="secondProductSlider">
							<section class="section">
								<h3 class="section-title">Smart Phones</h3>
								<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme forAlignAccToMe" data-item="4">

									<?php
									$ret = mysqli_query($con, "select * from products where category=4 and subCategory=4");
									while ($row = mysqli_fetch_array($ret)) {
									?>



										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage"></a>
														</div><!-- /.image -->
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																Rs. <?php echo htmlentities($row['productPrice']); ?> </span>
															<span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?></span>

														</div>

													</div>
													<?php if ($row['productAvailability'] == 'In Stock') { ?>
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
													<?php } else { ?>
														<div class="action" style="color:red">Out of Stock</div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php } ?>


								</div>
							</section>
						</div>
						<div class="col-md-6" id="thirdProductSlider">
							<section class="section">
								<h3 class="section-title">Laptops</h3>
								<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme forAlignAccToMe" data-item="4">
									<?php
									$ret = mysqli_query($con, "select * from products where category=4 and subCategory=6");
									while ($row = mysqli_fetch_array($ret)) {
									?>



										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage"></a>
														</div><!-- /.image -->
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																Rs .<?php echo htmlentities($row['productPrice']); ?> </span>
															<span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?></span>

														</div>

													</div>
													<?php if ($row['productAvailability'] == 'In Stock') { ?>
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
													<?php } else { ?>
														<div class="action" style="color:red">Out of Stock</div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php } ?>



								</div>
							</section>

						</div>
					</div>
				</div>
				<!--================= /.(Second & Third Row) =================-->


				<!--================= (Fourth Row) =================-->
				<section class="section featured-product inner-xs wow fadeInUp" id="forthProductSlider">
					<h3 class="section-title">Fashion</h3>
					<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs forDisplay forAlignAccToMe" data-item="5">
						<?php
						$ret = mysqli_query($con, "select * from products where category=6");
						while ($row = mysqli_fetch_array($ret)) {
							# code...


						?>
							<div class="item">
								<div class="products">




									<div class="product">
										<div class="product-micro">
											<div class="row product-micro-row">
												<div class="col col-xs-6">
													<div class="product-image">
														<div class="image">
															<a href="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']); ?>">
																<img data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" class="productImage" alt="">
																<div class="zoom-overlay"></div>
															</a>
														</div><!-- /.image -->

													</div><!-- /.product-image -->
												</div><!-- /.col -->
												<div class="col col-xs-6">
													<div class="product-info">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="product-price">
															<span class="price">
																Rs. <?php echo htmlentities($row['productPrice']); ?>
															</span>

														</div><!-- /.product-price -->
														<?php if ($row['productAvailability'] == 'In Stock') { ?>
															<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
														<?php } else { ?>
															<div class="action" style="color:red">Out of Stock</div>
														<?php } ?>
													</div>
												</div><!-- /.col -->
											</div><!-- /.product-micro-row -->
										</div><!-- /.product-micro -->
									</div>


								</div>
							</div><?php } ?>
					</div>
				</section>
				<!--================= /.(Fourth Row) =================-->


				<!--================= Brand Slider =================-->
				<?php include('includes/brands-slider.php'); ?>
				<!--================= Brand Slider =================-->
			</div>
		</div>
		<!--===================================== /.Main Body Content =========================================-->


		<!--============================================ Footer ===============================================-->
		<?php include('includes/myFooter.php'); ?>
		<!--========================================= /.Footer end ============================================-->
	</div>
	<!-- ======================================== /.BODY(content) & FOOTER ==================================== -->


	<!-- ============================================= SCRIPT ================================================= -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="assets/js/jquery.rateit.min.js"></script>
	<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="my_script/slider.js"></script>

	<!-- For demo purposes – can be removed on production -->
	<script src="switchstylesheet/switchstylesheet.js"></script>
	<script>
		$(document).ready(function() {
			$(".changecolor").switchstylesheet({
				seperator: "color"
			});
			$('.show-theme-options').click(function() {
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
			$('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->
	<!-- ============================================ /.SCRIPT =============================================== -->
</body>

</html>