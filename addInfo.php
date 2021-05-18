<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//header("Location: main.html");
$con = mysqli_connect('localhost','root','','test2');
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
  echo "\n";
}
else {
  echo "Connected successfully \n";
}

// get the post records
$txtArtist = $_POST['txtArtist'];
$txtImg = $_POST['txtImg'];
$txtInfo = $_POST['txtInfo'];

//echo $txtName;
echo $txtArtist;
echo $txtImg;
echo $txtInfo;
// database insert SQL code
$sql = "INSERT INTO `hof`(`name`, `info`, `picLoc`) VALUES ('$txtArtist','$txtInfo','txtImg')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Page created")</script>';
  echo '<script>window.location.href = "hof.php"</script>';
}
else {
  echo '<script>alert("Operation Failed")</script>';
  echo '<script>window.location.href = "addInfo.html"</script>';
}

?>
