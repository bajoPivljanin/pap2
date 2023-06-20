<?php 
    include "inc/header.php"
?>
<?php
    validate_user_login();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styleLoginRegister.css">
        <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Kanit&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <title>Login</title>
    </head>
    <body>
       <h3><?php display_message();?></h3>
        <?php if(!isset($_SESSION['email'])):?>
        <div class="containeer">
            <form action="" method="POST">
                <input type="text" placeholder='Email' class='text' id='email' name="email" required>
                <input type="password" name="password" placeholder="Password" class='password' required>
                <input type="submit" name="login-submit" placeholder="Login in" value="Login" class='btn-login' id='do-login'>
            </form>
        </div>
        <?php else:
            redirect("index.php");
        ?>
        <?php endif;?>
    </body>
    </html>
<?php 
   include "inc/footer.php"
?>