<?php
    include 'header.php';
    include 'navbar.php';
include 'myDB.php';
?>

<?php
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("DELETE FROM Purchase");
        $stmt->execute();
       
        
        $msg = "YOUR PURCHASE IS ON ITS WAY!!";
    }

?>
<?php
        if(strlen($msg) > 0){
            echo "<h1 style='text-align=center;'><strong>".$msg."</strong></h1>";
        }
    ?>
<br>
<br>
<button id='back-shopping'>
        Back to Shopping
    </button>
    <br>
<h1 style="text-align: center;">CHECKOUT</h1>
<div class="Fields">
<div>
<div class="formContainer">
    
<form method='post' action="<?php echo $_SERVER['PHP_SELF']?>">
<div class="Fields">
<div>
<h3>Billing Address</h3>
<label for="fname">Full Name</label>
<input type="text" id="fname" name="firstname" />
<label for="email"> Email</label>
<input type="text" id="email" name="email" />
<label for="adr"> Address</label>
<input type="text" id="adr" name="address" />
</div>
<div>
<h3>Payment</h3>
<label for="cname">Name on Card</label>
<input type="text" id="cname" name="cardname" />
<label for="ccnum">Credit card number</label>
<input type="text" id="ccnum" name="cardnumber" />
<div class="Fields">
<div>
<label for="expyear">Exp Year</label>
<input type="text" id="expyear" name="expyear" />
</div>
<div>
<label for="cvv">CVV</label>
<input type="text" id="cvv" name="cvv" />
</div>
</div>
</div>
</div>
<button
type="submit"

id="checkout"
        >CONFIRM PAYMENT</button>
    
    </form>
    </div>
    </div>
</div>
    
    <script>
        var back = document.getElementById("back-shopping");
        back.addEventListener('click', function(){
          window.location.href = 'online-store.php';  
        });
        
        var checkout = document.getElementById("checkout");
        checkout.addEventListener('click', function(){
            window.location.href = 'online-store.php';
        });
    </script>
    
    <style>
    .formContainer {
   margin: 10px;
   background-color: #D6E9FF;
   padding: 5px 20px 15px 20px;
   border: 1px solid rgb(191, 246, 250);
   border-radius: 3px;
        width: 800px;
        margin: auto auto;
}
        
        #back-shopping{
        width: 10%;
        margin: auto auto;
    </style>
    
    <?php
        include 'footer.php';
    ?>