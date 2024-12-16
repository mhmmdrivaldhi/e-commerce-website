<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo-olshop.png" type="image/png">
    <title>Home User - Toko Online</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require "navbar-users.php"; ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container thumbnail text-center">
            <h2 class="fw-bold mt-2 mb-4"><b>Adidas</b> Factory <span>Outlet</span></h2>
            <h5 class="fw-bold">What Are You Looking For ?</h5>
            <div class="col-md-6 offset-md-3">
                <div class="input-group my-2">
                    <input type="text" class="form-control" placeholder="Search Items . . ." aria-label="Search Items" aria-describedby="basic-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Category -->

    <div class="container-fluid">
        <div class="container py-5 text-center">
            <section class="category" id="category">
            <h2 class="text-center">Featured <b>Categories</b></h2>

            <div class="row mt-5">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/adidas samba.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-secondary"> Daily Casual</h6>
                            <a href="#" class="btn btn-primary fw-bold btn-sm mt-3">See More <i class="fa-regular fa-pen-to-square"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/adidas-ultraboost.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-secondary">Sport Wear</h6>
                            <a href="#" class="btn btn-primary fw-bold btn-sm mt-3">See More <i class="fa-regular fa-pen-to-square"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/adidas-tracktop.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-secondary">Tracktop Jacket</h6>
                            <a href="#" class="btn btn-primary fw-bold btn-sm mt-3">See More <i class="fa-regular fa-pen-to-square"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/adidas-predator.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-secondary">Football Series</h6>
                            <a href="#" class="btn btn-primary fw-bold btn-sm mt-3">See More <i class="fa-regular fa-pen-to-square"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>

    <!-- Product -->

    <section class="product" id="product">
    <div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center py-2" >Featured <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/adizero-catalog.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content">
									<h4>Adizero Adios PRO.5</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/cn-trefoil-cataog.jpg" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>Crewneck Jacket Trefoil</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$199.00</strike> <b>$130.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/crazyfast1-catalog.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>adidas X Crazyfast.1 FG</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/grand-slam-catalog.jpg" class="img-fluid" alt="Nikon">
								</div>
								<div class="thumb-content">
									<h4>Adidas Grand Slam W/G</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$180.00</strike> <b>$155.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/tracktop-adicolor-catalog.jpg" class="img-fluid" alt="Play Station">
								</div>
								<div class="thumb-content">
									<h4>Superstar Tracktop Adicolor</h4>
									<p class="item-price"><strike>$229.00</strike> <b>$189.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/samba-catalog.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Adidas Samba OG White</h4>
									<p class="item-price"><strike>$221.00</strike> <b>$189.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/copa-pure2-catalog.jpg" class="img-fluid" alt="Speaker">
								</div>
								<div class="thumb-content">
									<h4>Adidas Copa Pure 2</h4>
									<p class="item-price"><strike>$469.00</strike> <b>$424.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/superstar-catalog.jpg" class="img-fluid" alt="Galaxy">
								</div>
								<div class="thumb-content">
									<h4>Adidas Superstar Black</h4>
									<p class="item-price"><strike>$149.00</strike> <b>$129.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/ultraboost-catalog.jpg" class="img-fluid" alt="iPhone">
								</div>
								<div class="thumb-content">
									<h4>Adidas Ultraboost 1.0</h4>
									<p class="item-price"><strike>$269.00</strike> <b>$239.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/zh-trefoil-catalog.jpg" class="img-fluid" alt="Canon">
								</div>
								<div class="thumb-content">
									<h4>Zipper Hoddie Trefoil Jacket</h4>
									<p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/stan-smith-catalog.jpg" class="img-fluid" alt="Pixel">
								</div>
								<div class="thumb-content">
									<h4>Adidas 'Stan Smith' Vegan</h4>
									<p class="item-price"><strike>$229.00</strike> <b>$189.00</b></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="../img/tees-catalog.jpg" class="img-fluid" alt="Watch">
								</div>
								<div class="thumb-content">
									<h4>Adidas X Atmos Crossvover</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
    </div>
</section>    
    
    <!-- About -->

    <section class="about py-5" id="about">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="../img/adidas-oulet-about.jpg"></div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <h2 class="text-center py-2" >Featured <b>About</b></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
        
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>