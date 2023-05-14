<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>BloodDonorBd</title>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/jquery.bxslider.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/chosen.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/chosen-bootstrap.css');?>" rel="stylesheet">
       
	   <link rel='shortcut icon' href="<?php echo base_url('images/logo.png');?>" type='images'>
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
        
		
		
		</head>
    <!--/head-->
	
	
	
	
	
	 <!---Upper part---->
	
		
	
	<body id="home" class="homepage">
	
		
		<div class="top-header">
	 <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8" >
                    <p>Welcome to blood donation center</p>
                </div>
				
                <div class="col-sm-6 col-md-4">
                    <ul class="social-icons">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        </div>
	
	
	
	
        <!---header start---->
         <div class="navbar navbar-expand-lg top-nav1 top-nav">
            <div class="container">
                
				<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="" class="img-responsive" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a href="<?php echo base_url('home');?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('donor');?>">Top Donor</a>
                        </li>
						
						<li>
                            <a href="<?php echo base_url('Allmember');?>">All Donor</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Stock');?>" >Stock Blood</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url('campaign');?>" >Campaign</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('contact');?>">Contact  Us</a>
                        </li>
						<li>
                            <a href="<?php echo base_url('users/login');?>">Login</a>
                        </li>
						
                        

                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        
<div class="container-fluid log-content"><br />
    <br />
    <div class="row">
      <div class="offset-sm-4 col-sm-4 login-box">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
          </div>
          <div class="panel-body">
							<h3>Login Form :</h3>
							
						
						<div class="form-body form-body-info">
							<form action="" method="post">
								<div class="form-group has-feedback">
                                                                    <input type="text" class="form-control inputEmail my-5" name="username" placeholder="Username" required="" value="">
									<?php echo form_error('username','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword mb-5" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
                                                                    <input type="submit" name="loginSubmit" class="btn  log-btn"  style="background:#6F1310; width:120px;height:40px;color:white;" value="Login">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	
<!--Footer start--->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    &copy; 2017 ALL Right Reserved by Bloodexbd<a target="_blank" href="#">
					&nbsp; &nbsp;  Designed & Developed By: Tasnim</a>
                </div>
				
                <div class="col-sm-6 col-md-4">
                    <ul class="social-icons">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
   </footer><!--/#footer-->
<!---script start----->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    
	 <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/mousescroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
	
	
<!---script end----->
</body>
</html>