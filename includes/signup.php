<?php 
if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $barangay=$_POST['barangay'];
    $city=$_POST['city'];
    $zipcode=$_POST['zipcode'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
 echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName,LastName,MobileNumber,Email,Address,Barangay,City,Zipcode,Password) value('$fname','$lname','$contno','$email','$address','$barangay','$city','$zipcode','$password')");
    if ($query) {
     echo "<script>alert('You are successfully registered');</script>";
     echo "<script>window.location.href='index.php'</script>";
  }
  else
    {
       echo "<script>alert('Something Went Wrong. Please try again.');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
}

 ?>

<!-- Javascript for password confirmation-->
<script type="text/javascript">

    function validations() {

        // validation for name using regex expression and must be 3-15 characters
        if (!document.signup.firstname.value.match(/^[a-zA-Z]{3,15}$/)) {
            alert('Please enter a valid first name');
            document.signup.firstname.focus();
            return false;
        } 

        // validation for name using regex expression and must be 3-15 characters
        if (!document.signup.lastname.value.match(/^[a-zA-Z]{3,15}$/)) {
            alert('Please enter a valid last name');
            document.signup.lastname.focus();
            return false;
        }

        // validation for email using regex expression
        if (!document.signup.email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
            alert('Please enter a valid email address');
            document.signup.email.focus();
            return false;
        }

        // validation for mobile number using regex expression
        if (!document.signup.mobilenumber.value.match(/^[0-9]{11}$/)) {
            alert('Please enter a valid mobile number with 11 digits only');
            document.signup.mobilenumber.focus();
            return false;
        }

        // validation for password using regex expression and must atleast 8 characters long and must contain atleast 1 uppercase, 1 lowercase, 1 number and 1 special character
        if (!document.signup.password.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/)) {
            alert('Password must be atleast 8 characters long and must contain atleast 1 uppercase, 1 lowercase, 1 number and 1 special character');
            document.signup.password.focus();
            return false;
        }

        if (document.signup.password.value!=document.signup.repeatpassword.value) {
            alert('Password and Repeat Password field does not match');
            document.signup.repeatpassword.focus();
            return false;
        }
            return true;
    } 
    
</script>
  <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN UP</h4>
                    </div>
             
                    <span class="popup-seprator text-center"><i class="brd-rd50">Signup</i></span>
                    <form class="sign-form" name="signup" method="post" onsubmit="return validations();">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input class="brd-rd3" type="text"  id="firstname" name="firstname" required="true" placeholder="First Name">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input class="brd-rd3" type="text" id="lastname" name="lastname" required="true" placeholder="Last Name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" name="email" required="true" placeholder="Email Address">
                            </div>
                             <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" id="mobilenumber" name="mobilenumber" type="number" required="true" pattern="[0-9]{11}" title="Mobile must contain 11 digits only ex: 09123456789" placeholder="Mobile Number">
                            </div>
                            
                            <div class="col-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" name="address" required placeholder="Street Address">
                            </div>
                            <div class="col-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" name="barangay" required placeholder="Barangay">
                            </div>
                            <div class="col-12 col-md-6">
                                <input class="brd-rd3" type="text" name="city" required placeholder="City">
                            </div>
                            <div class="col-12 col-md-6">
                                <input class="brd-rd3" type="number" name="zipcode" required placeholder="Zipcode">
                            </div>

                               <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" name="password" required="true" required="true" placeholder="Password">
                            </div>

                               <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password"  id="repeatpassword" name="repeatpassword" required="true" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit" name="submit">REGISTER NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                <a class="recover-btn" href="forgot-password.php" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>