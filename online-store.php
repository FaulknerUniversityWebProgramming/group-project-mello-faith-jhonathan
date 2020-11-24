<?php 
    include 'myDB.php';
    include 'header.php';
    include 'navbar.php';
   
  
?>
<h1>Online Store</h1>
<br>
<div style="overflow-x:auto;">

 <table class="table-product">
        <thead>
            <tr>
                <th colspan=2>Product</th>
                <th>Price</th>
                <th>Description</th>
                <th>Add to Cart</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = $conn->query("SELECT * FROM Product");
                foreach($query as $product){
                    //print_r($dept);
                    echo "<tr  style='text-align:center;'><td><img class='img-product' src='".$product['image']."'></td><td>".$product['productName']."</td><td>".$product['price']."</td><td>".$product['description']."</td>";
                    echo "<td><a href='#' onclick='addToCart(\"".$product['productName']."\",\"".urlencode($product['idProduct'])."\")'>Add to Cart</a></td>";
                   
                }
            ?>
        </tbody>
 </table>
</div>

<script>
        function addToCart(name, id){
            if(confirm("Do you want to add " + name + " to the cart?")){
                window.location.href = "checkout.php?idProduct=" + id;
            }
            
        }
    </script>

<style>

/*  Online Store */



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