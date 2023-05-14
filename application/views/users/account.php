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
                            <a href="<?php echo base_url('users/logout');?>">Logout</a>
                        </li>
						
                        

                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <!---

</section> ---->
        <div class="container">
            <!-- validation -->
            

				<?php if($this->session->flashdata('msg')): ?>
  
  <div class="scs-box">
	<div class="alert alert-success"> <?php echo $this->session->flashdata('msg'); ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  </div>
<?php endif; ?>

              <!-- <h3 class="user-title text-center mt-5">Welcome <?php echo $user['username']; ?>!</h3>

                -->




            
        </div>
		
		<section class="one">
       <div class="container">
           <div class="row">
               <div class="col-12">
                 <div class="clr1"></div>
                   
               </div>
           </div>
       </div>
        
    </section>
    
    
     <section class="two">
       <div class="container">
           <div class="row">
               <div class="col-12">
                  <div class="clr2"></div>
                   
               </div>
           </div>
       </div>
        
    </section>
    
    <section class="three">
            <div class="container">
                 <div class="form">
                <div class="row">
                  
                        <div class="col-4">
                           <div class="img">
                              <img src="<?php echo base_url($user['image']);?>">
                           </div>
                           </div>
                            
                      
                        <div class="col-8">
                            <h1 class="text-center">I'M <?php echo $user['full_name']; ?></h1>
                             
                                    
                                    <p>Area:<?php echo $user['area']; ?> </p>
                                    <p>Phone:<?php echo $user['mobile_no']; ?> </p>
                                    <p>Gender:<?php echo $user['gender']; ?> </p>
									<p>Last Blood Donate:<?php echo $user['l_date']; ?></p>
									<p> No Of Donates:<?php echo $user['donate_count'];?>
									</p>
                                    <p>Weight:<?php echo $user['weight']; ?></p>
                                     <p>Blood Group:<?php echo $user['blood_group']; ?></p>
                                    <p>Address:<?php echo $user['address']; ?></p>
                                    <p>Contact:<?php echo $user['mobile_no']; ?></p>
                                    
                                <div class="clr">
                                         <a href="<?php echo site_url('Users/edit/'.$user['id']); ?>"><button type="button" class="btn edt-btn">Edit</button></a>
					<a href="<?php echo site_url('Users/change_password/'.$user['id']); ?>"><button type="button" class="btn edt-btn">Change Password</button></a>
					
                                     </div>
                             
                              </div>
							  
                        </div>
						<div class="row">
							
						</div>
                </div>
        </section>
        <!--Footer start--->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    &copy; 2020 ALL Right Reserved by BloodDonor  <a target="_blank" href="#">
					&nbsp; &nbsp;    Designed & Developed By: Tasnim Juhee</a>
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
   </footer>
   
   
   
    <!-- /counter_area  -->
   
   <!--/#footer-->
<!---script start----->




    
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.bxslider.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
	<script src="<?php echo base_url('assets/js/chosen.jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.validate.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.counterup.min.js');?>"></script>
	   
	
	
<!---script end----->
</body>
</html>