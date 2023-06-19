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
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                    <h1><?php echo $name?></h1>
                    <img src="<?php echo $img?>" alt="" >
                    <?php foreach ($sizes as $size):?>
                        <button class="size"><?php echo $size;?></button>
                        <?php endforeach;?>

    <script src="js/productpage.js"></script>
</body>
</html>
<?php 
    include "inc/footer.php"
?>