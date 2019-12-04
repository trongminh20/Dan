<?php
$pageTitle = "Famous Quotes";
$page = "Registration";
include ("./template/header.html");


session_start();
if ((!filter_input(INPUT_POST, 'username')) || (!filter_input(INPUT_POST, 'password'))) {
    header("Location: userlogin.php");
    exit;
}

//connect to server and select database

if (isset($_POST['submit'])) {
    $sqlConnect = mysqli_connect('localhost', 'root', 'trongminh', 'quoteDB');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }


//$userName = filter_input(INPUT_POST, 'username');
    $name = $_POST['username'];
    $userpasswd = $_POST['password'];

    $query = "select username from users where password = PASSWORD('$userpasswd') and username ='$name';";

    $result = mysqli_query($sqlConnect, $query) or die(mysqli_error($sqlConnect));

    $_SESSION['username'] = $name;
//get the number of rows in the result set; should be 1 if a match

    if (mysqli_num_rows($result) == 1) {

        //if authorized, get the values of f_name l_name
        while ($info = mysqli_fetch_array($result)) {
            $name = stripslashes($info['username']);
        }


        //set authorization cookie using curent Session ID
        setcookie("auth", session_id(), time() + 60 * 30, "/", "", 0);

        //create display string
        ?>
        <h2>list quote</h2>
        <?php
        $queryQuote = "SELECT * 
                        FROM USERS u, quotes q
                        WHERE u.email = q.email;
                        ";
        //$result2 = mysqli_query($sqlConnect, $query) or die(mysqli_error($sqlConnect));

        if ($result2 = $sqlConnect->query($queryQuote)) {
            while ($row = $result2->fetch_assoc()) {
                $quote = stripslashes($row['quote']);
                $auth = stripslashes($row['author']);

                echo
                "<div class=\"quote-list\">"
                . "<tr style=\"font-size:15px;border-bottom: 1px solid black;\">"
                . "<td>" . $quote . "</td>"
                . "<td>--" . $auth . "--</td>"
                . "</tr> "
                . "</div>";
            }

            $result->free();
            //setcookie("auth", session_id(), time() + 60 * 30, "/", "", 0);
        }
        ?>
        <h2>adding quote</h2>
        <form name="myForm" method="POST" action="addQuote.php">
            Email:<br>
            <input type="text" name="email" value="">
            <br>
            Quote:<br>
            <input type="text" name="quote" value="">
            <br>
            Author:<br>
            <input type="text" name="author" value="">
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form> 
        <form action="./logout.php" method="post">
            <input type="submit" name="logout" value="logout">

        </form>

        <?php
    } else {
        echo mysqli_error($sqlConnect);
    }
}
?>
<?php
include('./template/footer.html');
?>
