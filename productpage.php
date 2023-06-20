<?php 
    include "inc/header.php";   
    require_once 'functions/db.php';
//   $sql = "SELECT * from artikli WHERE sex = 'men'";
//   $all_product = $con->query($sql);
    $idArtikal = $_GET['idArtikal'];
    $idArtikal = base64_decode($idArtikal);
    $sql = "SELECT * FROM artikli WHERE idArtikal = $idArtikal";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $name =  $row["name"];
            $idArtikal = $row['idArtikal'];
            $img = $row['image'];
            $sizes = explode(",",$row['size']);
            $price = $row['oldprice'];
            $discount = $row['discount'];
            $newPrice = discount($price,$discount);
            $sex = $row['sex'];
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <title>Document</title>
</head>
<body>

    
                   
    <?php foreach ($sizes as $size):?>
    <!-- <button class="size"><?php echo $size;?></button> -->
    <?php endforeach;?>
    <!-- <main>         
        <div class="product-image">
        <img src="<?php echo $img?>" alt="" >
        </div>
        <div class="product-info">
        <h4>Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo risus id faucibus tincidunt.</p>

        <h2>Features</h2>
        <ul>
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
        </ul>

        <h2>Price</h2>
        <?php if($newPrice == $row["oldprice"]):?>
        <h6 id="newprice"><?php echo $row["oldprice"]?> RSD</h6>
        <?php else:?>
        <h6 id="oldprice"><?php echo $row["oldprice"]?> RSD</h6>
        <h6 class="newprice"><?php echo $newPrice?> RSD</h6>
        <h5 class="discount"><?php echo $row["discount"]?>%</h5>
        <?php endif;?>

        <button>Add to Cart</button>
        </div> -->
    </main>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="<?php echo $img?>" alt="" >
            </div>
            <div class="col-md-6">
                <div class="product-description">
                    <h2 class="title"><?php echo $name?></h2>
                    <p>For <?php echo $sex?></p>
                    <?php if($newPrice == $price):?>
                    <h6 id="price">Price: <?php echo $price?> RSD</h6>
                    <?php else:?>
                    <h6 id="oldprice">Old price: <?php echo $price?> RSD</h6>
                    <h6 class="newprice">New price: <?php echo $newPrice?> RSD</h6>
                    <h5 class="discount">Discount <?php echo $discount?>%</h5>
                    <?php endif;?>
                    <?php foreach ($sizes as $size):?>
                    <button class="size"><?php echo $size;?></button>
                    <?php endforeach;?>
                    <h4 class="description">Description</h2>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo risus id faucibus tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo risus id faucibus tincidunt.</p>

                </div>
            </div>
        </div>
    </div>
    <script src="js/productpage.js"></script>
</body>
</html>
<?php 
    include "inc/footer.php"
?>