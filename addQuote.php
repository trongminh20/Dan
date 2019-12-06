<?php
    $pageTitle = "Famous Quotes";
$page = "ADDQUOTE";
    include ("./template/header.html");
?>
<?php
session_start();
if(isset($_POST['submit'])){
$quote = $_POST['quote'];
$author= $_POST['author'];
$email= $_POST['email'];

$sqlConnect = mysqli_connect('localhost', 'root', 'letmein', 'QouteDb');

if(mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

$query = "INSERT INTO `quotes` (`email`, `quote`, `author`)"
. "VALUES('$email','$quote','$author');";

	if (mysqli_query($sqlConnect, $query)) {
		echo "New record inseter successfuly";
                echo "<a href=\"./login.php\">back</a>";
	}
	else{
		echo mysqli_error($sqlConnect);
	}
	
}else{
?>


<?php
}
    include("./template/footer.html");
?>