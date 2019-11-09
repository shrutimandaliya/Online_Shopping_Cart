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
														 <div class="product-secondary actions-no actions-list clearfix">
															<p class="action"><button type="button" title="Add to Cart" class="button btn-cart pull-left" ><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button></p>
															<ul class="add-to-links">
																<li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
																
															</ul>
														</div>
														
									</li><!--- .item-->
									
								</ol><!--- .products-list-->
								@endforeach