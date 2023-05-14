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
        
        <div class="container">
			 <h3 class="text-center my-5" style="color:#6F1310;">Update User</h3>
            <div class="row">
                <div class="col-sm-12"> 
                   
                    <form method="post" class="form-horizontal registration-form" action="<?php echo base_url() . 'Users/update'; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-first-name">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="full_name" value="<?php echo $user['full_name']; ?>" class=" form-control" id="form-first-name"  />
                            </div>
                        </div>
						
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-email">Mobile No</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="mobile_no" value="<?php echo $user['mobile_no']; ?>" id="form-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-about-yourself">Present Address</label>
                            <div class="col-sm-10">
                                <input class=" form-control" name="address" type="text" value="<?php echo $user['address']; ?>" id="form-about-yourself" >
                            </div>
                        </div>
                        <div class="form-group" style="display:none;">
                            
                            <label class="col-sm-2 control-label"> District:</label>
                            <div class="col-sm-4">
                                <select class=" form-control" name="district" id="state" value="<?php echo $user['district']; ?>"></select>
                            </div>

                            <script language="javascript">
                                populateCountries("country", "state");
                            </script>
                        </div>
                        <div class="form-group" style="display:none;">
                            <label class="col-sm-2 control-label"> Upazila Name:</label>
                            <div class="col-sm-10">
                                <input class=" form-control" name="area" value="<?php echo $user['area']; ?>" id="regionsearch" type="hidden" />
                            </div>
                        </div>
                        

                        <div class="form-group date">
                                                <label for="" class="col-sm-6 control-label">Date of last blood donation</label>
                                                <div class="col-sm-10">
                                                  <div class="form-group">
                                            
                                                <input class=" form-control" name="l_date" value="<?php echo $user['l_date']; ?>"id="regionsearch" type="date"/>
                                           
                                        </div>
                                   

                                                </div>
                                            </div>
											<div class="form-group">
                                                <label for="" class="col-sm-6 control-label">How Many Times Donate Blood</label>
                                                <div class="col-sm-10">
                                                  <div class="form-group">
                                            
                                                <input class=" form-control" name="donate_count" value="<?php echo $user['donate_count']; ?>"id="regionsearch" type="number"/>
                                           
                                        </div>
                                   

                                                </div>
                                            </div>
                        <div class="form-group">

                            <label class="col-sm-2 control-label">Weight</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="<?php echo $user['weight']; ?>" name="weight" style="cursor:pointer; " />

                            </div>
                        </div>
						
						 <div class="form-group">
						<label class="col-sm-3 control-label">Blood Group</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="blood_group" style="border:2px solid #6F1310;" selected>
                                                        
                                                        <option value="<?php echo $user['blood_group']; ?>"><?php echo $user['blood_group']; ?></option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                                </div>
												<div class="form-group" style="display:none;">
                                                <label name="gender" for="inputgender" class="col-sm-6 control-label">Gender</label>
                                                <div class="col-sm-6 ">
                                                    <label>
                                                        <input type="radio" name="gender" value="<?php echo $user['gender']; ?>">Male</label>
                                                    <label>
                                                        <input type="radio" name="gender" value="<?php echo $user['gender']; ?>">Female</label>
                                                </div>
                                            </div>
											
								<div class="form-group">
                                            <label class="col-sm-10 control-label"> Upload Image:</label>
                                            <div class="col-sm-10">
                                                <input class=" form-control" name="image" type="file"/>
												
                                            </div>
                                        </div>			
											

                        <div class="submit">
                            <button type="submit"class="my-5 ml-3" style="background-color:#6F1310; color:white; border:none;" name="btn-signup">Update Data</button>
                        </div>
                </div>
				
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
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


