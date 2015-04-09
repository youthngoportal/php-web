<?php
session_start();

$page_title = "Login - Youth NGO portal";

$message = "";

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
if (isset($_POST['submit'])) {
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

    $sql1="SELECT id FROM $tbl_name WHERE username='$myusername'";

    //echo "$sql";
    $result=mysqli_query($link, $sql);
    $result1=mysqli_query($link, $sql1);
    //$assoc = mysqli_query($link, $sql1);
    if($row = mysqli_fetch_array($result1))
    {
        $assocs = $row["id"];
    }
    //echo "$sql1";
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count==1){
    // Register $myusername, $mypassword and redirect to file "login_success.php"
        $_SESSION['myusername']= "myusername";
        $_SESSION['mypassword']= "mypassword";
        $_SESSION['sessionVar'] = "$assocs";
        //$_SESSION['variable_name'] = 'result1';
        header("location:sayhello.php");
    }
    else {
        $message = "Wrong Username or Password";
        //echo "Wrong Username or Password";
    }
} else {
    $message = "";

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
                    <li class="active"><a href="add.php">Add NGO</a></li>
                    <li><a href="shareyourexp/" target="_blank">Share you exp.</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="blue">
        
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Login page for NGO's <b>only.</b></h4>
                    <p>Send an email or updates to your subscriber.</p>
                    
                </div>
            </div>
            <!-- row -->
        
        <!-- container -->
    </div>
    <!--  bluewrap -->


    <div class="container main">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Sign in below to sent updates</h1>
                <div class="account-wall">
                    <img class="profile-img" src="http://indiamicrofinance.com/wp-content/uploads/2014/03/ngo-india.png"
                        alt="">
                    <form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="message"><?php if($message!="") { echo $message; } ?></div>
                        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <a href="#" class="pull-right need-help">Forgot password? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
            </div>
        </div>
    </div>
  <!-- Row end -->

    <?php
    require_once('templates/footer.php');
    ?>

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

  </body>
</html>