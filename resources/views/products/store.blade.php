<!-- store top filter -->
<div class="store-filter clearfix">
    <div class="store-sort">
        <label>
            Show:
            <select class="input-select">
                <option value="0">20</option>
                <option value="1">50</option>
            </select>
        </label>
    </div>
    <ul class="store-grid">
        <li class="active"><i class="fa fa-th"></i></li>
        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
    </ul>
</div>
<!-- /store top filter -->

<!-- store products -->
<div class="row">
    <!-- product -->
    @if ($myProducts->isNotEmpty())
        @foreach ($myProducts as $product)
            <div class="col-md-4 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="/../img/product01.png" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                            <span class="new">NEW</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">{{ $product->productsCategories->category_name }}</p>
                        <h3 class="product-name"><a href="#">{{ $product->product_name }}</a></h3>
                        <h4 class="product-price">${{ $product->price }} <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            {{-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                compare</span></button> --}}
                            <button class="quick-view"><a href="{{ route('products.view.show', $product->id) }}"><i
                                        class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                            cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="product-body">
            No records found.
        </div>
    @endif
    <!-- /product -->
</div>
<!-- /store products -->

<!-- store bottom pagination -->
{{ $myProducts->withQueryString()->links() }}
<!-- /store bottom pagination -->
