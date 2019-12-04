<?php
    include ("./template/header.html");
?>
<?php

if(isset($_POST['submit'])){
$Quote = $_POST['quote'];
$Author= $_POST['author'];
$Email= $_POST['email'];

$sqlConnect = mysqli_connect('localhost', 'root', 'trongminh', 'quoteDB');

if(mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

$query = "INSERT INTO `quotes` (`email`, `quote`, `author`,`date`)"
. "VALUES('$Email','$Quote','$author','GETDATE()');";

	if (mysqli_query($mysqli, $query)) {
		echo "New record inseter successfuly";
	}
	else{
		echo mysqli_error($mysqli);
	}
	
}else{
?>


<?php
}
    include("./template/footer.html");
?>