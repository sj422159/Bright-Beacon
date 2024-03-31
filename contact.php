<!doctype html>
<html class="no-js" lang="en">

<!-- /contact.html /3.x [XR&CO'2014], Tue,  19:04:18  -->
<?php
include "./header.php";
?>
<style>
.form-container {
    max-width: 600px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    background-color: #fff;
    margin-top: 50px;
}

.form-container label {
    display: block;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.form-container input,
.form-container select {
    display: block;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-container select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'><polygon points='1 6, 9 15, 19 6'/></svg>");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1rem;
    padding-right: 3rem;
}

.form-container textarea {
    display: block;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    resize: none;
    height: 10rem;
    font-size: 1rem;
}

.form-container button[type="submit"] {
    display: block;
    background: linear-gradient(to right, #4CAF50 0%, #5EBD8F 50%, #4CAF50 100%);
    color: #fff;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.form-container button[type="submit"]:hover {
    background: linear-gradient(to right, #5EBD8F 0%, #4CAF50 50%, #5EBD8F 100%);
}

@media (max-width: 500px) {

    .form-container input,
    .form-container textarea {
        padding-right: 0;
    }

    .form-container select {
        background-image: none;
        padding-right: 0;
    }
}
</style>
<!--End of Header Area-->
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Contact</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Contact Area Start-->
<div class="form-container"> <label for="firstName">First Name</label> <input type="text" id="firstName"
        name="firstName" required>
    <label for="lastName">Last Name</label> <input type="text" id="lastName" name="lastName" required>

    <label for="emailAddress">Email Address</label> <input type="email" id="emailAddress" name="emailAddress" required>

    <label for="zipCode">ZIP Code</label> <input type="text" id="zipCode" name="zipCode" required>

    <label for="birthDate">What is your child's date of birth?</label> <input type="date" id="birthDate"
        name="birthDate" required>

    <label for="startIn">We'd like to start in...</label> <select id="startIn" name="startIn">

        <option value="withinAMonth">Within a month</option>
    </select>
    <label for="visitDate">When would you like to visit?</label> <input type="date" id="birthDate" name="birthDate">

    <option value="date1">Choose an available date</option> </select>
    <label for="questions">Questions? Anything you'd like us to know about your family?</label>

    <textarea id="questions" name="questions"></textarea>
    <label for="phoneNumber">Phone Number</label> <input type="tel" id="phoneNumber" name="phoneNumber" required>

    <label for="branch">Branch</label> <select id="branch" name="branch">

        <option value="bhubaneswar">Bhubaneswar</option>
    </select>
    <input type="checkbox" id="privacy" name="privacy" value="privacyagreed" required> <label for="privacy"
        style="margin-left:10px;"> By submitting this form, you agree to the Curious Cubs privacy notice.</label>
    <button type="submit">Submit</button>

</div>
<!--Contact Area End-->
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

<!-- /contact.html /3.x [XR&CO'2014], Tue,  19:04:18  -->

</html>