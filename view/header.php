<?php
if (session_status() == PHP_SESSION_NONE) {
                session_start();
                }
?>
    <header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-facebook"></a>
					<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-instagram"></a>
					<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over 100DT
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						Electro-shop@electroshop.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>DT</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="http://localhost/ecomercewanabe/index.php" class="logo">
					<img src="http://localhost/ecomercewanabe/inc/images/icons/logo2.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="http://localhost/ecomercewanabe/index.php">Home</a>
							</li>

							<li>
								<a href="http://localhost/ecomercewanabe/controleur/routeurProduit.php">Shop</a>
							</li>							
							<li>
								<a href="http://localhost/ecomercewanabe/about.php">About</a>
							</li>

							<li>
								<a href="http://localhost/ecomercewanabe/contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="<?php if(!isset($_SESSION['user'])){echo"http://localhost/ecomercewanabe/controleur/routeurUser.php";}else{
    echo"#";
} ?>" class="header-wrapicon1 dis-block">
						<img src="http://localhost/ecomercewanabe/<?php if(isset($_SESSION['user'])) { echo $_SESSION['user']['avatar'];}else{echo"inc/images/icons/icon-header-01.png";} ?>" class="header-icon1" alt="ICON">
					</a>
                    <?php if(isset($_SESSION['user'])){?>
                     <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?=$_SESSION['user']['username']?>
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      
                      <li class="divider"></li>
                      <li><a href="http://localhost/ecomercewanabe/view/user/logout.php">deconextion</a></li>
                    </ul>
                    </div>
                    <?php }?>
                    <span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="http://localhost/ecomercewanabe/inc/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x 19.00DT
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x 39.00DT
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x 17.00DT
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: 75.00DT
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="http://localhost/ecomercewanabe/cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="http://localhost/ecomercewanabe/#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="http://localhost/ecomercewanabe/index.php" class="logo-mobile">
				<img src="http://localhost/ecomercewanabe/inc/images/icons/logo2.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="http://localhost/ecomercewanabe/#" class="header-wrapicon1 dis-block">
						<img src="http://localhost/ecomercewanabe/inc/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="http://localhost/ecomercewanabe/inc/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x 19.00DT
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x DT39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="http://localhost/ecomercewanabe/inc/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="http://localhost/ecomercewanabe/#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x 17.00DT
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: 75.00DT
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="http://localhost/ecomercewanabe/cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="http://localhost/ecomercewanabe/#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over 100DT
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								Electro-shop@electroshp.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>DT</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-facebook"></a>
							<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-instagram"></a>
							<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="http://localhost/ecomercewanabe/#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/index.php">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/controleur/roueteurProduct.php">Shop</a>
					</li>

<!--
					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/product.php">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/cart.php">Features</a>
					</li>
-->

					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/view/about.php">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="http://localhost/ecomercewanabe/view/contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>