<?php
    $pageTitle = "Famous Quotes";
    $page="login";
    include("./template/header.html");
?>
<div class="login-container">
    <form class="login-form" id="" action="" method="">
        <label class="">User name:</label>
        <input class="login-items" type="text" name="userName" placeholder="Username or Email">
        <br/>
        <label>Password:</label>
        <input class="login-items" type="password" name="passwd" placeholder="Password">
        <br/>
        <input class="login-items" id="btn-login" type="submit" name="submit" value="Submit">
    </form>
</div>
<?php
    include("./template/footer.html");
?>