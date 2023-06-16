<?php 
    include "inc/header.php";
?>
    <?php if(!isset($_SESSION['email'])):?>
        <div class="nav-v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul>
                            <li><a href="#">T-SHIRT</a></li>
                            <li><a href="#">SHIRT</a></li>
                            <li><a href="#">PANTS</a></li>
                            <li><a href="#">HATS</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">clothing</a></li>
                            <li><a id="red" href="login.php">Login</a></li>
                            <li><a id="red" href="register.php">Register</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <a href="shoppingbag.php" id="shoppingb">SHOPPING BAG</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else:?>
        <h1>Artikli su:</h1>
    <?php endif;?>
<?php 
    include "inc/footer.php";
?>