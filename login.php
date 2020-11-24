<?php 


 
    include 'header.php';
  


?>

     <!--<form action="/action_page.php">
            <div class="login">
                <input type="text" placholder="USERNAME"><br>
                <input type="text" placeholder="PASSWORD"><br>
            </div>
            <button class="login" type="submit">LOGIN</button><br>
            <button class="register" type="sumbit">REGISTER</button>
        </form>-->



<form class='login-form' action="login-action.php" method="post">
  <div class="imgcontainer">
    <img src="img/faulkner-logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container-login">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container-login" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
        
<?php 


include 'footer.php'

?>