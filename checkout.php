<?php

 $apiKey = "rzp_test_mZNzawpicVOX3V";

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body {
  background-image: url("bg.jpg");
  background-size: cover;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
</style>
</head>
<body>
  <div class="container" >
      <form class='checkout-form'  action="#" method="post" >
            <h3 style="text-align: center; color:#fff;margin:20px 10px;font-family: lato;">Checkout Form</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Enter your Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Your E-mail ID">
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" id="city" name="mobile" placeholder="Enter Your Mobile Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter Your Address"> 
            <label for="courses">Courses</label>
            <select name="courses">
              <option value="Diploma">Diploma in Data Science</option>
              <option value="Web Development">Web Development</option>
              <option value="Machine Learning">Machine Learning</option>
            </select>
       
        <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey;?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="300000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>" // Replace with the order_id generated by you in the backend.Getting a random number here as data-id.
    data-buttontext="Pay now"
    data-name="INSAID"
    data-description="Registration fee for GCDAI"
    data-image="https://www.insaid.co/wp-content/uploads/2018/07/logo.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>
<style>
   
    </style>
<input type="hidden" custom="Hidden Element" name="hidden">
      </form>
    </div>
</body>
</html>
