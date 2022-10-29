
<?php

$databaseHost = '127.0.0.1';//or localhost

$databaseName = 'test'; // your db_name

$databaseUsername = 'root'; // root by default for localhost 

$databasePassword = '';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

 



if(isset($_POST['sub']))

{

$uname = $_POST['Username'];

$upassword = $_POST['password'];

$res = mysqli_query($mysqli,"select* from user where uname='$uname'and upassword='$upassword'");

$result=mysqli_fetch_array($res);

if($result)

{

echo "You are login Successfully ";

//header("location:my-account.php");   // create my-account.php page for redirection 

	}

else

{

	echo "failed ";

}

}

?>
