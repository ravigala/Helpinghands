<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="column" >
            
            <img src="http://shots.jotform.com/elton/logo_thanksgiving.png" alt />
            <div id="donation"><strong>Donation form</strong></div>
            <div id="make"><strong>Make a donation to support us</strong></div>
        </div>
        <div class="column1" >
            <p style="text-align: center;font-family: Brush Script MT;font-weight: bold;margin-bottom: 0px;color: black;"><span style="font-size: 55px;">Organisation Form</span></p>
            <p><span style="font-size: 14pt;">Please fill this form for required details.</span></p>
            
            <div class="container">
                <form method="POST">
                <div class="row">
                    <div class="col-25">
                    <label for="Oname">Organisation Name</label>
                    </div>
                    <div class="col-75">
			            <select name="Orgname">
                            <option value="OrgName">Select Organisation</option>
                            <option value="Help Flare">Help Flare</option>
                            <option value="ACE Foundation">ACE Foundation</option>
                            <option value="Adhar Organisation">Adhar Organisation</option>
                            <option value="Muskan Foundation">Muskan Foundation</option>
                            <option value="Udaan Foundation">Udaan Foundation</option>
                        </select>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="Mobile">Mobile no</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="mobile" name="mobileno" placeholder="Your mobile no" size="10" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="address">Full Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Your address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city"> City</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="city" name="city" placeholder="Your city">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="state">State</label>
                        </div>
                        <div class="col-75">
                        <select name="state" id="state">
                            <option value="States">Select your State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                        <label for="donation">Donate Thing</label> 
                        </div>
                        <div class="col-75">
                            <select name="Donatething">
                                <option value="Items">Items</option>
                                <option value="Cloths">Cloths</option>
                                <option value="books">Books</option>
                                <!-- <option value="money">Money</option> -->
                                <option value="shoes">Shoes</option>
                                <option value="other">Other thing</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city">Please specify the thing</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="city" name="thing1" placeholder="10 shirts" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city">Others,Please specify</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="city" name="thing2" placeholder="Any other thing">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-25">
                        <label for="amount">Any Amount</label>
                        </div>
                        <div class="col-75">
                            <input type="number" id="amount" name="amount" placeholder="donate amount" required>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-25">
                            <label for="date">Pickup date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Register" name="submit2">
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>
</body>
</html>


<?php 

include 'connection.php'; 

if(isset($_POST['submit2'])){
    $name=$_POST['Orgname'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $Donatething=$_POST['Donatething'];
    $thing1=$_POST['thing1'];
    $thing2=$_POST['thing2'];
    // $amount=$_POST['amount'];
    $date=$_POST['date'];


    $insertquery =" insert into org(name,email,mobileno,address,city,state,Donatething,thing1,thing2,date) values ('$name','$email','$mobileno','$address','$city','$state','$Donatething','$thing1','$thing2','$date')";

    $res = mysqli_query($con,$insertquery);

    if($res && $res!=null){
        ?>
        <script>
           swal("Good job!", "You registered succefully!", "success");
        </script>
        <?php
    }else{
        ?>
        <script>
           sweetAlert("Oops...","Not registered succefully! Try again","error");
        </script>
        <?php

    }


}





?>