<?php
    $pageTitle='FamousQuotes';
    $thisPage ='login';
    include ('./includes/header.html');
?>

<div id="login-form">
    <img id="login-icon" src="https://bit.ly/2aQB5uu" alt="login icon"> 
    <form>
        <input class="login-input email-area" type="text" placeholder="Username">

        <input class="login-input" type="password" placeholder="Password">

        <input class="login-input" type="submit" value="Login" class="btn-login">
        <a href="#">Forgot password?</a> 
    </form>
</div>