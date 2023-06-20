<?php 
    include "inc/header.php";
    require_once 'functions/db.php';
    $sql = "SELECT * from brands";
    $all_brands = $con->query($sql);
?>

<div class="container">
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($all_brands)){
        ?>
            <div class="col-md-3">
                <div class="artim<?php echo $row["idBrand"]?>">
                
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php 
   include "inc/footer.php"
?>
