<!DOCTYPE html>
<html>
<head>
<title>Request Medicine</title>
</head>
<link rel="stylesheet" type="text/css" href="reqformcss.css"/>
<body>
  <?php
$conn = new mysqli ('localhost', 'root', '', 'userdb');
session_start();

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes

 $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
  $fname = mysqli_real_escape_string($conn,$fname); 
 
 $username= stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($conn,$username);

 $cc = stripslashes($_REQUEST['cc']);
 $cc = mysqli_real_escape_string($conn,$cc);
 
 $mobile = stripslashes($_REQUEST['mobile']);
 $mobile = mysqli_real_escape_string($conn,$mobile);

 $house= stripslashes($_REQUEST['house']);
 $house = mysqli_real_escape_string($conn,$house);

$city = stripslashes($_REQUEST['city']);
 $city = mysqli_real_escape_string($conn,$city);

 $state = stripslashes($_REQUEST['state']);
 $state = mysqli_real_escape_string($conn,$state);

 $pincode = stripslashes($_REQUEST['pincode']);
 $pincode = mysqli_real_escape_string($conn,$pincode);

 $country = stripslashes($_REQUEST['country']);
 $country  = mysqli_real_escape_string($conn,$country);
 
 $brand= stripslashes($_REQUEST['brand']);
 $brand = mysqli_real_escape_string($conn,$brand);

 $generic= stripslashes($_REQUEST['generic']);
$generic = mysqli_real_escape_string($conn,$generic);
 
 $quantity = stripslashes($_REQUEST['quantity']);
 $quantity = mysqli_real_escape_string($conn,$quantity);
 

$mt = stripslashes($_REQUEST['mt']);
 $mt = mysqli_real_escape_string($conn,$mt);

 

$query2 = "INSERT into request_form (Full_name,Login_email,Contact_no,Address,Country,brand_name,generic_name,quantity,medicine_type)
VALUES ('$fname','$username','$cc.$mobile','$house.$city.$state.$pincode','$country','$brand','$generic','$quantity','$mt')";
        $result1 = mysqli_query($conn,$query2);

        if($result1){
            echo "<div class='form'>
<h3>Your Request Form has been successfully submitted. You will be intimidated about the availability of the medicine. We are grateful to help you !! </h3>
</div>";    
   }
    }else{
?>

  <div class="simpleform">
<form id ="registration" action="" method="post">
<h1>Request Form</h1> 
Full Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" id="button" placeholder="" size="30" required><br><br>

Email Id: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" id="button" placeholder="" size="30" required><br><br>

Address:<br><br>
<input type="text" name="house" id="button" placeholder="House No,Building & Area" size="30" required><br><br>
<input type="text" name="city" placeholder="City/Town/District" size="30" required><br><br>
<input type="text" name="state" placeholder="State/Union Territory" size="30" required> <br><br>
<input type="text" name="pincode" size=10 placeholder="Pincode" required><br><br>
<input type="text" name="country" placeholder="Country" size="30" required><br><br><br>

Brand Name: &nbsp&nbsp&nbsp<input type="text" name="brand" id="button" placeholder="" size="30" required><br><br>

Generic Name:&nbsp<input type="text" name="generic" id="button" placeholder="" size="30" required><br><br>

Quantity: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="quantity" id="button" size="5" placeholder="" required ><br><br>

Mobile No: <br> <input type="text" name="cc" id="button" size="2" value="+" required>&nbsp

<input type="number" name="mobile" id="button" size="15" required><br><br>

Medicine Type:<br>
<select id="mt" name="mt" required> <option>Select Medicine Type</option>
  <option> Capsule</option>
   <option> Tablet</option>
 <option>Syrup</option>
 <option>Cream</option>
</select>
<br><br>
<font color="black">
  Attach the image of prescription copy of medicine by the doctor in the email:
  
  <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWPMtvtdLrBBlhLpMCfgBxVfqMHgCDLsTCVjmqSmzdbjlxVvNMtZWSsCPbHcPjvcTJcNG">oumdsp@gmail.com </a><br>
  * Note that while collecting medicines from the donator you will have to bring this same prescripton.</font>
  <br><br>
  <input type="submit" value="Submit" name="submit">&nbsp&nbsp&nbsp
  <input type="reset" name="reset" value="Clear">

</form>
</div>
<?php } ?>
</body>
</html>