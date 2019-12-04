<?php
$pageTitle = "Famous Quotes";
$page = "Logout";
include ("./template/header.html");

if(isset($_COOKIE['user'])){
    setcookie('user',FALSE, time()-300);
}


echo "you are logged out.";

include("./template/footer.html");