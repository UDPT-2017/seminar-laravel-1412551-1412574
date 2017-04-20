@extends('home.master')

@section('content')


<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>Shopping Cart</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <h3 class="block-title alt"><i class="fa fa-angle-down color"></i>1. Account</h3>
            <form action="#" class="form-sign-in">
                <div class="row ">
                    <div class="col-md-6">
                        <a class="btn btn-theme btn-block btn-icon-left facebook" href="#"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-theme btn-block btn-icon-left twitter" href="#"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control" type="text" placeholder="User name or email"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control" type="password" placeholder="Your password"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 text-right-md">
                        <a class="forgot-password" href="#">Forgot your password ?</a>
                    </div>
                    <div class="col-md-12">
                        <p class="btn-row"><a class="btn btn-theme btn-theme-dark" href="#">Login</a> <span class="text"> or </span> <a class="btn btn-theme btn-theme-dark" href="#">Create account</a></p>
                    </div>
                </div>
            </form>

            <h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Orders</h3>
            <div class="row orders">
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Product Name</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="assets/img/preview/shop/order-1.jpg" alt=""/></a></td>
                                <td class="quantity">x3</td>
                                <td class="description">
                                    <h4><a href="#">Standard Product Name Header Here</a></h4>
                                    by Category Name
                                </td>
                                <td class="total">$150 <a href="#"><i class="fa fa-close"></i></a></td>
                            </tr>
                            <tr>
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="assets/img/preview/shop/order-1.jpg" alt=""/></a></td>
                                <td class="quantity">x3</td>
                                <td class="description">
                                    <h4><a href="#">Standard Product Name Header Here</a></h4>
                                    by Category Name
                                </td>
                                <td class="total">$250 <a href="#"><i class="fa fa-close"></i></a></td>
                            </tr>
                            <tr>
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="assets/img/preview/shop/order-1.jpg" alt=""/></a></td>
                                <td class="quantity">x3</td>
                                <td class="description">
                                    <h4><a href="#">Standard Product Name Header Here</a></h4>
                                    by Category Name
                                </td>
                                <td class="total">$350 <a href="#"><i class="fa fa-close"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="block-title"><span>Shopping cart</span></h3>
                    <div class="shopping-cart">
                        <table>
                            <tr>
                                <td>Sub-total:</td>
                                <td>$2,500.00</td>
                            </tr>
                            <tr>
                                <td>Shipping:</td>
                                <td>$25</td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td>$2,525.00</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Send a Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter your coupon code"/>
                        </div>
                        <button class="btn btn-theme btn-theme-dark btn-block">Apply Coupon</button>
                    </div>
                </div>
            </div>

            <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Delivery address</h3>
            <form action="#" class="form-delivery">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Address"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group selectpicker-wrapper">
                            <select
                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                data-toggle="tooltip" title="Select">
                                <option>Country</option>
                                <option>Country</option>
                                <option>Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group selectpicker-wrapper">
                            <select
                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                data-toggle="tooltip" title="Select">
                                <option>City</option>
                                <option>City</option>
                                <option>City</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Postcode/ZIP"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Email"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Phone Number"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="name" id="id" cols="30" rows="10"></textarea></div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Ship to  Different address for invoice
                            </label>
                        </div>
                    </div>
                </div>
            </form>

            <h3 class="block-title alt"><i class="fa fa-angle-down"></i>4. Payments options</h3>
            <div class="panel-group payments-options" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel radio panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                <span class="dot"></span> Direct Bank Transfer
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus.</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="dot"></span> Cheque Payment
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body">
                            Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                <span class="dot"></span> Credit Card
                            </a>
                            <span class="overflowed pull-right">
                                <img src="assets/img/preview/payments/mastercard-2.jpg" alt=""/>
                                <img src="assets/img/preview/payments/visa-2.jpg" alt=""/>
                                <img src="assets/img/preview/payments/american-express-2.jpg" alt=""/>
                                <img src="assets/img/preview/payments/discovery-2.jpg" alt=""/>
                                <img src="assets/img/preview/payments/eheck-2.jpg" alt=""/>
                            </span>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3"></div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading4">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span class="dot"></span> PayPal
                            </a>
                            <span class="overflowed pull-right"><img src="assets/img/preview/payments/paypal-2.jpg" alt=""/></span>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4"></div>
                </div>
            </div>
            <div class="overflowed">
                <a class="btn btn-theme btn-theme-dark" href="#">Home Page</a>
                <a class="btn btn-theme pull-right" href="#">Place Order</a>
            </div>



        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="row blocks shop-info-banners">
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-gift"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Buy 1 Get 1</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-comments"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Call to Free</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-trophy"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Money Back!</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

</div>
<!-- /CONTENT AREA -->

@endsection