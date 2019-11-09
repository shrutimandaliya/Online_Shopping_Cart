@extends('layouts.user.app')
@section('content')

<div class="main-container col2-left-layout ">
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="#" title="Go to Home Page">Home</a></li>
				<li class="category4"> <strong>Laptop</strong></li>
			</ul>
		</div>
	</div><!--- .breadcrumbs-->
	<div class="container">
		<div class="main">
			<div class="row">
				<div class="col-left sidebar col-lg-3 col-md-3 left-color color">
					<div class="anav-container">
						<div class="block block-anav">
							
						
						</div><!--- .block-anav-->
					</div><!--- .anav-container-->
					<div class="block block-layered-nav block-layered-nav--no-filters">
						<div class="block-title"> <strong><span>Shop By</span></strong>
						</div>
						<div class="block-content toggle-content">
							<p class="block-subtitle block-subtitle--filter">Filter</p>
							<dl id="narrow-by-list">
								<dt class="even">By Price</dt>
								<dd class="even">
									<div class="slider-ui-wrap">
										<div id="price-range" class="slider-ui" slider-min="0" slider-max="50000" slider-min-start="0" slider-max-start="50000"></div>
									</div>
									{{-- <form action="#" class="price-range-form price"> --}}
										<div class="price-range-form price">
										<input type="text" class="range_value range_value_min min" slider-min="0" slider-min-start="0" {{-- target="#price-range" --}} value="0" id="minValue" name="minimum" /> -

										<input type="text" class="range_value range_value_max" slider-max="50000" slider-max-start="50000" value="50000" id="maxValue" name="maximum" {{-- target="#price-range" --}} />

										<input type="submit" class="btn-submit done" value="OK" />
										</div>
									{{-- </form>  --}}
								</dd>

								<dt class="odd">By Brands</dt>
								<dd class="odd">
								@foreach($categorys as $category)
									<ol class="configurable-swatch-list">
										<li class="level0 level-top"><a href="#" class="level-top">
											<input type="checkbox" name="category[]" value="{{$category->id}}" class="checked">
											{{-- <input type="text" name="id" id="catId" value="{{$category->id}}"> --}}
											<span>{{$category->category_name}}</span></a></li>
										
									</ol>
								@endforeach<br>
								</dd>

								<dt class="even">By Colors</dt>
								<dd class="even">
									@foreach($colors as $color )
									<ol class="configurable-swatch-list">
										<li style="" class="level0 level-top"> <a href="#" class="swatch-link has-image"> {{-- <span class="swatch-label"> --}} {{-- <img src="assets/images/black.png" alt="Black" title="Black" height="15" width="15"> --}}<input type="checkbox" name="color[]" value="{{$color->id}}" class="selectedColor">
										 <span>{{$color->color_name}}</span> </a>
										</li>
										 
									</ol>
									@endforeach
								</dd>
							
							</dl>
						</div>
					</div><!--- .block-layered-nav-->

					
					<div class="block block-list block-compare">
						<div class="block-title"> <strong><span>Compare Products </span></strong>
						</div>
						<div class="block-content">
							<p class="empty">You have no items to compare.</p>
						</div>
					</div><!--- .block-compare-->

				</div><!--- .sidebar-->

				<div class="col-main col-lg-9 col-md-9 content-color color">
					<div class="page-title category-title">
						<h1>LAPTOP</h1>
					</div>
					<p class="category-image"><img src="http://placehold.it/875x360" alt="Men" title="Men"></p>
					<div class="category-products">
						<div class="toolbar">
							<div class="sorter">
								<p class="view-mode"> <label>View as:</label> 
									<a title="Grid" class="redirectjs grid grid1" name="gridData"> 
										<i class="icon-grid icons"></i> </a> 

									<a title="List"  class="list  list1 active"  id="SRS" name="listData" value="list" > 
										<i class="icon-list icons" value="listData"></i> 
									</a>
								</p>
								<div class="sort-by pull-right" >
									<label>Sort By</label> 
									<select id="sort" name="sort">
										<option value="select" selected="selected" > Position</option>
										<option value="name"> Name</option>
										<option value="price" > Price</option>
									</select>
									<a href="#" title="Set Descending Direction"><img src="{{ url('/') }}/resources/views/layouts/user/assets/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle"></a>
								</div>
								{{-- <div class="limiter">
									<label>Show</label> 
									<select>
										<option value="9" selected="selected"> 9</option>
										<option value="12"> 12</option>
										<option value="15"> 15</option>
									</select>
								</div>
								<div class="pager">
									<div class="pages">
										<strong>Page:</strong>
										<ol>
											<li class="current">1</li>
											<li><a href="#">2</a></li>
											<li class="bor-none"> <a class="next i-next" href="#" title="Next"> <i class="fa fa-angle-right">&nbsp;</i> </a></li>
										</ol>
									</div>
								</div> --}}
							</div>
						</div><!--- .toolbar-->

						<div id="grid">
							@foreach($products as $product)
								<ol class="products-list" id="products-list">
									<li class="item odd">
										<div class="row">
											<div class="col-mobile-12 col-xs-5 col-md-4 col-sm-4 col-lg-4">
												<div class="products-list-container">
													<div class="images-container">
														<div class="product-hover">
															<span class="sticker top-left"><span class="labelnew">New</span></span> 
															<a href="#" title="" class="product-image">
																
																 
																	<img class="img-responsive" src="{{ url('resources/assets/images/defaultThumbnail/'.$product->thumbnail) }}" width="278" height="355" alt=""> 
															
															</a>
															<div class="product-hover-box">
																<a class="detail_links" href="#"></a>
																<div class="link-view"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>


											<div class="product-shop col-mobile-12 col-xs-7 col-md-8 col-sm-8 col-lg-8">
												<div class="f-fix">

													<div class="product-primary products-textlink clearfix">

														<h2 class="product-name"><a href="{{ url('productDetails/'.$product['id']) }}" title="Configurable Product">{{$product->product_name}}</a></h2>
														 

														

														<h4 class="ram"> <label>Ram:&nbsp;
														 </label>{{$product->ram}}</h4>

														 <h4 class="ram"> <label>Processor:&nbsp;
														 </label>{{$product->processor}}</h4>

														 <h4 class="ram"> <label>Battery:&nbsp;
														 </label>{{$product->battery}}</h4>

														 <h4 class="price"> <label>Price:&nbsp;
														 </label>{{$product->product_price}}</h4>

														 <h4 class="discription"> <label>Description:&nbsp;
														 </label>{{$product->product_description}}</h4>

														<form action="{{ url('addToCart') }}" method="post" >
															{{ csrf_field() }}
															
														 <div class="product-secondary actions-no actions-list clearfix">
															<p class="action"><button type="button" title="Add to Cart" id="add" value="{{ $product->id }}" class="button btn-cart pull-left proId" ><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button></p>
															<ul class="add-to-links">
																<li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
																
															</ul>
														 </div>
													    </form>

														
									</li><!--- .item-->
									
								</ol><!--- .products-list-->
								@endforeach
							</div>

								
								<div class="page-nav-bottom">
									<div class="left">Items 13 to 24 of 38 total</div>
									<div class="right">
										<ul class="page-nav-category">
											<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a class="selected" href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div><!--- .page-nav-bottom-->
					</div><!--- .category-products-->
				</div><!--- .col-main-->
			</div><!--- .row-->
		</div><!--- .main-->
	</div><!--- .container-->
	<div class="block-static block_bottom">
				<div class="container">
					<div class="main">
						<div class="row">
							<div class="bottom">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class= "magicproduct_bottom magicproduct mage-custom">
										<div class="block-title-tabs">
											<ul class="magictabs">
												<li class="item active loaded single" data-type ="mostviewed">
													<span class ="title">Most Viewed</span>
												</li>
											</ul>
										</div>
										<div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
											<div class="mage-magictabs mc-mostviewed">
												<ul class="flexisel-content products-grid mostviewed zoomOut play">
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover">
																	<a href="#" title="Configurable Product" class="product-image">
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Configurable Product" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name"> 
																	<a href="#" title="Configurable Product">Configurable Product</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:80%"></div>
																	</div> 
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box"> 
																	<p class="regular-price" >
																		<span class="price">$180.00</span> 
																	</p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover">
																	<a href="#" title="Product Color" class="product-image"> 
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Product Color" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name">
																	<a href="#" title="Product Color">Product Color</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:80%"></div>
																	</div> 
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box">
																	<p class="old-price"> 
																		<span class="price-label">Regular Price:</span>
																		<span class="price"> $220.00 </span>
																	</p>
																	<p class="special-price">
																		<span class="price-label">Special Price</span> 
																		<span class="price"> $180.00 </span>
																	</p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover">
																	<a href="#" title="Clemence Blouse" class="product-image"> 
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Clemence Blouse" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name"> 
																	<a href="#" title="Clemence Blouse">Clemence Blouse</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:60%"></div>
																	</div> 
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box"> 
																	<p class="regular-price" >
																		<span class="price">$229.00</span> 
																	</p>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div><!-- .magicproduct_bottom -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class= "magicproduct_bottom magicproduct mage-custom">
										<div class="block-title-tabs">
											<ul class="magictabs">
												<li class="item active loaded single" data-type ="bestseller"><span class ="title">Bestseller</span></li>
											</ul>
										</div>
										<div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
											<div class="mage-magictabs mc-bestseller">
												<ul class="flexisel-content products-grid bestseller zoomOut play">
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover"> 
																	<a href="#" title="Short Sleeve Dress" class="product-image">
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Short Sleeve Dress" /> 
																	</a>
																</div>
																<div class="actions-no hover-box">
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name">
																	<a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:60%"></div>
																	</div> 
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box">
																	<p class="old-price">
																		<span class="price-label">Regular Price:</span> 
																		<span class="price"> $229.00 </span>
																	</p>
																	<p class="special-price">
																		<span class="price-label">Special Price</span>
																		<span class="price"> $200.00 </span>
																	</p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover"> 
																	<a href="#" title="Super Skinny in Tiger Camo" class="product-image"> 
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Super Skinny in Tiger Camo" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">	
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name"> 
																	<a href="#" title="Super Skinny in Tiger Camo">Super Skinny in Tiger Camo</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:40%"></div>
																	</div>
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box"> 
																	<p class="regular-price" >
																		<span class="price">$229.00</span> 
																	</p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover"> 
																	<a href="#" title="Mauris tincidunt" class="product-image">	
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Mauris tincidunt" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">	
																<h2 class="product-name"> <a href="#" title="Mauris tincidunt">Mauris tincidunt</a></h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:40%"></div>
																	</div>
																	<span class="amount"><a href="#">1 Review(s)</a></span>
																</div>
																<div class="price-box"> 
																	<p class="regular-price" > <span class="price">$389.00</span> </p>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class= "magicproduct_lastest_product magicproduct mage-custom">
										<div class="block-title-tabs">
											<ul class="magictabs">
												<li class="item active loaded single" data-type ="latest">
													<span class ="title">Latest Products</span>
												</li>
											</ul>
										</div>
										<div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
											<div class="mage-magictabs mc-latest">
												<ul class="flexisel-content products-grid latest zoomOut play">
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover"> 
																	<a href="#" title="fermentum suscipit." class="product-image"> 
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="fermentum suscipit." /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name">
																	<a href="#" title="fermentum suscipit.">fermentum suscipit.</a>
																</h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:60%"></div>
																	</div> 
																	<span class="amount">
																		<a href="#">1 Review(s)</a>
																	</span>
																</div>
																<div class="price-box">
																	<p class="regular-price" > 
																		<span class="price">$345.00</span>
																	</p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover">
																	<a href="#" title="Cras sed rutrum" class="product-image">
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Cras sed rutrum" />
																	</a>
																</div>
																<div class="actions-no hover-box">
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
																<h2 class="product-name">
																	<a href="#" title="Cras sed rutrum">Cras sed rutrum</a>
																</h2>
																<div class="price-box">
																	<p class="regular-price" > <span class="price">$489.00</span> </p>
																</div>
															</div>
														</div>
													</li>
													<li class="item item-animate">
														<div class="per-product clearfix">
															<div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
																<div class="product-hover"> 
																	<a href="#" title="Mauris tincidunt" class="product-image">	
																		<img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Mauris tincidunt" /> 
																	</a>
																</div>
																<div class="actions-no hover-box"> 
																	<a class="detail_links" href="#"></a>
																	<div class="actions">
																		<ul class="add-to-links"></ul>
																	</div>
																</div>
															</div>
															<div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">	
																<h2 class="product-name"> <a href="#" title="Mauris tincidunt">Mauris tincidunt</a></h2>
																<div class="ratings">
																	<div class="rating-box">
																		<div class="rating" style="width:40%"></div>
																	</div>
																	<span class="amount"><a href="#">1 Review(s)</a></span>
																</div>
																<div class="price-box"> 
																	<p class="regular-price" > <span class="price">$389.00</span> </p>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div> <!-- .magicproduct_lastest_news -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .block_bottom -->
			
			<div class="alo-brands">
				<div class="container">
					<div class="main">
						<div class="row">
							<div class="col-lg-12">
								<div id="footer-brand">
									<ul class="magicbrand">
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_01" title="brands_01" /> </a></li>
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_02" title="brands_02" /> </a></li>
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_03" title="brands_03" /> </a></li>
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_04" title="brands_04" /> </a></li>
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_05" title="brands_05" /> </a></li>
										<li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_06" title="brands_06" /> </a></li>
									</ul>
								</div><!-- #footer-brand -->									
							</div>
						</div>
					</div>
				</div><!-- .container-->
			</div><!-- .alo-brands -->	
</div><!---.main-container -->


@endsection

@section('scripts')
<script type="text/javascript">

$(document).ready(function()
	{
	//grid View
	$(document).on('click','.grid1',function()
	{
		var id = [];
		$(".checked:checked").each(function(){
			id.push($(this).val());
		});            
		var selected;
		selected = id.join(',');
        // if(selected.length>0)
        // {
        // 	alert('you have selected'+selected);
        // }
        // else
        // {
        // 	alert('select atleast one');
        // }

        $( '.list1' ).removeClass( 'active' );
        $( this ).addClass( 'active' );

        var sortType = $('#sort').val();
        var active = $(this).attr('name');
        // alert(active);
        	
        // color checkbox
        var colorId = [];
        $(".selectedColor:checked").each(function(){

        	colorId.push($(this).val());
        });            
        var selectedColor;
        selectedColor = colorId.join(',');
        	// alert(selectedColor);

        	//price
			var min = $('#minValue').val();
			// alert(min);
			var max = $('#maxValue').val();   

       	$.ajax({
       		type : "GET",
       		dataType : "html",
       		url : "{{ url('/') }}/gridView/"+active,
       		data : {active,sortType,selected,selectedColor,min,max}, 
       		success : function(response)
       		{
       			console.log('success');

       			$('#grid').html(response);
       		}
       	});

    });

	//list view
       	
	$(document).on('click','.list1',function()
	{
		var id = [];
		$(".checked:checked").each(function(){
			id.push($(this).val());
		});            
		var selected;
		selected = id.join(',');

		$( '.grid1' ).removeClass( 'active' );
		$( this ).addClass( 'active' );

       	// alert('ok');
       	var sortType = $('#sort').val();
       	var active = $(this).attr('name');
       	// alert(active);
			
		// color checkbox
		var colorId = [];
		$(".selectedColor:checked").each(function(){
			colorId.push($(this).val());
		});            
		var selectedColor;
		selectedColor = colorId.join(',');
        // alert(selectedColor);

        //price
			var min = $('#minValue').val();
			// alert(min);
			var max = $('#maxValue').val();   

        $.ajax({
        	type : "GET",
        	dataType : "html",
        	url : "{{ url('/') }}/listView/"+active,
        	data : {active,sortType,selected,selectedColor,min,max}, 
        	success : function(response)
        	{
        		console.log('success');

        		$('#grid').html(response);
        	}
        });
    });

	// Sort By name and Price
	$(document).on('change','#sort',function()
	{
		var active = $('.active').attr('name');
		var id = [];

		$(".checked:checked").each(function(){

			id.push($(this).val());
		});            
		var selected;
		selected = id.join(',');

		var sortType = $('#sort').val();
	 	// alert(sortType);

       	// color checkbox
       	var colorId = [];
       	$(".selectedColor:checked").each(function(){
       		colorId.push($(this).val());
       	});            
       	var selectedColor;
       	selectedColor = colorId.join(',');
        // alert(selectedColor);

        //price
			var min = $('#minValue').val();
			// alert(min);
			var max = $('#maxValue').val();   

        $.ajax({
        	type : "GET",
        	dataType : "html",
        	url : "{{ url('/') }}/sort/"+sortType,
        	data : {sortType,active,selected,selectedColor,min,max}, 
        	success : function(response)
        	{
        		console.log('success');

        		$('#grid').html(response);
        	}
        });
    });

	//By Brand or Categorys
	$(document).on('change','.checked',function()
	{
    	var active = $('.active').attr('name');		//alert grid or list
       	// alert(active);
       	var sortType = $('#sort').val();
        	// alert(x);

        //category
        var id = [];

        $(".checked:checked").each(function(){

        	id.push($(this).val());
        });            
        var selected;
        selected = id.join(',');
        	// alert(selected);

       	// color checkbox
       	var colorId = [];
       	$(".selectedColor:checked").each(function(){
       		
       		colorId.push($(this).val());
       	});            
       	var selectedColor;
       	selectedColor = colorId.join(',');
        	// alert(selectedColor);
        	
        	//price
			var min = $('#minValue').val();
			// alert(min);
			var max = $('#maxValue').val();   
        // if(selected.length>0)
        // {
        // 	alert('you have selected'+selected);
        // }
        // else{
        // 	alert('select atleast one');
        // }
        	
        		$.ajax({
        		type : "GET",
                dataType : "html",
                url : "{{ url('/') }}/checked/",
                data : {selected,sortType,active,selectedColor,min,max}, 
                success : function(response)
                {
                    console.log('success');

                    $('#grid').html(response);
                }
            	});
        
        	
           

        });

//By Color Checkbox
        $(document).on('change','.selectedColor',function()
        {
        	var active = $('.active').attr('name');		//alert grid or list
        	// alert(active);
        	var sortType = $('#sort').val();
        	// alert(x);

        	// category checkbox
        	var id = [];
        	$(".checked:checked").each(function(){

        		id.push($(this).val());
        	});            
        	var selected;
        	selected = id.join(',');

        	//color checkbox
        	var colorId = [];
        	$(".selectedColor:checked").each(function(){

        		colorId.push($(this).val());
        	});            
        	var selectedColor;
        	selectedColor = colorId.join(',');
        	// alert(selectedColor);

        	//price
			var min = $('#minValue').val();
			// alert(min);
			var max = $('#maxValue').val();   
        // if(selectedColor.length>0)
        // {
        // 	alert('you have selected'+selectedColor);
        // }
        // else{
        // 	alert('select atleast one');
        // }
        	

        	$.ajax({
        		type : "GET",
                dataType : "html",
                url : "{{ url('/') }}/checkedColor",
                data : {selected,sortType,active,selectedColor,min,max}, 
                success : function(response)
                {
                    console.log('success');

                    $('#grid').html(response);
                }
            });
        
           

        });
        $(document).on('click','.done',function()
        {
        	var active = $('.active').attr('name');		//alert grid or list
        	// alert(active);
        	var sortType = $('#sort').val();
        	// alert(x);

        	// category checkbox
        	var id = [];
        	$(".checked:checked").each(function(){

        		id.push($(this).val());
        	});            
        	var selected;
        	selected = id.join(',');

        	//color checkbox
        	var colorId = [];
        	$(".selectedColor:checked").each(function(){

        		colorId.push($(this).val());
        	});            
        	var selectedColor;
        	selectedColor = colorId.join(',');
        	// alert(selectedColor);

        // if(selectedColor.length>0)
        // {
        // 	alert('you have selected'+selectedColor);
        // }
        // else{
        // 	alert('select atleast one');
        // }
        	
        	//price
			var min = $('#minValue').val();
			// min.push(this.value);
			// alert(min);
			var max = $('#maxValue').val();       	
			// max.push(this.value);
			// alert(max);
        	
        	$.ajax({
        		type : "GET",
                dataType : "html",
                url : "{{ url('/') }}/price/"+min+"/"+max,
                data : {selected,sortType,active,selectedColor,min,max}, 
                success : function(response)
                {
                    console.log('success');

                    $('#grid').html(response);
                }
            });
        
           

        });

	//Add To Cart
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $(document).on('click','#add',function()
        {
            var id = $(this).val();
            // alert(product_id);
            // var url = "/ajaxadd";



            $.ajax({

            type: "GET",
            url: "{{ url('/') }}/addToCart/"+id,
            dataType: "html",
            data: {id },
            success: function (response) {
            console.log('success');
            window.location.reload();
            $('#cart').html(response);
       		 }
            // },
            // error: function (response) {
            // console.log('Error:', error);
            // }
            });
        });
});
                  

</script>

@endsection
 