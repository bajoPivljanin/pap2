<?php 
    include "inc/header.php";

    // $routes = include_once 'routes.php';
    // run($_SERVER['REQUEST_URI'],$routes);
 require_once 'functions/db.php';
 $sql = "SELECT * from artiklitest";
 $all_product = $con->query($sql);

?>
        <div class="containerr">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <div class="hero">
                        <h1>"One day you will be at the place you always wanted to be"</h1>
                        <h4>moncler</h4>
                        <button id="heroshop">SHOP</button>
                     </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="hero2">
                        <h1>test</h1>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="hero3">
                        <h1>test2</h1>
                    </div>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
        </div>

        <div class="on-sale">
            <h1>ON <span>SALE</span></h1>
            <p>New articles are on sale <br> Check it out !</p>
            <a href="#">SHOP  NOW</a>
        </div>

        <div class="articles-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-art1">
                            <h2>CP Company: <br> New Collection</h2>
                            <img src="img/cp.webp" alt="" id="imgcp1">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit <br> hic totam nemo aspernatur</p>
                            <a href="#">SHOP NOW</a>
                        </div>              
                    </div>
                    <div class="col-md-6"> 
                        <div class="right-art1">
                            <h2 id="miss">Don't miss out</h2>
                            <img src="img/cp2.webp" alt="" id="upimg1">
                            <br>
                            <img src="img/cp3.webp" alt="" id="upimg2"> 
                            <a href="#">CHECK IT NOW</a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit
                              <br>  hic totam nemo aspernatur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="articlesswipe">
            <h2>Recommended articles</h2>
            
            <div class="container">
                <div class="row">
                <?php
                    while($row = mysqli_fetch_assoc($all_product)){
                    $newPrice = discount($row["oldprice"],$row["discount"]);
                ?>
                    <div class="col-md-3">
                        <div class="artim<?php echo $row["idArtikal"]?>">
                            <a name = "<?php echo $row["idArtikal"]?>" class="productLink" href="#"><img src="<?php echo $row["image"]?>" alt="" class="image"></a>
                            <p class="name"><a href="#" name="<?php echo $row["idArtikal"]?>"><?php echo $row["name"]?></a></p>
                            <?php if($newPrice == $row["oldprice"]):?>
                            <h6 id="newprice"><?php echo $row["oldprice"]?> RSD</h6>
                            <?php else:?>
                            <h6 id="oldprice"><?php echo $row["oldprice"]?> RSD</h6>
                            <h6 class="newprice"><?php echo $newPrice?>RSD</h6>
                            <h5 class="discount"><?php echo $row["discount"]?>%</h5>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php
                     }
                    ?>
                </div>
            </div>
        </div>
        


<?php 
    include "inc/footer.php"
?>