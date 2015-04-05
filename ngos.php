<?php
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="localhost";
$database="youth";
$username="root";
$password="";
$page_title = "NGO List - Youth NGO portal";

//DO NOT EDIT BELOW THIS LINE
$link = mysqli_connect($hostname, $username, $password, $database);
if (!$link) {
   // die('Connection failed: ' . mysql_error());
    }
    else{
   //      echo "Connection to MySQL server " .$hostname . " successful!
    //" . PHP_EOL;

    //post form data excluding image
            if(isset($_POST['subcribe'])){ //check if form was submitted
                $input = $_POST['email'];
                //try4
                // Checking the file was submitted
                // check if a file was submitted

               // $sql1 = "SELECT id from ngo_details WHERE name='{{ngo_details.name}}'";
                //oooo
                //echo "$sql1";
                $sql="INSERT INTO subscribe (sid, id, email) VALUES ('','54', '$input')";
                
                try{
                    mysqli_query($link, $sql);
                    //mysqli_query($link, $sql1);
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
                <a class="navbar-brand" href="index.html"><span style="color: #F96900;">Youth</span> <span style="color: white;">NGO</span><span style="color: green;"> Portal</span></a>            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li class="active"><a href="ngos.php">NGO'S</a>
                    </li>
                    <li><a href="register.php">Register NGO</a> </li>
                    <li><a href="add.php">Add NGO</a></li>
                    <li><a href="shareyourexp/">Share you exp.</a></li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="blue">
        
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Find NGO's </h4>
                    <p>Search and sort NGO by name and location.</p>
                </div>
            </div>
            <!-- row -->
        
        <!-- container -->
    </div>
    <!--  bluewrap -->


    <div class="container">

        <div class="row">

        </div>
        <!-- row -->
        <div class="row" id="userList">
            <br>
            <br>
            <div ng-controller="dbCtrl">
                <div class="clearfix">
                    <ul class="nav nav-pills pull-right">
                        <li ng-class="{'active':mode==1}" title="list"><a href="#" ng-click="mode=1"><i class="fa fa-list fa-4x"></i></a>
                        </li>
                        <!-- <li ng-class="{'active':mode==2}" title="thumbs"><a href="#" ng-click="mode=2"><i class="fa fa-th fa-4x"></i></a>
                        </li> -->
                        <li ng-class="{'active':mode==3}" title="big thumbs"><a href="#" ng-click="mode=3"><i class="fa fa-th-large fa-4x"></i></a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline">
                         <i class="fa fa-search"></i>
                        <input ng-model="query" type="text" placeholder="Search Here" autofocus>
                </form>
                <hr>

                <div class="row">
                    <!-- <form class="form-inline">
                        <input ng-model="query" type="text" placeholder="Search Here" autofocus>
                    </form>
                    <br> -->

                    <div ng-repeat-start="ngo_details in data | filter:query |orderBy:'city' " ng-class="{'col-xs-4':mode==1, 'col-xs-3':mode==2, 'col-xs-6':mode==3}">

                        <div class="well">
                        	<a href="" data-toggle="modal" data-target="#myModal{{$index}}"><img src="{{ngo_details.images_path}}" class="img-responsive"></a>
                            <h3 class="cap" ng-hide="mode==1">{{ngo_details.name}}</h3>
                            <!-- <h4 class="text-muted">{{ngo.information}}</h4> -->

                            <p ng-show="mode==3">
                                {{ngo_details.area}}, {{ngo_details.city}},<br>
                                {{ngo_details.district}}, {{ngo_details.state}}<br>
                                <b>{{ngo_details.email}}</b><br >
                                <b>{{ngo_details.mobile}}</b>
                            </p>

                                <!-- MOODAL MODAL MODAL -->
                                <div id="myModal{{$index}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h1 id="myModalLabel" class="text-center">{{ngo_details.name}}</h1>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xs-4 col-xs-offset-4 text-center"><img src="{{ngo_details.images_path}}" class="img-thumbnail img-responsive img-circle">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row after-modal">
                                                    <div class="col-xs-6">
                                                        <p><i class="fa fa-map-marker"></i><b>  Address:</b></p> 
                                                        <p>{{ngo_details.area}}, {{ngo_details.city}}, {{ngo_details.state}}</p>
                                                        <p><i class="fa fa-phone"></i><b>  Contact:</b></p> 
                                                        <p>{{ngo_details.contact_name}} - {{ngo_details.mobile}}</p>
                                                        <p><i class="fa fa-envelope"></i><b>  Email</b></p>
                                                        <p>{{ngo_details.email}}</p>
                                                         
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p><b>Main Area of work:</b></p>
                                                        <p>{{ngo_details.tags}}</p>
                                                        <p><i class="fa fa-external-link"></i><b>  Website link:</b></p>
                                                        <a href="{{ngo_details.link}}">{{ngo_details.link}}</a><br><br>
                                                        <form class="form-horizontal row-border" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                                            <p><i class="fa fa-keyboard-o"></i><b>   Subscribe to latest update:</b></p>
                                                            <input class="form-control" name="email" placeholder="xyz_example@gmail.com" type="text">
                                                            <span class="help-block">Please enter your email address to receive latest updates from <b>{{ngo_details.name}}</b></span>
                                                            <button type="submit" name="subscribe" class="btn btnsub btn-block btn-primary">SUBSCRIBE</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="modal-footer bg-info">
                                            <button class="btn btn-sm btn-default center-block" data-dismiss="modal" aria-hidden="false">Okay!</button>
                                        </div> -->
                                    </div>
                                </div>
                        </div>
                        <!--/modal-->
                        </div>
                   </div>

                    <div ng-class="{'col-xs-8':mode==1, 'col-xs-6':mode==3}" ng-hide="mode==2||mode==3">
                        <h2 class="cap">{{ngo_details.name}}</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><b>Address:</b>
                                    
                                    {{ngo_details.area}}, {{ngo_details.city}}, <br>
                                    {{ngo_details.district}}, {{ngo_details.state}}                                     
                                </p>
                                <p><b>Phone:</b> 
                                    {{ngo_details.mobile}}
                                </p>
                                <p><b>Contact Person:</b> 
                                    {{ngo_details.contact_name}}
                                </p>
                                <p><b>Area of work:</b> 
                                    {{ngo_details.tags}}
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
				              <div class="hidden-xs">
				                <a href="{{ngo_details.link}}">{{ngo_details.link}}</a><br>
				                <h3><span class="label label-primary" >{{ngo_details.email}}</span></h3>
				              </div>
				            </div>
                        </div>
                    </div>

                    <div ng-repeat-end="" ng-class="{'clearfix':mode==1}"></div>

                </div>
            </div>
            <!--/row-->          

           

            <!--/container-->

        </div>
    </div>

    </div>
    <!-- container -->

	<?php
    require_once('templates/footer.php');
    ?>

  </body>
</html>
