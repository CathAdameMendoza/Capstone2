
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eSPES | Account </title>
    <!-- Bootstrap -->
	<link href="bootstrap.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="daterangepicker.css" rel="stylesheet">
    <!-- Croppie -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.5.1/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" />
    <!-- Custom Theme Style -->
    <link href="custom.css" rel="stylesheet">
	  <!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="29efea84-679c-4042-bdb8-a3ccc09e5088";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->
    <!-- jQuery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

<body class="nav-md" >
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="/spes/" class="site_title"></i> <span>Online SPES</span></a>
</div>
<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
<div class="profile_pic">
<img src="spes_logo.png" alt="photo" class="img-circle profile_img">
</div>
<div class="profile_info">
<span>Welcome,</span>
<h2>---</h2>
</div>
</div> 
<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>SPES Beneficiary</h3>
<ul class="nav side-menu">
<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="http://localhost/Capstone/homepage.php">Dashboard</a></li>		
<li><a href="http://localhost/Capstone/spes_profile.php">My Profile <span class="badge bg-red pull-right">0%</span></a></li>
<li><a href="http://localhost/Capstone/pre_emp_doc.php">Required Docs. <span class="badge bg-red pull-right">0%</span></a></li>
<li><a href="http://localhost/Capstone/submit_application.php">Submit Application </a></li>
</ul>
</li>
<li><a href=" "> <i class="fa fa-cog"></i>Settings</a></li>
<li><a href="https://drive.google.com/file/d/1LFdSlo_jwLYn1AtKT9RF2EFrhSMnR7Hu/view?usp=share_link" target="_blank"><i class="fa fa-book"></i>User Manual</a></li>
</ul>
</div>
</div> 
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <!--div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div id="mainTopNav" class="top_nav">
             
<div class="nav_menu">
	<nav>
	  <div class="nav toggle">
		<a id="menu_toggle"><i class="fa fa-bars"></i></a>
	  </div>

	  <ul class="nav navbar-nav navbar-right">
		<li class="">
		  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<img src="spes_logo.png" alt="">  ---  <span class=" fa fa-angle-down"></span>
		  </a>
		  <ul class="dropdown-menu dropdown-usermenu pull-right">
			<li>
				<a href="http://localhost/Capstone/spes_profile.php"> 
					<span class="badge bg-red pull-right">20%</span>
					<span>Profile</span>
				</a>
			</li>
			<li>
			  <a href=" "><span>Settings</span></a>
			</li>
			<li><a href="javascript:;"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
			<li><a href="http://localhost/Capstone/landing.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
		  </ul>
		</li>
	  </ul>
	</nav>
  </div> 
        </div>
        <!-- /top navigation -->

        <div id="loader"></div>

        <!-- page content -->
        <div id="mainContent" class="right_col" role="main">
				<div class="row">
	  <div class="col-md-8 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>SPES Account <small>Your details in Online SPES</small></h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#">Settings 1</a>
				  </li>
				  <li><a href="#">Settings 2</a>
				  </li>
				</ul>
			  </li>
			  <li><a class="close-link"><i class="fa fa-close"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
		  				<br />
			<form class="form-horizontal form-label-left input_mask" novalidate method="POST" action="http://localhost/Capstone/setting.php">
			  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
				<input type="text" class="form-control has-feedback-left" required name="username" value="" placeholder="User Name" data-toggle="tooltip" data-placement="right" title="Username" />
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			  </div>

			  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
				<input type="password" class="form-control" required name="password" value="" placeholder="Password" data-toggle="tooltip" data-placement="right" title="Password" />
				<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
			  </div>

			  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
				<input type="text" name="email" id="email" required="required" class="form-control has-feedback-left" placeholder="Email" value="" data-toggle="tooltip" data-placement="right" title="Email" />
				<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
			  </div>

			  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
				<input type="text" class="form-control" required name="mobile_no" placeholder="Phone" value="" data-toggle="tooltip" data-placement="right" title="Main mobile/cellphone number" />
				<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
			  </div>

			  <div style="clear:both;"></div>
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
				   <button class="btn btn-primary" type="reset">Reset</button>
				  <button type="submit" class="btn btn-success">Update</button>
				</div>
			  </div>

			</form>
		  </div>
		</div>
	  </div>
  </div>
  
<script src="validator.js"></script>

<script>
	
	function remove_fb() {
		if(confirm('Are you sure to remove Facebook Account Connection?')) {
			$.get('deactivate_fb', function(data) {
				if(data == 1)
					location.reload();
			});
		}
		
	}

	$('#year').val('2023');

	function reload_year(year) {
		 window.location = 'my_applications?year=' + year;
	}
	
</script>        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer id="mainFooter">
          <div class="pull-right">
             &copy; Copyright 2023 | Online Special Program for Employment of Student (SPES)
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 
    <script>
      var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("mainContent").style.display = "block";
        }
    </script>
	
  </body>
</html>
