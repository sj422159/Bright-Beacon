<!doctype html>
<html class="no-js" lang="en">
    
    
<?php
include "./header.php";
?>

            <!--End of Header Area-->
            <!--Breadcrumb Banner Area Start-->
            <div class="breadcrumb-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-text">
                                <h1 class="text-center">Shopping Cart</h1>
                                <div class="breadcrumb-bar">
                                    <ul class="breadcrumb text-center">
                                        <li><a href="index.html">Home</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Breadcrumb Banner Area-->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="EduMart-product-remove">remove</th>
                                                <th class="EduMart-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="EduMart-product-price">Unit Price</th>
                                                <th class="EduMart-product-quantity">Quantity</th>
                                                <th class="EduMart-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="EduMart-product-remove"><a href="#"><i
                                                            class="fa fa-times"></i></a></td>
                                                <td class="EduMart-product-thumbnail"><a href="#"><img
                                                            src="img/cart/cart1.jpg" alt=""></a></td>
                                                <td class="EduMart-product-name"><a href="#">Aliquam lobortis est</a>
                                                </td>
                                                <td class="EduMart-product-price"><span class="amount">$70.00</span>
                                                </td>
                                                <td class="EduMart-product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="EduMart-product-remove"><a href="#"><i
                                                            class="fa fa-times"></i></a></td>
                                                <td class="EduMart-product-thumbnail"><a href="#"><img
                                                            src="img/cart/cart2.jpg" alt=""></a></td>
                                                <td class="EduMart-product-name"><a href="#">Cras neque metus</a></td>
                                                <td class="EduMart-product-price"><span class="amount">$60.50</span>
                                                </td>
                                                <td class="EduMart-product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                    placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon"
                                                    type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart"
                                                    type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>$130.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php
                include "./footer.php";
                ?>
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
     <?php
     include "./commonscript.php";
     ?>
</body>

<!-- /cart.html /3.x [XR&CO'2014], Tue,  19:04:14  -->

</html>