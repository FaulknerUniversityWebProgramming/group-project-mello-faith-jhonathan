<?php
include 'header.php';
include 'navbar.php';

?>




<?php
//include 'css/style.php';
// define variables and set to empty values
$nameErr = $emailErr = $reasonErr = $commentErr = $phoneErr = "";
$name = $email = $comment = $website = $reason = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
    
 /*   $phone = test_input($_POST["phone"]);
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    {
      $phoneErr = 'Invalid Number';
    }
 
   */ 
    
   if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $email = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
     if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    {
      $phoneErr = 'Invalid Number';
    }
  } 
    
    
    
    
    
// $reason = test_input($_POST["reason"]);
      if (empty($_POST["reason"])) {
    $reasonErr = "reason is required";
  } else {
    $reason = test_input($_POST["reason"]);
  }      
    
    
  if (empty($_POST["comment"])) {
    $commentErr = "comment required";
  } else {
    $comment = test_input($_POST["comment"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>







<!-- Card -->
<div class="card">

  <!-- Card body -->
  <div class="card-body">

    <!-- Material form register -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <p class="h4 text-center py-4">Contact Us</p>

      <!-- Material input name -->
      <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
         <!--  <label for="materialFormCardNameEx" class="font-weight-light"> --> Your name: <!-- </label> --><span class="error" style="color:#ff0000;" >* <?php echo $nameErr;?></span>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="name" placeholder="John Doe">
      <!--  <label for="materialFormCardNameEx" class="font-weight-light">Your name</label> -->
      </div>

      <!-- Material input email -->
      <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
          <!-- <label for="materialFormCardEmailEx" class="font-weight-light"> --> Your email: <!-- </label>--> <span class="error" style="color:#ff0000;" >* <?php echo $emailErr;?></span>
        <input type="email" id="materialFormCardEmailEx" class="form-control" name="email" placeholder="johndoe@gmail.com">
        
      </div>

        
     <!-- Material input phone -->
          <div class="md-form">
        <i class="glyphicon glyphicon-phone"></i>
          Your phone:  <span class="error" style="color:#ff0000;" ><?php echo $phoneErr;?></span>
        <input type="tel" id="materialFormCardEmailEx" class="form-control" name="phone" placeholder="xxx-xxx-xxxx">
        
      </div>
        
        
        
        
        
        
        
        
        
        
      <!-- Material input reason -->
      <div class="md-form">
        <i class="fa fa-tag prefix grey-text"></i>
           Subject: <span class="error" style="color:#ff0000;" >* <?php echo $reasonErr;?></span>
        <input type="text" id="materialFormCardConfirmEx" class="form-control" name="reason" placeholder="Reason of contact">
       
      </div>

      <!-- Material input comment -->
      <div class="md-form">
        <i class="glyphicon glyphicon-pencil"></i>
          Comment: <span class="error" style="color:#ff0000;" >* <?php echo $commentErr;?></span>
        <input type="text" id="materialFormCardPasswordEx" class="form-control" name="comment" placeholder="Detailed explanation of subject">
        
      </div>
        
        
  <!--       <div class="form-group">
    <label for="formControlRange">Example Range input</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>  -->

      <div class="text-center py-4 mt-3">
        <button class="btn btn-cyan" type="submit">Register</button>
      </div>
    </form>
    <!-- Material form register -->

  </div>
  <!-- Card body -->

</div>
<!-- Card -->




<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
    echo $phone;
echo "<br>";
echo $reason;
echo "<br>";
echo $comment;
echo "<br>";

?>