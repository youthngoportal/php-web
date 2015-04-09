<?php
$page_title = "Say hello";
$message = '';
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
session_start();
//if (isset($_SESSION['myusername'])) {
    if(isset($_SESSION['myusername'])){
        //header("location:main_login.php");
    }
    else{
        Header("Location: login.php");
    }
//if(isset($_SESSION['sessionVar'])){
    $x = $_SESSION['sessionVar'];
    //echo "$x";
//}
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
       // echo "Connection to MySQL server " .$hostname . " successful!" . PHP_EOL;
            //post form data excluding image
            //if(isset($_POST['submit'])){ //check if form was submitted
               /* $input = $_POST['email'];
                $input1 = $_POST['tags'];*/
                //echo "$input1";
                $sql1 = "SELECT * from ngo_detail WHERE id='$x'";
                 
                $result=mysqli_query($link, $sql1);
                //echo "$sql1";

                $assoc = mysqli_query($link, $sql1);
                if($row = mysqli_fetch_array($assoc))
                {
                    $id = $row["id"];
                    $name = $row["name"];
                    $unique_id = $row["unique_id"];
                    $contact_name = $row["contact_name"];
                    $area = $row["area"];
                    $city = $row["city"];
                    $district = $row["district"];
                    $mobile = $row["mobile"];
                    $email = $row["email"];
                    $linka = $row["link"];
                    $tags = $row["tags"];
                }
                //1 sql
                $sql2 = "SELECT email from subscribe WHERE id='$x'";
                 
                $result=mysqli_query($link, $sql2);
                
                $assoca = mysqli_query($link, $sql2);
                
                /*if($row = mysqli_fetch_array($assoca))
                {
                    $emaila = $row["email"];
                    //echo "$emaila";
                }*/
                $ids=array(); 
                while($row = mysqli_fetch_assoc($assoca))  
                {
                    $ids[]=$row["email"]; 
                }
                //echo '"'.implode('","', $ids).'"';

                /*foreach($ids as &$value){
                   $value = "'$value'";
                }
                echo $comma_separated = implode(",", $ids);*/

                try{    
                     mysqli_query($link, $sql1);
                     mysqli_query($link, $sql2);
                     //$message ="yay";
                    // echo "new rocrd added";
                } catch (Exception $e){
                     //echo 'Caught exception: ',  $e->getMessage(), "\n";
                }

                //UPDATE DATA
                if(isset($_POST['update'])){ //check if form was submitted
                    //$input = $_POST['name']; //get input text
                    $input2 = $_POST['cname'];
                    $input3 = $_POST['area'];
                    $input4 = $_POST['city'];
                    $input5 = $_POST['district'];
                    $input6 = $_POST['mobile'];
                    $input7 = $_POST['email'];
                    $input8 = $_POST['site'];

                    if (!filter_var($input7, FILTER_VALIDATE_EMAIL)) {
                      $message = "Invalid email format";
                    }
                    //try4
                    // Checking the file was submitted
                    // check if a file was submitted
          

                    //oooo
                    //$sql="INSERT INTO ngo_detail (id, name, unique_id, contact_name, area, city, district, mobile, email, link, tags, verified) VALUES ('','$', '$','$input2', '$input3', '$input4', '$input5', '$input6', '$input7', '$input8', '$input9','')";

                    $sqlupd="UPDATE ngo_detail SET contact_name='$input2', area='$input3', city='$input4', district='$input5', mobile='$input6', email='$input7', link='$input8' WHERE id='$x'";
                    
                    try{
                        mysqli_query($link, $sqlupd);
                        //move_uploaded_file($picture_tmp, $path);
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
                /*if (mysqli_query($link, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($link);
                } */                       
                //$message = "Success! You entered: ".$sql;
           // }
        }

    $db_selected = mysqli_select_db($link, $database);
        if (!$db_selected) {
              die ('Can\'t select database: ' . mysql_error());
            }
            else {
            //    echo 'Database ' . $database . ' successfully selected!';
        }
?>

<!DOCTYPE html>
<html lang="en" ng-app="ngoapp">
<?php
require_once('templates/head.php');
?>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color: #F96900;">Youth</span> <span style="color: white;">NGO</span><span style="color: green;"> Portal</span></a>            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li><a href="ngos.php">NGO'S</a>
                    </li>
                    <li><a href="register.php">Process</a></li>
                    <li><a href="shareyourexp/" target="_blank">Share you exp.</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="blue">
        
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Say hello</h4>
                    <p>Use this form to send an email or updates to your subscriber.</p>
                    
                </div>
            </div>
            <!-- row -->
        
        <!-- container -->
    </div>
    <!--  bluewrap -->


    <div class="container main">
        <div class='row'>
            <div class="col-md-6 ngoblock">
                <h2><b><?php echo "$name"?></b></h2>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>This tool is useful when your NGO wants to send an email to multiple subscribers.<br> You can notify your users about new job openings, new projects, or just say hi. <br> Please do not spam.<br>
                            Happy emailing.
                            </p>
                            <hr>
                        </div>
                        <div class="col-md-12 settings">
                            <h3><b>Settings</b></h3>
                            <button name="EDIT" class="btn btn-block btn-md btn-success bts" data-toggle="modal" data-target="#myModal">
                            Edit details</button>
                            <button name="DELETE" class="btn btn-block btn-md btn-danger bts" data-toggle="modal" data-target="#tyModal">
                            Remove my NGO</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 emailblock">
                <h2>Send an email</h2>
                <div class='form-group'>
                        <h4 for='example_email'>TO</h4>
                        <input type='text' id='example_email' name='example_email' class='form-control' value='[<?php echo '"'.implode('","', $ids).'"';?>]' autofocus>
                        <span class="help-block">Above emails are your pre-selected subscriber/s. <b>You can also add more emails.</b></span>
                        <h4 for='example_email'>Subject</h4>
                        <input type='text' id='subject' name='subject' class='form-control'>
                        <span class="help-block">Type your subject.</span>
                        <h4 for='example_email'>Message</h4>
                        <textarea type='text' id='Message' name='Message' class='form-control' rows='3'></textarea>
                        <span class="help-block">Type the message.</span>
                        <button name="submit" class="btn btn-sm btn-primary bts" type="submit">
                            SEND</button>
                        
                    <!-- <div class='col-sm-offset-2 col-sm-4'>
                        <h4>Current email addresses</h4>
                        <pre id='current_emails'></pre>
                    </div> -->
                </div>
            </div>
            
        </div>
    </div>
  <!-- Row end -->

    <?php
    require_once('templates/footer.php');
    ?>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Change NGO details!</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal row-border" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                      <label class="col-md-2 control-label">NGO Name</label>
                      <div class="col-md-10">
                        <input name="name" class="form-control" placeholder="Type your ngo name" type="text" required disabled value="<?php echo $name;  ?>">
                        <span class="help-block">Type the name of orgranization</span>
                      </div>
                    </div>
                
                    <div class="form-group">
                      <label class="col-md-2 control-label">Contact person</label>
                      <div class="col-md-10">
                        <input class="form-control" name="cname" type="text" value="<?php echo $contact_name;  ?>" required>
                        <span class="help-block">Please provide the name of authorised person whom we can contact.</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Address</label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-xs-5">
                            <input class="form-control" name="area" placeholder="Area" type="text" value="<?php echo $area;  ?>" required>
                            <span class="help-block">Enter local area</span>
                          </div>
                          <div class="col-xs-3">
                            <input class="form-control" name="city" placeholder="Town/City" type="text" value="<?php echo $city;  ?>" required>     
                            <span class="help-block">Enter city or town name</span>
                          </div>
                          <div class="col-xs-4">                          
                            <?php

                                $sql = "SELECT district FROM guj_ctd";
                                $result = mysqli_query($link, $sql);

                                echo "<select name='district' data-width='100%' class='selectpicker' data-live-search='true'>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['district'] . "'>" . $row['district'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                                                            
                            <span class="help-block">Select your District</span>
                            <!-- <input class="form-control" placeholder="District" type="text"> -->
                          </div>
                        </div>
                         <span class="help-block">Your NGO must have office in Gujarat.</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Contact</label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-xs-6">
                            <input class="form-control" name="mobile" type="text" value="<?php echo $mobile;  ?>" required>
                            <span class="help-block">Mobile number</span>
                          </div>
                          <div class="col-xs-6">
                            <input class="form-control" name="email" placeholder="xyz_example@gmail.com" type="text" required value="<?php echo $email;  ?>">
                            <span class="help-block">Email address</span>
                          </div>                         
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Website link</label>
                      <div class="col-md-10">
                        <input name="site" class="form-control" value="<?php echo $linka;  ?>" type="text">
                        <span class="help-block">Provide us a link of your ngo website.</span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-10 ">
                            <button type="submit" name="update" class="btn btn-success">UPDATE</button>
                            <button type="dismiss" name="cancel" class="btn btn-danger">CANCEL</button>
                        </div>                 
                    </div>
                  </form>
                </div>    
            </div>
        </div>
    </div>
    <div class="modal fade" id="tyModal" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-red-title">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Remove your NGO!</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <h4>Please send an email to <b>contact[at]youthngoportal.com</b> for removing your ngo from our server.</h4>
                        <p><br>Thanks<br>YouthNGOportal.com Team</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>

  </body>
</html>