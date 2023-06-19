<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Shop</title>
</head>
<body>

    <?php 
    include "inc/header.php"
?>

    
    <div class="shop-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>MAN</h1>
                    <div class="man">
                        <a href="man.php"><img src="imgShop/man.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>WOMAN</h1>
                    <div class="woman">
                        <a href="woman.php"><img src="imgShop/woman.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>KID</h1>
                    <div class="kid">
                        <a href="kid.php"><img src="imgShop/kid.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    include "inc/footer.php"
    ?>
</body>

<script src="js/shop.js"></script>
</html>