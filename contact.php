
        <?php
// define variables and set to empty values
 $name = $email = $comment = $reason = $phone= "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $name = "Only letters and white space allowed";
    }
  }   
        
        
       /* 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $name = "Only letters and white space allowed";
}
    */
//  $email = test_input($_POST["email"]);
    if (empty($_POST["email"])) {
    $email = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }     
         
         
  $phone = test_input($_POST["phone"]);      
 // $reason = test_input($_POST["reason"]);
      if (empty($_POST["reason"])) {
    $reason = "reason is required";
  } else {
    $reason = test_input($_POST["reason"]);
  }        
         
         
 // $comment = test_input($_POST["comment"]);
 if (empty($_POST["comment"])) {
    $comment = "Comment is required";
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
<!-- 
<h2>PHP Form Validation Example</h2>
<form action="mail_faithp.king@gmail.com" method="post" enctype="text/plain">  
    
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="email" name="email">
  <br><br>
  Phone: <input type="number" name="phone">  
   <br><br> 
  Reason for contact: <input type="text" name="reason">
  <br><br>
  Comment: <textarea name="comment"></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Send">  
</form>
-->
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

   