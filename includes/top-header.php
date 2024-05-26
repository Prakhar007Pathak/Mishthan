<?php
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
		<div class="offers-strip">
                <p>ADD RECENT OFFERS HERE</p>
        </div>

			<div class="cnt-account">
				<ul class="list-unstyled">

					<?php if (strlen($_SESSION['login'])) {   ?>
						<li class="liForLogOut"><a href="#"><i class="icon fa fa-user"></i> Welcome <?php echo htmlentities($_SESSION['username']); ?></a></li>
					<?php } ?>
					<!-- <li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li> -->
					<!-- <div class="search headerLis"><i class="bx bx-search" id="search-icon"></i></div> -->
					<li class="headerLis"><a href="my-wishlist.php"><i class="icon fa fa-heart"></i></a></li>
					<li class="headerLis"><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i></a></li>
					<?php if (strlen($_SESSION['login']) == 0) {   ?>
						<li class="headerLis"><a href="login.php"><i class="icon fa fa-user"></i></a></li>
					<?php } else { ?>

						<li class="headerLis"><a href="logout.php"><i class="icon fa fa-sign-out"></i></a></li>
					<?php } ?>
				</ul>
			</div><!-- /.cnt-account -->

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle"><span class="key">Track Order</b></a>

					</li>


				</ul>
			</div>

			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->