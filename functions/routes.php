<?php

return [
    '/'=>function(){
        redirect("index.php");
    },
    '/login'=>function(){
        redirect("login.php");
    },
    '/register'=>function(){
        redirect("register.php");
    },
    '/logout'=>function(){
        redirect("logout.php");
    },
    '/shop'=>function(){
        redirect("shop.php");
    },
    '/about'=>function(){
        redirect("about.php");
    },
    '/bag'=>function(){
        redirect("shoppingbag.php");
    },
];