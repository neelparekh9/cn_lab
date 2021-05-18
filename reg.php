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
$txtEmail = $_POST['txtEmail'];
$txtPwd = $_POST['txtPwd'];

//echo $txtName;
echo $txtEmail;
echo $txtPwd;
// database insert SQL code
$sql = "INSERT INTO `creds`(`email`, `password`) VALUES ('$txtEmail','$txtPwd')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Record inserted")</script>';
  echo '<script>window.location.href = "login.html"</script>';
}
else {
  echo '<script>alert("Insertion Failed")</script>';
  echo '<script>window.location.href = "login.html"</script>';
}

?>
