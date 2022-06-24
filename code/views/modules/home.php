<?php include"views/modules/modals.php"; ?>
<?php include"views/modules/header.php"; ?>
	
			<section class="home-slider position-relative mb-30">
				<div class="container">
					<div class="home-slide-cover mt-30">
						<div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
							<div class="single-hero-slider single-animation-wrap" style="background-image: url(views/assets/imgs/slider/slider-1.png)">
								<div class="slider-content">
									<h1 class="display-2 mb-40">
										No te pierdas lo increíble<br />
										ofertas de fragancias
									</h1>
									<form class="form-subcriber d-flex">
										<input type="email" placeholder="Su dirección de correo electrónico" />
										<button class="btn" type="submit">Suscribir</button>
									</form>
								</div>
							</div>
							<div class="single-hero-slider single-animation-wrap" style="background-image: url(views/assets/imgs/slider/slider-2.png)">
								<div class="slider-content">
									<h1 class="display-2 mb-40">
										Una fragancia con olor<br />
										de ternura
									</h1>
									<p class="mb-65">promociones en fechas únicas</p>
									<form class="form-subcriber d-flex">
										<input type="email" placeholder="Su dirección de correo electrónico" />
										<button class="btn" type="submit">Suscribir</button>
									</form>
								</div>
							</div>
						</div>
						<div class="slider-arrow hero-slider-1-arrow"></div>
					</div>
				</div>
			</section>
			<!--End hero slider-->
			<section class="popular-categories section-padding">
				<div class="container wow animate__animated animate__fadeIn">
					<div class="section-title">
						<div class="title">
							<h3>Categorías Destacadas</h3>
						</div>
						<div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
					</div>
					<div class="carausel-10-columns-cover position-relative">
						<div class="carausel-10-columns" id="carausel-10-columns">
							<div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
								<figure class="img-hover-scale overflow-hidden">
									<a href="#"><img src="views/assets/imgs/theme/icons/vs.png" alt="" /></a>
								</figure>
								<h6><a href="#">VICTORIA SECRET</a></h6>
								<span>40 elementos</span>
							</div>
							<div class="card-2 bg-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
								<figure class="img-hover-scale overflow-hidden">
									<a href="#"><img src="views/assets/imgs/theme/icons/st.jpeg" alt="" /></a>
								</figure>
								<h6><a href="#">STREET LOOKS</a></h6>
								<span>25 elementos</span>
							</div>
							<div class="card-2 bg-11 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
								<figure class="img-hover-scale overflow-hidden">
									<a href="#"><img src="views/assets/imgs/theme/icons/charm.jpeg" alt="" /></a>
								</figure>
								<h6><a href="#">CHARM</a></h6>
								<span>1 elementos</span>
							</div>
							<div class="card-2 bg-12 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
								<figure class="img-hover-scale overflow-hidden">
									<a href="#"><img src="views/assets/imgs/theme/icons/m.jfif" alt="" /></a>
								</figure>
								<h6><a href="#">MIRAGE</a></h6>
								<span>7 elementos</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--End banners-->
			<section class="product-tabs section-padding position-relative">
				<div class="container">
					<div class="section-title style-2 wow animate__animated animate__fadeIn">
						<h3>productos populares</h3>
						<ul class="nav nav-tabs links" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Todos</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">VICTORIA SECRET</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">STREET LOOKS</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">CHARM</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">MIRAGE</button>
							</li>
						</ul>
					</div>
					<!--End nav-tabs-->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
							<div class="row product-grid-4">
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr13.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr13.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VIcTORIA SECRET</a>
											</div>
											<h2><a href="#">PETAL EDGE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">FOR MEN</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 100%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (5)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar </a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">Nueva</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">FORM MEN (TERRIFIC)</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 85%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr38.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr38.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">Nueva</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">Sandora</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr36.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr36.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">Nueva</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">Bella Rosa</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar </a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".1s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr41.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr41.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">BODY GUARD</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".2s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr35.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr35.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">MISCHIEF</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".3s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr34.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr34.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street looks</a>
											</div>
											<h2><a href="#">BLACK TONIC</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".4s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr40.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr40.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">BIG OCEAN</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">30 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
									<div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".5s">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr44.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr44.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">CONCEPT II</a>
											</div>
											<h2><a href="#">Pack de Locion Y Crema Hidratante</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 80%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>PACK Bs 60</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab one-->
						<div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
							<div class="row product-grid-4">
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr10.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr10.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">KISS ME IN THE OCEAN</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr10.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr10.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">Pure Seduction</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 80%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (3.5)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr8.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr8.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">New</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VISCTORIA SECRET</a>
											</div>
											<h2><a href="#">SPRING POPPIES</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 85%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr8.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr8.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">TROPIC RAIN</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr7.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr7.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="best">-20%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VISCTORIA SECRET</a>
											</div>
											<h2><a href="#">AMBER ROMANCE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
													<span class="old-price">Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr7.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr7.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">PUNK BLOOMS</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr17.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr17.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">Cremas Hidratantes</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">236 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>C/U Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr15.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr15.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">Cremas Hidratantes</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">236 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>C/U Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr2.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr2.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">Lociones Dulces</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">250 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 65</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr1.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr1.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">VICTORIA SECRET</a>
											</div>
											<h2><a href="#">Lociones Dulces</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 100%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (5.0)</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 65</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab two-->
						<div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
							<div class="row product-grid-4">
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr16.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr16.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">Amour</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5">Agregar</i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr21.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr21.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">PLUS CLASSE ENCORE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 80%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (3.5)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5">Agregar</i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr19.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr19.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">Nuevo</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">TRENDY BOY</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 85%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr20.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr20.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">UPTOWN LADY</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr25.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr25.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="best">-20%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">Sweetie</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 40</span>
													<span class="old-price">Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr23.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr23.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">GRANDE CLASSE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr22.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr22.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">MISS IMPORT ROSE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr30.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr30.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">PURE COURAGE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr29.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr29.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">MISTER <b>IMPORTANT</b></a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr31.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr31.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Street Looks</a>
											</div>
											<h2><a href="#">BLUE AND BrnE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 50%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (2.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab three-->
						<div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
							<div class="row product-grid-4">
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr32.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr32.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">CHARM</a>
											</div>
											<h2><a href="#">CHARM</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 80</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr44.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr44.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">CONCEPT II</a>
											</div>
											<h2><a href="#">CONCEPT II</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>PACK Bs 60</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab four-->
						<div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
							<div class="row product-grid-4">
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Caliente</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">FOR MEN</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr5.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Venta</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">FOR MEN <b>Terrific</b></a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 80%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (3.5)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5">Agregar</i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr4.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr4.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">Nuevo</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">COUTURE</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 95%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.5)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>C/U Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
								<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="#">
													<img class="default-img" src="views/assets/imgs/shop/pr3.jpeg" alt="" />
													<img class="hover-img" src="views/assets/imgs/shop/pr3.jpeg" alt="" />
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Añadir a la lista de deseos" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">MIRAGE</a>
											</div>
											<h2><a href="#">G FOR WOMEN SEXY</a></h2>
											<div class="product-rate-cover">
												<div class="product-rate d-inline-block">
													<div class="product-rating" style="width: 90%"></div>
												</div>
												<span class="font-small ml-5 text-muted"> (4.0)</span>
											</div>
											<div>
												<span class="font-small text-muted">100 ml</span>
											</div>
											<div class="product-card-bottom">
												<div class="product-price">
													<span>C/U Bs 50</span>
												</div>
												<div class="add-cart">
													<a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end product card-->
							</div>
							<!--End product-grid-4-->
						</div>
					</div>
					<!--End tab-content-->
				</div>
			</section>
			<!--End Best Sales-->
	
<?php include"views/modules/footer.php"; ?>
