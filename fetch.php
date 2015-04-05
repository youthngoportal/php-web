<?php

error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="localhost";
$database="youth";
$username="root";
$password="";


//DO NOT EDIT BELOW THIS LINE
$link = mysqli_connect($hostname, $username, $password, $database);
if (!$link) {
   // die('Connection failed: ' . mysql_error());
    }
    else{
   //      echo "Connection to MySQL server " .$hostname . " successful!
    //" . PHP_EOL;

    	$sql="SELECT * from ngo_detail WHERE verified='1'";

        try{
            $result = mysqli_query($link, $sql);
            $data = array();

			while ($row = mysqli_fetch_array($result)) {
			  $data[] = $row;
			}
			    print json_encode($data);
          //  echo "new rocrd added";
        } catch (Exception $e){
           // echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        /*if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        } */                       
        //$message = "Success! You entered: ".$sql;
}


$db_selected = mysqli_select_db($link, $database);
    if (!$db_selected) {
          die ('Can\'t select database: ' . mysql_error());
        }
        else {
        //    echo 'Database ' . $database . ' successfully selected!';
    }    


/*
//database settings
$connect = mysqli_connect("hostname", "username", "password", "dbname");

$result = mysqli_query($connect, "select * from students");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);*/

?>

