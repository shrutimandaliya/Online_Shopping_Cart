<div class="mini-contentCart" style="display: none">
									   <div class="block-content">
										  <p class="block-subtitle">Recently added item(s)</p>
										  @if(Session::has('pid')){{Session::get('pid')}}
										  <ol id="cart-sidebar" class="mini-products-list clearfix">
										  	{{-- @foreach($products as $product) --}}
										  {{-- @foreach(	$pid as $product) --}}
											 <li class="item clearfix">
												<div class="cart-content-top">
												   <a href="#" class="product-image"><img src="{{ url('resources/assets/images/defaultThumbnail/'.$product->thumbnail) }}" width="60" height="75" alt="Brown Arrows Cushion"></a>
												   <div class="product-details">
													  <p class="product-name"><a href="#">{{$product->product_name}}</a></p>
													  <span class="price">{{$product->product_price}}
													  </span>
												   </div>
												</div>
												<div class="cart-content-bottom">
												   <div class="clearfix"> <a href="#" title="Edit item" class="btn-edit"><i class="fa fa-pencil-square-o"></i></a> <a href="#" title="Remove" class="btn-remove btn-remove2"><i class="icon-close icons"></i></a></div>
												</div>
											 </li>
											 {{-- @endforeach --}}
											 @endif
											{{--  <li class="item clearfix">
												<div class="cart-content-top">
												   <a href="#" title="Peace Pot Broochea" class="product-image"><img src="http://placehold.it/60x75" width="60" height="75" alt="Peace Pot Broochea"></a>
												   <div class="product-details">
													  <p class="product-name"><a href="#">Peace Pot Broochea</a></p>
													  <strong>1</strong> x <span class="price">$229.00</span>
												   </div>
												</div>
												<div class="cart-content-bottom">
												   <div class="clearfix"> <a href="#" title="Edit item" class="btn-edit"><i class="fa fa-pencil-square-o"></i></a> <a href="#" title="Remove" class="btn-remove btn-remove2"><i class="icon-close icons"></i></a></div>
												</div>
											 </li>
											 <li class="item clearfix">
												<div class="cart-content-top">
												   <a href="#" title="Rocha Sleeve Sweater" class="product-image"><img src="http://placehold.it/60x75" width="60" height="75" alt="Rocha Sleeve Sweater"></a>
												   <div class="product-details">
													  <p class="product-name"><a href="#">Rocha Sleeve Sweater</a></p>
													  <strong>1</strong> x <span class="price">$229.00</span>
												   </div>
												</div>
												<div class="cart-content-bottom">
												   <div class="clearfix"> <a href="#" title="Edit item" class="btn-edit"><i class="fa fa-pencil-square-o"></i></a> <a href="#" title="Remove" class="btn-remove btn-remove2"><i class="icon-close icons"></i></a></div>
												</div>
											 </li> --}}
										  </ol>
										  <p class="subtotal"> <span class="label">Subtotal:</span> <span class="price">$687.00</span></p>
										  <div class="actions"> <a href="#" class="view-cart"> View cart </a> <a href="checkout-step1.html">Checkout</a></div>
									   </div>
									</div>
								</div>
							</div>