<?php 
    include "inc/header.php";   
    require_once 'functions/db.php';
    $sql = "SELECT * from artikli WHERE discount > 0";
    $all_product = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Kanit&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <title>For Man</title>
</head>
<body>
    <div class="articlesswipe">
            <h2>Articles for <span class="fire">sale</span></h2>
            
            <div class="container">
                <div class="row">
                <?php
                    while($row = mysqli_fetch_assoc($all_product)){
                ?>
                    <div class="col-md-3">
                        <div class="artim<?php echo $row["idArtikal"]?>">
                            <a href="#"><img src="<?php echo $row["image"]?>" alt="" class="image"></a>
                            <p class="name"><a href="#"><?php echo $row["name"]?></a></p>
                            <h6 id="oldprice"><?php echo $row["oldprice"]?> RSD</h6>
                            <h6 class="newprice"><?php echo $row["newprice"]?>RSD</h6>
                            <h5 class="discount"><?php echo $row["discount"]?>%</h5>
                        </div>
                    </div>
                    <?php
                     }
                    ?>
                </div>
            </div>
        </div>
</body>
</html>

<?php 
    include "inc/footer.php"
?>