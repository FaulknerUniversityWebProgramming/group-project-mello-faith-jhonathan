<?php
    include 'header.php';
    include 'navbar.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("DELETE FROM Purchase");
        $stmt->execute();
        $checkout = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $msg = "Your purchase is on its way!!";
    }

?>
<?php
        if(strlen($msg) > 0){
            echo "<strong>".$msg."</strong>";
        }
    ?>
<h1 style="text-align: center;">Responsive Checkout Form</h1>
<div class="Fields">
<div>
<div class="formContainer">
<form>
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
<input
type="submit"
value="Confirm payment"
class="checkout"
/>
    
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
    </style>
</form>
    
    <?php
        include 'footer.php';
    ?>