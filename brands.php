<?php 
    include "inc/header.php";
    require_once 'functions/db.php';
    $sql = "SELECT * from brands";
    $all_brands = $con->query($sql);
?>
<style>
    .brands{
        margin-top: 50px;
        margin-bottom: 50px;
    }
    img {
    width: 80%;
    /* width: 275px; */
    height: 150px;
    /* height: 80%; */
    background-size: cover;
    }
    .name{
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .name a{
        text-decoration: none;
        color: black;
    }
</style>
<div class="brands">
    <div class="container">
        <div class="row">
            <?php
                while($row = mysqli_fetch_assoc($all_brands)){
            ?>
                <div class="col-md-3">
                    <div class="artim<?php echo $row["idBrand"]?>">
                    <a name = "<?php echo $row["idBrand"]?>" class="productLink" href="#"><img src="img/<?php echo $row["brandImg"]?>" alt="" class="image"></a>
                    <p class="name"><a href="#" name="<?php echo $row["idBrand"]?>"><?php echo $row["brandName"]?></a></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<script src="js/brandpage.js"></script>
<?php 
   include "inc/footer.php"
?>
