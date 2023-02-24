<?php
 $insert = false;
 if(isset($_POST['fname'])){
     // Set connection variables
     $server = "localhost";
     $username = "root";
     $password = "";
 
     // Create a database connection
     $con = mysqli_connect($server, $username, $password);
 
     // Check for connection success
     if(!$con){
         die("connection to this database failed due to" . mysqli_connect_error());
     }
     // echo "Success connecting to the db";
 
     // Collect post variables
     $fname=$_POST['fname'];
     $lname =$_POST['lname'];
     $email =$_POST['email'];
     $city =$_POST['city'];
     $state =$_POST['state'];
     $district =$_POST['district'];
     $pin=$_POST['pin'];
     $mobno=$_POST['mobno'];
     $homeno=$_POST['homeno'];
     $epn=$_POST['epn'];
     $sql = "INSERT INTO `data`.`data` (`fname`, `lname`, `email`, `city`, `state`, `dis`, `pin`, `price`, `hno`, `pop`, `date`) VALUES ('$fname', '$lname', '$email', '$city', '$state', '$district', '$pin', '$mobno', '$homeno', '$epn', current_timestamp());";
     // echo $sql;
    
 
     // Execute the query
     if($con->query($sql) == true){
         // echo "Successfully inserted";
 
         // Flag for successful insertion
         $insert = true;
     }
     else{
         echo "ERROR: $sql <br> $con->error";
     }
 
     // Close the database connection
     $con->close();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" href="animate.css-main\animate.min.css">

    <title>ORDER</title>
</head>
<body>
    
   
    <header class="animate__animated animate__fadeInDownBig" style="margin-top: px;">
    <nav class="navbar bg-warning">
    <div class="container-fluid">
        <div class="navbar-brand text-white"><h1>AJAY HOME DECORE...</h1></div>

<ul class="nav p-2">
    <li class="me-4">
    <form class="d-flex me-" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form></li>
  <li> <!-- Button trigger modal -->
<button type="button" class="btn btn-dark me-4" data-bs-toggle="modal" data-bs-target="#SHAILESH">
  SIGN-IN
</button></li>
  <li class="nav-item dropdown bg-light">
    <a class="nav-link dropdown-toggle rounded" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">CATEGORY</a>
    <ul class="dropdown-menu">
       <li>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-dark me-4" data-bs-toggle="modal" data-bs-target="#SHAILESH">
  SIGN-IN
</button>
  </li>
      <li><a class="dropdown-item" href="#">STUDY ROOM FURNITURE</a></li>
      <li><a class="dropdown-item" href="#">LIVING ROOM FURNITURE</a></li>
      <li><a class="dropdown-item" href="#">HOMR DECORE</a></li>
      <li><a class="dropdown-item" href="#">BATHROOM FURNITURE</a></li>
       <li><a class="dropdown-item" href="#">DINING FURNITURE</a></li>
      <li><a class="dropdown-item" href="#">BAR FURNITURE</a></li>
       <li><a class="dropdown-item" href="#">COLLAGE FURNITURE</a></li>
      <li><a class="dropdown-item" href="#">KITCHRN ROOM FURNITURE</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">GIV US ORDER</a></li>
    </ul>
  <li class="nav-tabs"> 
    <a class="nav-link bg-light" aria-current="page" href="practicle 5.html">HOME</a>
  </li>
  <li class="nav-tabs ">
    <a class="nav-link bg-light" href="gallery.html">GALLERY</a>
  </li>
  <li class="nav-tabs"> 
    <a class="nav-link bg-light" aria-current="page" href="order.html">ORDER</a>
  </li>
  <li class="nav-tabs">
    <a class="nav-link bg-light" href="cont-us.html">CONT-US</a>
  </li>
</ul>

</div>
</nav> 
  </header>
  <br>

<!-- Modal -->
<div class="modal fade" id="SHAILESH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable shadow-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="SHAILESH">New User And Login </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
       <div class="me-2"> 
        <form action="" method="post" class="w-100">
 <h3>New Acc</h3>
         <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter Your Name " required aria-label="Enter Your Name" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="number" class="form-control" placeholder="Enter Contact-" required aria-label="Enter Your Contact-" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Enter valid E-mail" required aria-label="Enter valid E-mail">
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Enter valid password" required aria-label="Enter Valid password">
</div>




<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Address Line 1" required aria-label="Address Line 1">
</div>
<div>  <input type="text" class="form-control" placeholder="Address Line 2" aria-label="Address Line 2">
</div>

<div class="input-group">
</div>
<label for="radio">REGISTRATION TYPE</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Business
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Educator
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Parent
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Student
  </label>
</div>
 
        </form>
        </div>
        <div class="shadow-lg rounded">
                    <h3 style="align-content: center;">Login</h3> 
<form action="shree.php"  class="form-control">

<div>
  <label for="email">Email:-</label>
<input type="email"  class="form-control" placeholder="enter email.." required>
</div>
<div>
  <label for="password">Email:-</label>
<input type="password" class="form-control" placeholder="enter valid password.." required>
</div>
          <button type="button" class="btn btn-warning form-control mt-2">LOGIN</button></div>

</form>
      </div>
      <div class="modal-footer d-flex">
       
        <button type="reset" class="btn btn-danger w-25 form-control" data-bs-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary w-25 form-control me-1">Save</button>
      </div>
    </div>
  </div>
</div>


  <div class="container animate__animated animate__fadeInDownBig animate__delay-1s">
    <form class="row g-3 needs-validation form-control" action="order.php" method="post">
      <div class="row">
  <div class="col-sm-6 col-xl-6">
    <label for="validationTooltip01" class="form-label">First name*</label>
    <input type="text" name="fname" class="form-control" id="validationTooltip01" placeholder="Enter First Name.." required>
    
  </div>
  <div class="col-sm-6 col-xl-6 position-relative col-6">
    <label for="validationTooltip02" class="form-label">Last Name*</label>
    <input type="text" name="lname" class="form-control" id="validationTooltip02" placeholder="Enter Last Name.." required>
    
  </div>
  </div>
 <div class="row">
   <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltipUsername" class="form-label">Email*</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">Email</span>
      <input type="email" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend"  placeholder="Enter Your Email.." required>
      <div class="invalid-tooltip">
        Please choose a unique and valid email.
      </div>
    </div>
  </div>
  <div class="col-sm-6  col-xl-6 position-relative">
    <label for="validationTooltip03 " class="form-label">City*</label>
    <input type="text" name="city" class="form-control" placeholder="Enter your City" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
 </div>
 <div class="row">
    <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip04" class="form-label">State*</label>
    <select class="form-select" name="state" id="validationTooltip04" required>
      <option selected disabled value="">Select State</option>
      <option>Andhra Predesh</option>      
      <option>Assam</option>
      <option>Arunachal Pradesh</option>
      <option>Andaman and Nicobar Island</option>
      <option>Bihar</option>
      <option>Chhattisgarh</option>
      <option>Chandigarh</option>
      <option>Dadra and Nagar Haveli and Daman</option>
      <option>Gujarat</option>
      <option>Goa</option>
      <option>Haryna</option>
      <option>Himachal pardesh</option>
      <option>Jammu and Kashimir</option>
      <option>Jharkhand</option>
      <option>Karnataka</option>
      <option>Kerla</option>
      <option>Ladakh</option>
      <option>Lakshadweep</option>
      <option>Maharashtra</option>
      <option>Madhyapredesh</option>
      <option>Meghalaya</option>
      <option>Manipur</option>
      <option>Mizoram</option>
      <option>NCt of Delhi</option>
      <option>Nagaland</option>
      <option>Odisha</option>
      <option>Panjab</option>
      <option>Punducherry</option>
      <option>Rajastan</option>
      <option>Sikkim</option>
      <option>Tamil Nadu</option>
      <option>telangana</option>
      <option>Tripura</option>
      <option>uttar Pradesh</option>
      <option>Uttarakhand</option>
      <option>West Bengal</option>
       </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>

  <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip04" class="form-label">District*</label>
    <select class="form-select" name="district" id="validationTooltip04" required>
      <option selected disabled value="">Select Dist</option>
      <option>Akola</option>
      <option>Amravati</option>
<option>Buldana</option>
<option>Yavatmal</option>
<option>Washim</option>
<option>Aurangabad</option>
<option>Beed</option>
<option>Jalna</option>
<option>Osmanabad</option>
<option>Nanded</option>
<option>Parbhani</option>
<option>Mumbai</option>
<option>Mumbai Suburban District</option>
<option>Thane</option>
<option>Palghar</option>
<option>Raigad</option>
<option>Ratnagiri</option>
<option>Bhandara</option>
<option>Chandrapur</option>
<option>Gadchiroli</option>
<option>Gondia</option>
<option>Nagpur</option>
<option>Wardha</option>
<option>Ahmednagar</option>
<option>Dhule</option>
<option>Jalgaon</option>
<option>Nandurbar</option>
<option>Nashik</option>
<option>Hingoli</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid District.
    </div>
  </div>
 </div>
 <div class="row">
 <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip05" class="form-label">Pin*</label>
    <input type="number" name="pin" class="form-control" placeholder="Enter your Pincode" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid pincode.
    </div>
  </div>


  <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip05" class="form-label">Mob No.*</label>
    <input type="number" name="mobno" class="form-control" placeholder="Enter your contact" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide Accurate mob no.
    </div>
</div>
  </div>

<div class="row">
 <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip05" class="form-label">Home No*</label>
    <input type="number" class="form-control" placeholder="Enter a Correct Home No." name="homeno" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide Correct Home No.
    </div>
  </div>


  <div class="col-sm-6 col-xl-6 position-relative">
    <label for="validationTooltip05" class="form-label">Enter product name*</label>
    <input type="text" name="epn" class="form-control" placeholder="Enter product name" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide word Spellings.
    </div>
</div>
  </div>
  <div class="row mt-4"><div class="col-6">
    <button class="btn btn-danger" type="reset">Reset</button>
  </div>
  <div class="col-6">
  <button class="btn btn-primary" type="submit">Order</button>
  </div>
  </div>
</form>
  </div>


<?php
   if($insert == true){
    echo "<div class='submsg mt-5'>Sing up Successfully..</div>";
   }
 ?>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>


