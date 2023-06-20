<?php 
    include "inc/header.php";

?>
    <?php if(!isset($_SESSION['email'])):
        redirect("login.php");
    
    ?>
    <?php else:?>
        <h1>Artikli su:</h1>
    <?php endif;?> 
<?php 
    include "inc/footer.php";
?>