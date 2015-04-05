<?php
$page_title = "Home - Youth NGO portal";
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
          <a class="navbar-brand" href="index.html"><span style="color: #F96900;">Youth</span> <span style="color: white;">NGO</span><span style="color: green;"> Portal</span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="ngos.php">NGO'S</a></li>
            <li><a href="register.php">Register NGO</a></li>
            <li><a href="add.php">Add NGO</a></li>
            <li><a href="shareyourexp/">Share you exp.</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>“<b>The world's biggest power is the youth,</b> </h1>
				<h2><b>And beauty of a woman.” - Chanakya </b></h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->

	<?php
	require_once('templates/footer.php');
	?>

  </body>
</html>
