<?php        if(session_id() == '') {
 session_start();
} 
$product=array('pc portable versus v book quad core 2go 32go gris win 10'=>array(
                    'img'=>'../inc/images/pc-portable-versus-v-book-quad-core-2go-32go-gris-win-10.jpg',
                    'price'=>'469,000 DT',
                    'Fabricant '=>'versus'
                    ),
                    'Tablette 2 en 1 SCHNEIDER Quad-Core 2Go 32Go Win 10 Gris'=>array(
                    'img'=>'../inc/images/tablette-2-en-1-schneider-quad-core-2go-32go-win-10-gris-.jpg',
                    'price'=>'415,000 DT',
                    'Fabricant '=>'SCHNEIDER'
                    ),                                  
                    'pc portable lenovo ideapad 330 amd 4go 1to bleu'=>array(
                    'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-4go-1to-bleu-.jpg',
                    'price'=>'599,000 DT',
                    'Fabricant '=>'lenovo'
                    ),                
                    'pc portable lenovo ideapad 330 amd 4go 1to blanc'=>array(
                    'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-4go-1to-blanc-.jpg',
                    'price'=>'599,000 DT',
                    'Fabricant '=>'lenovo'
                    ),                 
                    'pc portable lenovo ideapad 330amd 4go 1to gris'=>array(
                    'img'=>'../inc/images/pc-portable-lenovo-ideapad-330amd-4go-1to-gris-.jpg',
                    'price'=>'599,000 DT',
                    'Fabricant '=>'lenovo'
                    ),  
                    'pc portable lenovo ideapad 330amd 4go 1to Noir'=>array(
                    'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-4go-1to-noir-.jpg',
                    'price'=>'599,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ip slim dual core a6 9220e 4go 256go ssd bleu'=>array(
                    'img'=>'../inc/images/pc-portable-lenovo-ip-slim-dual-core-a6-9220e-4go-256go-ssd-bleu.jpg',
                    'price'=>'605,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ip slim dual core a6 9220e 4go 256go ssd gris'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ip-slim-dual-core-a6-9220e-4go-256go-ssd-gris.jpg',
                     'price'=>'605,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ideapad 330 amd 8go 1to bleu'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-8go-1to-bleu.jpg',
                     'price'=>'659,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ideapad 330 amd 8go 1to blanc'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-8go-1to-blanc.jpg',
                     'price'=>'659,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ideapad 330 amd 8go 1to blanc'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-8go-1to-blanc.jpg',
                     'price'=>'659,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ideapad 330 amd 8go 1to gris'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-8go-1to-gris.jpg',
                     'price'=>'659,000 DT',
                    'Fabricant '=>'lenovo'
                    ),
                    'pc portable lenovo ideapad 330 amd 8go 1to noir'=>array(
                     'img'=>'../inc/images/pc-portable-lenovo-ideapad-330-amd-8go-1to-noir.jpg',
                     'price'=>'659,000 DT',
                    'Fabricant '=>'lenovo'
                    )
                    );

if(!isset($_SESSION['panier'])||!isset($_SESSION['qt'])){
    $tab=array();
    $_SESSION['produit']=$product;
    $_SESSION['panier']=$tab;
    $_SESSION['qt']=0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../inc/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../inc/css/util.css">
	<link rel="stylesheet" type="text/css" href="../inc/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php require("../view/header.php") ?>
	<!-- Header -->
	
	<!-- Title Page -->
	
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									pc portable
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Tablet
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Phone
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Accesories
								</a>
							</li>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<?php 
    if(isset($_GET['pc portable versus v book quad core 2go 32go gris win 10'])){
    $_SESSION['qt']+=1;
    $_SESSION['panier']['pc portable versus v book quad core 2go 32go gris win 10']+=1;
       echo "pc portable versus v book quad core 2go 32go gris win 10";
}
    foreach($product as $p=>$info){
   if(isset($_GET[$p])){
    $_SESSION['qt']+=1;
    $_SESSION['panier'][$p]+=1;
       echo $p;
}
}
                    foreach($product as $p=>$info){ ?>
                        <div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?=$info["img"]?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										
											<!-- Button -->
											<form class="block2-btn-addcart w-size1 trans-0-4" action="product.php" method="GET" >
										    
											<input type="hidden" name="<?=$p?>" />
											<input type="submit" value="Add to Cart" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" />
											
											</form>
										
									</div>
								</div>
                    
								<div class="block2-txt p-t-20">
									<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
										<?=$p?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?=$info["price"]?>
									</span>
								</div>
							</div>
						</div>
                    
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                   
                    <?php }
                    ?>
							

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
            
	<!-- Footer -->
	<?php require("../view/footer.php") ?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../inc/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../inc/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../inc/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="../inc/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 300, 10000 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="../inc/js/main.js"></script>

</body>
</html>
