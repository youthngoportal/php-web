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
    if(isset($_POST['submitb'])){ //check if form was submitted
        $input = $_POST['name']; //get input text
        $input1 = $_POST['ngoid'];
        $input2 = $_POST['cname'];
        $input3 = $_POST['area'];
        $input4 = $_POST['city'];
        $input5 = $_POST['district'];
        $input6 = $_POST['mobile'];
        $input7 = $_POST['email'];
        $input8 = $_POST['site'];
        $input9 = $_POST['tags1'];

        $sql="INSERT INTO ngo_detail (id, name, unique_id, contact_name, area, city, district, mobile, email, link, tags, verified) VALUES ('','$input', '$input1','$input2', '$input3', '$input4', '$input5', '$input6', '$input7', '$input8', '$input9','')";

        try{
            mysqli_query($link, $sql);
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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="youth ngo portal for youth development and youth engagement. connect with ngos. listing of ngo whose primary work is education, poverty, girls education, ">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>NGO List - Youth NGO portal</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-select.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="assets/js/libs/angular.min.js"></script>
    <script src="assets/js/app.js"></script>
    


    <!--  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

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
                <a class="navbar-brand" href="index.html"><span style="color: #F96900;">Youth</span> <span style="color: white;">NGO</span><span style="color: green;"> Portal</span></a>            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a>
                    </li>
                    <li><a href="ngos.html">NGO'S</a>
                    </li>
                    <li><a href="register.html">Register NGO</a>
                    <li class="active"><a href="add.php">Add NGO</a></li>
                    <li><a href="shareyourexp/">Share you exp.</a></li>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="blue">
        
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Add your NGO's </h4>
                    <p>Submit your NGO on youthngoportal.com</p>
                    
                </div>
            </div>
            <!-- row -->
        
        <!-- container -->
    </div>
    <!--  bluewrap -->


    <div class="container main">
    <br>
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <i class="icon-calendar"></i>
                  <h3 class="panel-title">Submit your NGO</h3>
                  <p class="text-muted panel-title">NOTE:   This information will be verified before publishing on youthngoportal.com</p>
                </div>
                
                
                <div class="panel-body">
                  <form class="form-horizontal row-border" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                      <label class="col-md-2 control-label">NGO Name</label>
                      <div class="col-md-10">
                        <input name="name" class="form-control" placeholder="Type your ngo name" type="text">
                        <span class="help-block">Type the name of orgranization</span>
                      </div>
                    </div>
                
                    <div class="form-group">
                      <label class="col-md-2 control-label">Unique Id of NGO</label>
                      <div class="col-md-10">
                        <input name="ngoid" class="form-control" type="text">
                        <span class="help-block">Please provide the unique id of your ngo.<br>Example: GJ/2014/0077577</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Contact person</label>
                      <div class="col-md-10">
                        <input class="form-control" name="cname" type="text">
                        <span class="help-block">Please provide the name of authorised person whom we can contact.</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Address</label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-xs-5">
                            <input class="form-control" name="area" placeholder="Area" type="text">
                            <span class="help-block">Enter local area</span>
                          </div>
                          <div class="col-xs-3">
                            <input class="form-control" name="city" placeholder="Town/City" type="text">     
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
                            <input class="form-control" name="mobile" value="+91" type="text">
                            <span class="help-block">Mobile number</span>
                          </div>
                          <div class="col-xs-6">
                            <input class="form-control" name="email" placeholder="xyz_example@gmail.com" type="text">
                            <span class="help-block">Email address</span>
                          </div>                         
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">Website link</label>
                      <div class="col-md-10">
                        <input value="http://" name="site" class="form-control" type="text">
                        <span class="help-block">Provide us a link of your ngo website.</span>
                      </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Type of work</label>
                        <div class="col-md-10">
                           <?php
                                    $sqlt = "SELECT name FROM tags";
                                    $result1 = mysqli_query($link, $sqlt);
                                    echo "<select name='tags1' title='Select your cause...' class='selectpicker' data-width='50%' data-live-search='true'>";
                                    while ($row = mysqli_fetch_array($result1)) {
                                        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                    }
                                    echo "</select>";
                            ?>
                        <span class="help-block">Please select the main categories which define your NGO.</span>
                      </div>

                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-10 ">
                            <button type="submit" name="submitb" class="btn btns btn-block btn-primary">SUBMIT</button>
                        </div>                 
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
  <!-- Row end -->
        
    </div>

    </div>
    <!-- container -->


	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				copyright youth ngo portal - 2015
                <p><?=date('l, F jS, Y'); ?>.</p>
				<!-- <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a> -->
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->


	<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
                </div>
                <div class="modal-body">
                    <p>You'll be the first to know when Shopaholic launches.</p>                     
                    <p>In the meantime, any <a href="http://shopaholic.uservoice.com/" target="_blank">feedback</a> would be much appreciated.</p>
                </div>    
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.js"></script>
    <script type="text/javascript">
               $('.selectpicker').selectpicker({
                    dropupAuto: false
                   
                });
    </script>
  </body>
</html>
<?mysqli_close($link);
?>