<?php 
    include "inc/header.php";
    include "funtion/init.php";
    session_destroy();
    redirect("index.php");
?>

<?php 
    include "inc/footer.php"
?>