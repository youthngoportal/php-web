
<?php

$host="localhost"; // Host name
$usernamed="root"; // Mysql username
$password=""; // Mysql password
$db_name="youth"; // Database name
$tbl_name="ngo_lgn"; // Table name

// Connect to server and select databse.
$link = mysqli_connect("$host", "$usernamed", "$password")or die("cannot connect");
//mysqli_select_db("$link", "$db_name")or die("cannot select DB");

 $db_selected = mysqli_select_db($link, $db_name);
        if (!$db_selected) {
              die ('Can\'t select database: ' . mysql_error());
            }
            else {
            //    echo 'Database ' . $database . ' successfully selected!';
        }   

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($username);
$mypassword = stripslashes($password);
$myusername = mysqli_real_escape_string($link, $username);
$mypassword = mysqli_real_escape_string($link, $password);
$hashed_pass= SHA1($password);
//$mypassword = sha($link, $password);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$hashed_pass'";

echo "$sql";
$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['myusername']= "myusername";
	$_SESSION['mypassword']= "mypassword";
	$_SESSION['username']= "username";
	header("location:sayhello.php");
}
else {
	$message = "Wrong Username or Password";
	//echo "Wrong Username or Password";
}
?>