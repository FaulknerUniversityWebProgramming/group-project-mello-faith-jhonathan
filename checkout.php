<?php 
    include 'header.php';
   


// API_KEY: f3780a7d67b2762163fcc1f93f132ed1
    $stmt = $conn->prepare("SELECT * from Product where idProduct = ?");
    $stmt->execute([$_GET['idProduct']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt2 = $conn->prepare("INSERT INTO Purchase(image, productName, price) VALUES (:image, :productName, :price)");
    $stmt2->bindParam(":productName", $product['productName']);
    $stmt2->bindParam(":price", $product['price']);
    $stmt2->bindParam(":image", $product['image']);
    $stmt2->execute();

    $msg = "Product ".$product['productName']." added to your cart!";
    
?>

<?php
        if(strlen($msg) > 0){
            echo "<strong>".$msg."</strong>";
        }
    ?>
<h1>Shopping Cart</h1>
<br>
<button id='back-shopping'>
        Back to Shopping
    </button>
    <br />
<div style="overflow-x:auto;">

 <table class="table-product">
        <thead>
            <tr>
                <th colspan=2>Product</th>
                <th>Price</th>
                
                
                
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = $conn->query("SELECT * FROM Purchase");
               // $query2 = $conn->query("SELECT SUM(price) FROM Purchase");
               // $query2 -> execute();
                $sum = 0.00;
                foreach($query as $purchase){
                    //print_r($dept);
                    echo "<tr  style='text-align:center;'><td><img class='img-product' src='".$purchase['image']."'></td><td>".$purchase['productName']."</td><td>".$purchase['price']."</td></tr>";
                    //echo "<td><a href='#' onclick='addToCart(\"".$product['productName']."\",\"".urlencode($product['idProduct'])."\")'>Add to Cart</a></td>";
                   
                    $sum =  $sum + $purchase['price'];
                }
            
           
                echo "<tr><td style='text-align:right;' colspan=2>Total</td><td>".$sum."</td></tr>";
            
            ?>
            
        </tbody>
 </table>
    <button id='button-checkout'> Checkout </button>
</div>
<script>
        var back = document.getElementById("back-shopping");
        back.addEventListener('click', function(){
          window.location.href = 'online-store.php';  
        });
    
    var checkout = document.getElementById("button-checkout");
    checkout.addEventListener('click', function(){
       window.location.href = 'payment.php';
    })
    </script>

<style>

/*  Online Store */

    #back-shopping{
        width: 10%;
        margin: auto auto;
        
    }

.table-product {
    font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
    text-align: center;
         margin-right: auto;
    margin-left: auto;
}

.table-product td, .table-product th {
  border: 1px solid #ddd;
  padding: 8px;
    text-align:center;
}
    

.img-product{
    width: 75px;
    
}
.img-fluid{
    

    width: 5%;
    height:100%;
 
  display: block;
  position: absolute;
  left: calc((100% - 195px) / 2);
  
    
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
 
  margin-left: auto;
  margin-right: auto;
    
  
}

</style>
<?php 
    include 'footer.php';

?>