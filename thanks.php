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
        die('Connection failed: ' . mysql_error());
    }
    else{
        echo "Connection to MySQL server " .$hostname . " successful!
    " . PHP_EOL;
            
            //post form data excluding image
            if(isset($_POST['submit'])){ //check if form was submitted
                $input = $_POST['email'];

                $input1 = $_POST['tags'];
                echo "$input1";
                //try4
                // Checking the file was submitted
                // check if a file was submitted

               // $sql1 = "SELECT id from ngo_details WHERE name='$input1'";
                //oooo
               
                $sql="INSERT INTO subscribe (sid, id, email) VALUES ('','', '$input')";
                //echo "$sql";
                try{
                    mysqli_query($link, $sql);
                  //  mysqli_query($link, $sql1);
                    //move_uploaded_file($picture_tmp, $path);
                  // echo "new rocrd added";
                } catch (Exception $e){
                 //   echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
                /*if (mysqli_query($link, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($link);
                } */                       
                //$message = "Success! You entered: ".$sql;
            }
        }

    $db_selected = mysqli_select_db($link, $database);
        if (!$db_selected) {
              die ('Can\'t select database: ' . mysql_error());
            }
            else {
            //    echo 'Database ' . $database . ' successfully selected!';
        }    
?>