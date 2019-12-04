<?php

$pageTitle = "Famous Quotes";
$page = "Home";
// include("./template/header.html");

session_start();

$sqlConnect = mysqli_connect('localhost', 'root', 'trongminh', 'quoteDB');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM quotes";

$result = mysqli_query($sqlConnect, $query) or die(mysqli_error($sqlConnect));

if ($result = $sqlConnect->query($query)) {
    while ($row = $result->fetch_assoc()) {
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

