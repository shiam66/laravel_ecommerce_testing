@extends('frontEnd.master')

@section('title')
    This Is Category
@endsection

@section('mainContent')

    <div class="page-head">
        <div class="container">
            <h3>Men's Wear</h3>
        </div>
    </div>
    <div class="men-wear">
	<div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>Filter By Price</h3>
                <ul class="dropdown-menu6">
                    <li>
                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 11.1111%; width: 66.6667%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 11.1111%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77.7778%;"></a></div>
                        <input id="amount" style="border: 0; color: #ffffff; font-weight: normal;" type="text">
                    </li>
                </ul>
                <!---->
                <script type="text/javascript">//<![CDATA[
                    $(window).load(function(){
                     $( "#slider-range" ).slider({
                        range: true,
                        min: 0,
                        max: 9000,
                        values: [ 1000, 7000 ],
                        slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                        }
                     });
                    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                    });//]]>

                </script>
                <script type="text/javascript" src="{{asset('public/frontEnd/js/jquery-ui.js')}}"></script>
                <!---->
            </div>
			<div class="css-treeview">
                <h4>Categories</h4>
                <ul class="tree-list-pad">
                    <li><input checked="checked" id="item-0" type="checkbox"><label for="item-0"><span></span>Men's Wear</label>
                        <ul>
                            <li><input id="item-0-0" type="checkbox"><label for="item-0-0">Ethinic Wear</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Caps</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                    <li><a href="mens.html">Trousers</a></li>
                                </ul>
                            </li>
                            <li><input id="item-0-1" type="checkbox"><label for="item-0-1">Party Wear</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Caps</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                    <li><a href="mens.html">Trousers</a></li>
                                </ul>
                            </li>
                            <li><input id="item-0-2" type="checkbox"><label for="item-0-2">Casual Wear</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Caps</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                    <li><a href="mens.html">Trousers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><input id="item-1" checked="checked" type="checkbox"><label for="item-1">Best Collections</label>
                        <ul>
                            <li><input checked="checked" id="item-1-0" type="checkbox"><label for="item-1-0">New Arrivals</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><input checked="checked" id="item-2" type="checkbox"><label for="item-2">Best Offers</label>
                        <ul>
                            <li><input id="item-2-0" type="checkbox"><label for="item-2-0">Summer Discount Sales</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                </ul>
                            </li>
                            <li><input id="item-2-1" type="checkbox"><label for="item-2-1">Exciting Offers</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                </ul>
                            </li>
                            <li><input id="item-2-2" type="checkbox"><label for="item-2-2">Flat Discounts</label>
                                <ul>
                                    <li><a href="mens.html">Shirts</a></li>
                                    <li><a href="mens.html">Shoes</a></li>
                                    <li><a href="mens.html">Pants</a></li>
                                    <li><a href="mens.html">SunGlasses</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
			</div>
			<div class="community-poll">
                <h4>Community Poll</h4>
                <div class="swit form">
                    <form>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" checked="" type="radio"><i></i>More convenient for shipping and delivery</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Lower Price</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Track your item</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Bigger Choice</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>More colors to choose</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Secured Payment</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Money back guaranteed</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Others</label> </div></div>
                        <input value="SEND" type="submit">
                    </form>
                </div>
			</div>
			<div class="clearfix"></div>
        </div>

		<div class="col-md-8 products-right">
			<h5>Product Compare(0)</h5>
			<div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Default</option>
                        <option value="null">Name(A - Z)</option>
                        <option value="null">Name(Z - A)</option>
                        <option value="null">Price(High - Low)</option>
                        <option value="null">Price(Low - High)</option>
                        <option value="null">Model(A - Z)</option>
                        <option value="null">Model(Z - A)</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option>
                        <option value="null">28</option>
                        <option value="null">35</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
			</div>

			<div class="men-wear-top">
                <script type="text/javascript" src="{{asset('public/frontEnd/js/responsiveslides.min.js')}}"></script>

                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                     // Slideshow 4
                    $("#slider3").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                    $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                            $('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
                </script>
				<div id="top" class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider3">
                        <li id="callbacks1_s0" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;" class="">
                            <img class="img-responsive" src="{{asset('public/frontEnd/images/men1.jpg')}}" alt=" ">
                        </li>
                        <li id="callbacks1_s1" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;" class="">
                            <img class="img-responsive" src="{{asset('public/frontEnd/images/men2.jpg')}}" alt=" ">
                        </li>
                        <li id="callbacks1_s2" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;" class="">
                            <img class="img-responsive" src="{{asset('public/frontEnd/images/men1.jpg')}}" alt=" ">
                        </li>
                        <li id="callbacks1_s3" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;" class="callbacks1_on">
                            <img class="img-responsive" src="{{asset('public/frontEnd/images/men2.jpg')}}" alt=" ">
                        </li>
                    </ul>
                    <ul class="callbacks_tabs callbacks1_tabs">
                        <li class="callbacks1_s1">
                            <a href="#" class="callbacks1_s1">1</a>
                        </li>
                        <li class="callbacks1_s2">
                            <a href="#" class="callbacks1_s2">2</a>
                        </li><li class="callbacks1_s3">
                            <a href="#" class="callbacks1_s3">3</a>
                        </li><li class="callbacks1_s4 callbacks_here">
                            <a href="#" class="callbacks1_s4">4</a>
                        </li>
                    </ul>
				</div>
				<div class="clearfix"></div>
            </div>

            <div class="men-wear-bottom">
                <div class="col-sm-4 men-wear-left">
                    <img class="img-responsive" src="{{asset('public/frontEnd/images/men3.jpg')}}" alt=" ">
                </div>
                <div class="col-sm-8 men-wear-right">
                    <h4>Exclusive Men's Collections</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                    odit aut fugit. </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset('public/frontEnd/images/ep2.png')}}" alt="" class="pro-image-front">
                        <img src="{{asset('public/frontEnd/images/ep2.png')}}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Watches</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset('public/frontEnd/images/a2.png')}}" alt="" class="pro-image-front">
                        <img src="{{asset('public/frontEnd/images/a2.png')}}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Blazers</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset('public/frontEnd/images/mw2.png')}}" alt="" class="pro-image-front">
                        <img src="{{asset('public/frontEnd/images/mw2.png')}}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Shirts</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

		<div class="clearfix"></div>

		<div class="single-pro">
            @foreach($publicCategoryProducts as $publicCategoryProduct)
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset($publicCategoryProduct->productImages)}}" alt="" class="pro-image-front" height="220px">
                        <img src="{{asset($publicCategoryProduct->productImages)}}" alt="" class="pro-image-back" height="220px">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{url('/product-details/'.$publicCategoryProduct->id)}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="{{url('/product-details/'.$publicCategoryProduct->id)}}">{{ $publicCategoryProduct->productName }}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">BDT {{ $publicCategoryProduct->productPrice }}</span>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach

			<div class="clearfix"></div>
		</div>
		<div class="pagination-grid text-right">
            <ul class="pagination paging">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
		</div>
	</div>
</div>
@endsection
