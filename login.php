<?php
    $pageTitle = "Famous Quotes";
    $page="login";
    include("./template/header.html");
?>
<div class="login-container">
    <form class="login-form" id="" action="" method="">
      
        <input class="login-items" type="text" name="userName" required="required" placeholder="Username or Email">
        <br/>
       <br/>
        <input class="login-items" type="password" name="passwd" required="required" placeholder="Password">
        <br/>
        <br/>
        <input class="login-btn" id="btn-login" type="submit" name="submit" value="Login">
    </form>
</div>
<?php
    include("./template/footer.html");
?>