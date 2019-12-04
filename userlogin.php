<?php
    $pageTitle = "Famous Quotes";
    $page="login";
    include("./template/header.html");
?>
<div class="login-container">
    <form class="login-form" id="" action="./login.php" method="POST">
      
        <input class="login-items" type="text" name="username" required="required" placeholder="Username">
        <br/>
       <br/>
        <input class="login-items" type="password" name="password" required="required" placeholder="Password">
        <br/>
        <br/>
        <input class="login-btn" id="btn-login" type="submit" name="submit" value="Login">
    </form>
    <a href="register.php">Create an account</a>
</div>
<?php
    include("./template/footer.html");
?>