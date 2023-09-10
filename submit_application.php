<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eSPES | Submit SPES Application </title>
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
              <a href="/spes/" class="site_title"><span> Online SPES</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
					<div class="profile clearfix">
	  <div class="profile_pic">
		<img src="https://spes.dole11portal.org//images/spes_logo.png" alt="photo" class="img-circle profile_img">
	  </div>
	  <div class="profile_info">
		<span>Welcome,</span>
		<h2>---</h2>
	  </div>
	</div> 
            <!-- /menu profile quick info -->
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
	  	  <li><a href="http://localhost/Capstone/setting.php"> <i class="fa fa-cog"></i>Settings</a></li>
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
            </div-->
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
			<img src="spes_logo.png" alt="">   ---  <span class=" fa fa-angle-down"></span>
		  </a>
		  <ul class="dropdown-menu dropdown-usermenu pull-right">
			<li>
				<a href="spes_profile.php"> 
					<!--span class="badge bg-red pull-right">20%</span-->
					<span>Profile</span>
				</a>
			</li>
			<li>
			  <a href="setting.php"><span>Settings</span></a>
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

        <!-- <div id="loader"></div> -->

        <!-- page content -->
        <div id="mainContent" class="right_col" role="main">
			
<!-- page content -->
  <div class="">
	<div class="page-title">
		<div class="alert alert-danger alert-dismissible fade in" role="alert" style="margin-top: 50px";>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<b><b>The My Profile and Required Docs. section should be both 100%.</b></b>
		</div>
	  <div class="title_left">
		<h3>Submit SPES Application <br /></h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Application Progress</h2>
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
			  <!-- <div class="alert alert-warning alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<b>Warning!</b> You cannot make any changes to these documents once your application is approved.
			  </div> -->
			  				<div hidden id="alertMessage" class="alert alert-success alert-dismissible fade in"><i class="glyphicon glyphicon-question-sign"></i> </div>		  
			<form id="formPhoto" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
			 

                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12"><h2>Profile Details: </h2></label>
                    <div class="progress col-md-7 col-sm-7 col-xs-12">
                        <div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%";>
                                    0%
                                </div>                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12"><h2>Required Documents: </h2></label>
                    <div class="progress col-md-7 col-sm-7 col-xs-12">
                        <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%";>
                                0%
                            </div>                    </div>
                </div>
              <div class="ln_solid"></div>	
			  <div class="form-group">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <button disabled type="submit" class="btn btn-primary btn-sm" id="submit" title="Profile Details and Required Docs. should be both 100%">Submit Application</button>                    </div>
                </div>
               </div>
  			  
  			</form>
  			
			<!-- <div class="ln_solid"></div>	 -->
			
		  </div>
		</div>
	  </div>
	</div>
  </div>

  
<!-- /page content -->

<script>
	
	$('#submit').click(function(event){
        alert("Application has been submitted and will be reviewed. ");
	});

	
</script>
	        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer id="mainFooter">
          <div class="pull-right">
             &copy; Copyright 2023 | Online Special Program for Employment of Student (SPES) | <a href="https://spes.dole11portal.org" target="new">DOLE XI</a> | <a href="https://spes.dole11portal.org/index.php/user/privacy_policy" style="color: #000;" target="_blank">Privacy Notice</a>
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