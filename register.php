<?php
$pageTitle = "Famous Quotes";
$page = "Registration";
include ("./template/header.html");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $phone = $_POST['phone'];
    
    $sqlConnect = mysqli_connect('localhost', 'root', 'trongminh', 'quoteDB');
    
    $query ="insert into users (username, password, email, phone_number, role) values ("
            . "'$username', '$password','$email','$phone', 'user');";
    

    if ($sqlConnect === false) {
        die("ERROR: " . mysqli_connect_error());
    }

    if (mysqli_query($sqlConnect, $query)) {
        echo "<br/><a href='userlogin.html'>Go to login</a>";
    } else {
        echo mysqli_error($sqlConnect);
    }
    mysqli_close($sqlConnect);
} else {
    ?>
    <!form method="POST" action="<?php $PHP_SELF; ?>">
    <form method="POST" action="">

        <input name="username" type="text" placeholder="username"><br/>
        <input name="password" type="password" placeholder="password"><br/>
        <input name="email" type="email" placeholder="email"><br/>
        <input name="phone" type="text" placeholder="Phone number"><br/>
        <input name="submit" type="submit" value="submit"><br/>

    </form>
    <?php
}
include("./template/footer.html");
?>