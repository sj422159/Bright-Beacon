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
                                    <h1 class="text-center">Login Register</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Login Register</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Login Register Area Strat-->
                <div class="login-register-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <!--Login Form Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="customer-login-register">
                                    <div class="form-login-title">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#">
                                            <div class="form-fild">
                                                <p><label>Username or email address <span class="required">*</span></label></p>
                                                <input name="username" value="" type="text">
                                            </div>
                                            <div class="form-fild">
                                                <p><label>Password <span class="required">*</span></label></p>
                                                <input name="password" value="" type="password">
                                            </div>
                                            <div class="login-submit">
                                                <button type="submit" class="button-default">Login</button>
                                                <label>
                                                    <input class="checkbox" name="rememberme" value="" type="checkbox">
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="lost-password">
                                                <a href="#">Lost your password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Login Form End-->
                            <!--Register Form Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="customer-login-register register-pt-0">
                                    <div class="form-register-title">
                                        <h2>Register</h2>
                                    </div>
                                    <div class="register-form">
                                        <form action="#">
                                            <div class="form-fild">
                                                <p><label>Username or email address <span class="required">*</span></label></p>
                                                <input name="username" value="" type="text">
                                            </div>
                                            <div class="form-fild">
                                                <p><label>Password <span class="required">*</span></label></p>
                                                <input name="password" value="" type="password">
                                            </div>
                                            <div class="register-submit">
                                                <button type="submit" class="button-default">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Register Form End-->
                        </div> 
                    </div>
                </div>
                <!--Login Register Area End-->
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

<!-- /login-register.html /3.x [XR&CO'2014], Tue,  19:04:15  -->
</html>