<!-- BEGIN: Content-->
<div class="">
	<div class="content-header row">
		<div class="content-header-dark bg-img col-12">
			<div class="row">
				<div class="content-header-left col-md-9 col-12 mb-2">
					<h3 class="content-header-title white">Shops</h3>
					<div class="row breadcrumbs-top">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">Home</a>
								</li>
								<li class="breadcrumb-item active">Shop
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content-header-right col-md-3 col-12">
					<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
						<button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1"
							id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Action</button>
						<div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
								class="dropdown-item" href="material-component-cards.html"> Cards</a><a
								class="dropdown-item" href="component-progress.html"> Progress</a>
							<div class="dropdown-divider"></div><a class="dropdown-item"
								href="register-with-bg-image.html"> Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-detached content-right">
			<div class="content-body">
				<div class="product-shop">
					<div class="card">
						<div class="card-body">
							<span class="shop-title">Products</span>
							<span class="float-right">
								<span class="result-text mr-1"> Showing 12 of 203 results</span>
								<span class="display-buttons">
									<a href="#" class="active"><i class="fas fa-grip-vertical"></i></a>
									<a href="#"><i class="fas fa-list font-medium-2"></i></a>
								</span>
							</span>
						</div>
					</div>

					<!-- div start-->
					<div class="row match-height">
						<?php
						if ($product_data->rowCount() > 0) {
							foreach ($product_data as $row) {
								// (int)$amount
								?>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
									<div class="card pull-up">
										<div class="card-content">
											<div class="card-body">
												<a href="?p=product-details&ID=<?= $row['ID'] ?>">
													<div class="product-img d-flex align-items-center">
														<div class="badge badge-success round"><?= $row['exclusive']; ?></div>
														<img class="img-fluid mb-1" src="pages/shop/images/<?= $row["img"]; ?>"
															alt="Card image cap">

													</div>
													<h4 class="product-title">
														<?= $row['title']; ?>
													</h4>
													<div class="price-reviews">
														<span class="price-box">
															<span class="price">
																<?= $row['price']; ?>
															</span>
															<span class="old-price">
																<?= $row['price-splash']; ?>
															</span>
														</span>
														<span class="ratings float-right"></span>
													</div>
												</a>
												<form action="" id="foo">
															<?php  
															$add_cart['input_data']['productID'] = $row['ID'];
															$add_cart['input_data']['no_product'] = $s->get_no_of_product_in_cart($adminID, $row['ID']);
															echo $c->create_form($add_cart); ?>
															<input type="hidden" name="add_to_cart" value="">
															<input type="hidden" name="page" value="shop">
															<div class="product-action d-flex justify-content-around">
																<a href="" data-toggle="tooltip" data-placement="top"
																title="Add To Wishlist"><i class="fas fa-heart"></i></a><span
																class="saperator">|</span>
																<a href="#view" data-toggle="tooltip" data-placement="top"
																title="Quick View"><i class="fas fa-eye"></i></a><span
																class="saperator">|</span>
																<a href="#compare" data-toggle="tooltip" data-placement="top"
																title="Compare"><i class="fas fa-sliders-h"></i></a><span
																class="saperator">|</span>
																<div id="custommessage"></div>
																<button type="submit" data-toggle="tooltip" data-placement="top" id="addToWishlist"
																title="Add To Cart"><i class="fas fa-shopping-cart"></i></button>
																
															</div>
														</form>	
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						} else {
							  echo "No data found"; 
						}
						?>

						<div class="col-12">
							<div class="card">
								<div class="card-content">
									<ul class="pagination justify-content-center pagination-separate pagination-flat">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
												<span class="sr-only">Previous</span>
											</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
												<span class="sr-only">Next</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- div end -->


				</div>
			</div>
		</div>
		<div class="sidebar-detached sidebar-left">
			<div class="sidebar">
				<div class="sidebar-content d-none d-lg-block sidebar-shop">
					<div class="card">
						<div class="card-body">
							<div class="search"> 
								<input type="text" class="basic-search" oninput="search(this.value, 'showresult')" placeholder="Search here...">
								<div id="showresult"></div>
								<i class="fas fa-search"></i>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="categories-list">
								<div class="category-title pb-1">
									<h4 class="card-title mb-0">Categories</h4>
									<hr>
								</div>
								<div class="product-cat" id="categories">
									<ul class="treeview">
										<li><span>Watches</span>
											<ul>
												<li><span>Apple Watch</span></li>
												<li><span>Fitbit</span></li>
											</ul>
										</li>
										<li><span>Tablets</span>
											<ul>
												<li><span>iPad</span></li>
												<li><span>iPad Pro</span></li>
											</ul>
										</li>
										<li class="open"><span>Laptops</span>
											<ul>
												<li class="active"><span>Mac</span></li>
												<li><span>Mac Pro</span></li>
											</ul>
										</li>
										<li><span>Phone</span>
											<ul>
												<li><span>iPhone 9</span></li>
												<li><span>iPhone X</span></li>
												<li><span>iPhone Pro</span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Categories List -->

							<!-- /Price Range -->
							<div class="price-range">
								<div class="category-title mt-3 pb-1">
									<h4 class="card-title mb-0">Price</h4>
									<hr>
								</div>
								<div class="price-slider">
									<div class="price_slider_amount mb-2">
										<div class="range-amt"><strong>Price Range : </strong> <span class="range-val"
												id="lower-value"></span>
											- <span class="range-val" id="upper-value"></span></div>
									</div>
									<div class="form-group">
										<div class="slider-sm slider-success my-1" id="small-slider"></div>
									</div>
								</div>
							</div>
							<!-- /Price Range -->


							<!-- Striped Progress sample -->
							<div class="size">
								<div class="category-title mt-3 pb-1">
									<h4 class="card-title mb-0">Size</h4>
									<hr>
								</div>
								<div class="size-filter">
									<ul>
										<li><a href="#">XL</a></li>
										<li><a href="#">L</a></li>
										<li class="active"><a href="#">M</a></li>
										<li><a href="#">S</a></li>
										<li><a href="#">XS</a></li>
									</ul>
								</div>
							</div>
							<!-- /Striped Progress sample -->

							<!-- Color Options -->
							<div class="color-filter">
								<div class="category-title mt-3 pb-1">
									<h4 class="card-title mb-0">Color</h4>
									<hr>
								</div>
								<div class="sidebar-list">
									<ul class="skin-square skin">
										<li>
											<input type="checkbox" class="white" id="color-white">
											<label for="color-white">
												<a href="#">
													<span class="color-info white"></span>
													White <span class="count">(4)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="black" id="color-black">
											<label for="color-black">
												<a href="#">
													<span class="color-info black"></span>
													Black <span class="count">(5)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="amber" id="color-amber">
											<label for="color-amber">
												<a href="#">
													<span class="color-info amber"></span>
													Amber <span class="count">(6)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="blue" id="color-blue">
											<label for="color-blue">
												<a href="#">
													<span class="color-info blue"></span>
													Blue <span class="count">(3)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="success" id="color-success">
											<label for="color-success">
												<a href="#">
													<span class="color-info success"></span>
													Green <span class="count">(1)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="pink" id="color-pink">
											<label for="color-pink">
												<a href="#">
													<span class="color-info pink"></span>
													Pink <span class="count">(2)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="yellow" id="color-yellow">
											<label for="color-yellow">
												<a href="#">
													<span class="color-info yellow"></span>
													Yellow <span class="count">(5)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="teal" id="color-teal">
											<label for="color-teal">
												<a href="#">
													<span class="color-info teal"></span>
													Teal <span class="count">(3)</span>
												</a>
											</label>
										</li>
										<li>
											<input type="checkbox" class="red" id="color-red">
											<label for="color-red">
												<a href="#">
													<span class="color-info red"></span>
													Red <span class="count">(3)</span>
												</a>
											</label>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Color Options -->

							<!-- Brands -->
							<div class="brands">
								<div class="category-title mt-3 pb-1">
									<h4 class="card-title mb-0">Brands</h4>
									<hr>
								</div>
								<div class="search-box">
									<input id="brandInput" type="text" placeholder="Search Brand"
										class="product-search">
									<i class="ficon ft-search"></i>
								</div>
								<div class="sidebar-list" id="brands">
									<ul class="skin-square skin">
										<li><input type="checkbox" class="apple" id="apple"><label for="apple"> <a
													href="#">Apple <span class="count">(4)</span></a></label></li>
										<li><input type="checkbox" class="lenovo" id="lenovo"><label for="lenovo"> <a
													href="#"> Lenovo
													<span class="count">(5)</span></a></label></li>
										<li><input type="checkbox" class="fitbit" id="fitbit"><label for="fitbit"><a
													href="#"> Fitbit
													<span class="count">(6)</span></a></label></li>
										<li><input type="checkbox" class="samsung" id="samsung"><label for="samsung"><a
													href="#">
													Samsung <span class="count">(3)</span></a></label></li>
										<li><input type="checkbox" class="garmin" id="garmin"><label for="garmin"><a
													href="#"> Garmin
													<span class="count">(7)</span></a></label></li>
										<li><input type="checkbox" class="fossil" id="fossil"><label for="fossil"><a
													href="#"> Fossil
													<span class="count">(8)</span></a></label></li>
										<li><input type="checkbox" class="sony" id="sony"><label for="sony"><a href="#">
													Sony <span class="count">(5)</span></a></label></li>
										<li><input type="checkbox" class="htc" id="htc"><label for="htc"><a href="#">
													HTC <span class="count">(10)</span></a></label></li>
										<li><input type="checkbox" class="microsft" id="microsft"><label
												for="microsft"><a href="#">
													Microsft <span class="count">(11)</span></a></label></li>
										<li><input type="checkbox" class="google" id="google"><label for="google"><a
													href="#"> Google
													<span class="count">(9)</span></a></label></li>
										<li><input type="checkbox" class="xaomi" id="xaomi"><label for="xaomi"><a
													href="#"> Xaomi <span class="count">(8)</span></a></label></li>
									</ul>
								</div>
							</div>
							<!-- /Brand -->

							<!-- Featured Image -->
							<div class="featured">
								<div class="category-title mt-3 pb-1">
									<h4 class="card-title mb-0">Featured</h4>
									<hr>
								</div>
								<div class="featured-image bg-success bg-lighten-2">
									<a href="?p=product-details">
										<div class="badge badge-danger">Best Deal</div>
										<img src="./app-assets/images/elements/samsung-gear.png" alt="">
									</a>
								</div>
							</div>
							<!-- /Featured Image -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END: Content-->