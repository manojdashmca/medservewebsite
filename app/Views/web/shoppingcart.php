<!-- Breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs-path">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li class="active">Shopping Cart</li>
        </ul>
    </div>
</section>

<!-- Checkout-->
<section class="section section-md bg-gray-100">
    <div class="container">
        <h5>Your shopping cart</h5>
        <div class="product-cart">
            <div class="table-custom-responsive">
                <table class="table-custom table-product">
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-cart-name"><a class="product-cart-media" href="product-page.html"><img src="<?= PUBLICPATH ?>images/product-01-174x199.png" alt="" width="174" height="199"/></a>
                                    <p class="product-cart-title"><a href="product-page.html">Aamra Homemade Tomato Garlic Basil Pizza Pasta Sauce</a></p>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-size"><span>3.53 oz</span></div>
                            </td>
                            <td>
                                <div class="stepper-modern">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-price"><span>$28.00</span></div>
                            </td>
                            <td>
                                <div class="product-cart-delete"><span class="icon fl-bigmug-line-recycling10"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-cart-name"><a class="product-cart-media" href="product-page.html"><img src="<?= PUBLICPATH ?>images/product-02-174x199.png" alt="" width="174" height="199"/></a>
                                    <p class="product-cart-title"><a href="product-page.html">Aamra Homemade Tomato Garlic Basil Pizza Pasta Sauce</a></p>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-size"><span>1.76 oz</span></div>
                            </td>
                            <td>
                                <div class="stepper-modern">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-price"><span>$14.00</span></div>
                            </td>
                            <td>
                                <div class="product-cart-delete"><span class="icon fl-bigmug-line-recycling10"></span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="product-cart-footer">
                <div class="product-cart-total"><span>Total</span><span class="product-cart-total-price h4">$42.00</span></div><a class="btn btn-lg btn-primary" href="checkout.html">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</section>