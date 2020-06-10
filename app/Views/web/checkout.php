<!-- Breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs-path">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li class="active">Checkout</li>
        </ul>
    </div>
</section>

<!-- Checkout-->
<section class="section section-md bg-gray-100">
    <div class="container text-center">
        <div class="row row-50 text-left">
            <div class="col-md-12">
                <div class="row row-50">
                    <div class="col-lg-6">
                        <h5>Billing Address</h5>
                        <form class="rd-form">
                            <div class="form-wrap">
                                <div class="row row-10 row-narrow">
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-first-name">First Name</label>
                                            <input class="form-input" id="biling-first-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-family-name">Family Name</label>
                                            <input class="form-input" id="biling-family-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-company">Company</label>
                                            <input class="form-input" id="biling-company" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-address">Address</label>
                                            <input class="form-input" id="biling-address" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-country">Country</label>
                                            <input class="form-input" id="biling-country" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-city">City/Town</label>
                                            <input class="form-input" id="biling-city" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-apartment">Apartment/Suite No.</label>
                                            <input class="form-input" id="biling-apartment" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="biling-phone">Phone</label>
                                            <input class="form-input" id="biling-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h5>Delivery Address</h5>
                        <form class="rd-form">
                            <div class="form-wrap">
                                <div class="row row-10 row-narrow">
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-first-name">First Name</label>
                                            <input class="form-input" id="addres-first-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-family-name">Family Name</label>
                                            <input class="form-input" id="addres-family-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-company">Company</label>
                                            <input class="form-input" id="addres-company" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-address">Address</label>
                                            <input class="form-input" id="addres-address" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-country">Country</label>
                                            <input class="form-input" id="addres-country" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-city">City/Town</label>
                                            <input class="form-input" id="addres-city" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-apartment">Apartment/Suite No.</label>
                                            <input class="form-input" id="addres-apartment" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="form-label" for="addres-phone">Phone</label>
                                            <input class="form-input" id="addres-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-wrap">
                    <label class="shop-checkbox-wrap">
                        <input class="shop-checkbox" type="checkbox" name="brands"><span class="shop-checkbox-label">My Billing Address And Shipping Address are The Same</span>
                    </label>
                </div>
            </div>
            <div class="col-sm-12">
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
                                        <div class="product-cart-name"><a class="product-cart-media" href="product-page.html"><img src="images/product-01-174x199.png" alt="" width="174" height="199"/></a>
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
                                        <div class="product-cart-name"><a class="product-cart-media" href="product-page.html"><img src="images/product-02-174x199.png" alt="" width="174" height="199"/></a>
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
                </div>
            </div>
            <div class="col-lg-6">
                <h5>Payment Methods</h5>
                <div class="card-shop">
                    <ul class="list-md form-wrap">
                        <li>
                            <div class="radio-panel">
                                <label class="radio-inline radio-inline-lg active">
                                    <input name="input-radio" value="radio-1" type="radio" checked>Direct Bank Transfer
                                </label>
                                <div class="radio-panel-content">
                                    <p>
                                        Make your payment directly to our bank account. Please use your OrderID as the payment reference. Contact support for more information.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="radio-panel">
                                <label class="radio-inline radio-inline-lg">
                                    <input name="input-radio" value="radio-2" type="radio">PayPal
                                </label>
                                <div class="radio-panel-content">
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="radio-panel">
                                <label class="radio-inline radio-inline-lg">
                                    <input name="input-radio" value="radio-3" type="radio">Cheque Payment
                                </label>
                                <div class="radio-panel-content">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h5>Cart Total</h5>
                <div class="table-custom-responsive bg-gray-100">
                    <table class="table-custom card-shop-table">
                        <tr>
                            <td>cart subtotal</td>
                            <td>$42.00</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$42.00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div><a class="btn btn-lg btn-primary" href="#">Proceed to Checkout</a>
    </div>
</section>