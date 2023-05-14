
<?php include ('partial/header.php');?>
        
        <section id="banner">
  <ul class="bxslider">
    <!--
    <li>
      <img src="<?php echo base_url('assets/images/1111.jpg');?>" />
    
      
    
	<li>
      <img src="<?php echo base_url('assets/images/l.jpg');?>" />
      
    </li> </li>-->
	<li>
	
      <img src="<?php echo base_url('assets/images/s.jpg');?>" />
      </li>
  
  </ul>
        </section>
		
		
		
        <!---slider end----->


        <!--blog start--->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <h2 class="register-title pull-left" style="color:#130604">
                                        To Register as a Blood Donors
                                        </h2>
                        <section>
                            <a class="btn-register btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">
                                <button class="modal-title text-center wow fadeInDown" id="js-trigger-overlay" type="button">Registration Here</button>
                            </a>
                        </section>
                        <!-- MODAL -->
                        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
										
                                        <h3 class="modal-title" id="modal-register-label">Member Registration </h3>
                                        <p>... "Blood is not optional, it is the responsibility of more than" ... (Give Blood, Save Life). Have been in trouble with the well-being and welfare of the people</p>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form method="post" id="item_form" class="form-horizontal registration-form" action="<?php echo base_url().'Home/create';?>" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-first-name">Full Name</label>
                                                <div class="col-sm-10">
                                                     <input type="text" name="full_name" placeholder="Full Name..." class=" form-control" id="form-first-name" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="">User Name</label>
                                                <div class="col-sm-10">
                                                     <input type="text" name="username" placeholder="User Name" class=" form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="">Password</label>
                                                <div class="col-sm-10">
                                                     <input type="password" name="password" placeholder="Password" class=" form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="">Mobile No</label>
                                                <div class="col-sm-10">
                                                    <input class=" form-control" type="text" name="mobile_no" placeholder="Mobile No..." id="mobile_no" required pattern="[0-9]{11}">
                                                </div>
                                            </div>
											<br>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-about-yourself">Present Address</label>
                                                <div class="col-sm-10">
                                                    <input class=" form-control" name="address" type="text" placeholder="Present Address..." id="form-about-yourself" required>
                                                </div>
                                            </div>
                                           <div class="form-group">
										    <label class="col-sm-2 control-label">Area</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="area" style="cursor:pointer; " required>
                                                        <option value=""></option>
                                                        <option value="Lamabazar">Lamabazar</option>
                                                        <option value="Zindabazar">Zindabazar</option>
                                                        <option value="Mirabazar">Mirabazar</option>
                                                        <option value="Amborkhana">Amborkhana</option>
                                                        <option value="Modina-Market">Modina-Market</option>
                                                        <option value="Madical-Road">Madical-Road</option>
                                                        <option value="Dokkin Surma">Dokkin Surma</option>
                                                        <option value="Bondor bazar">Bondor bazar</option>
                                                    </select>
                                                </div>
                                                </div>
										   
										   
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Upload Image:</label>
                                            <div class="col-sm-10">
											<br>
                                                <input class=" form-control" name="image" id="regionsearch" type="file" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="inputgender" class="col-sm-6 control-label">Did you donate blood before</label>
                                                <div class="col-sm-6 ">
                                                    <label>
                                                        <input class=" form-control" type="radio" id="show" name="l_date" value="yes">YES</label>
                                                    <label>
                                                        <input class=" form-control" type="radio" id="hide" name="l_date" value="no">NO</label>
                                                </div>
                                                
                                            </div>







                                            <script>
                                                $(document).ready(function () {
                                                    $("#hide").click(function () {
                                                        $(".date").hide();
                                                    });
                                                    $("#show").click(function () {

                                                        $(".date").show();
                                                        document.getElementById("p2").style.display = "block";
                                                    });
                                                });
                                            </script>
                                            <div class="form-group date" style="display:none">
                                                <label for="birthday" class="col-sm-6 control-label">Date of last blood donation</label>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                            
                                                <input class=" form-control" name="l_date" id="datepicker" type="date"placeholder="yy-mm-dd"/>
												
                                           
                                        </div>
                                   

                                                </div>
                                            </div>
											<div class="form-group date" style="display:none">
                                                
                                                    <label class="col-sm-6 control-label">How many times donate blood</label>
                                                    <div class="col-sm-6">
                                                    <input class="form-control" type="number" name="donate_count" style="cursor:pointer;margin-left:20px; " />

                                                </div>
                                                </div>
                                            <div class="form-group">
                                                
                                                    <label class="col-sm-2 control-label">Weight</label>
                                                    <div class="col-sm-3">
                                                    <input class="form-control" type="number" name="weight" style="cursor:pointer;margin-left:20px; " />

                                                </div>
                                                
                                                <label class="col-sm-3 control-label">Blood Group</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="blood_group" style="cursor:pointer; " required>
                                                        <option value="">Blood Group</option>
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
                                            <div class="form-group">
                                                <label name="gender" for="inputgender" class="col-sm-6 control-label">Gender</label>
                                                <div class="col-sm-6 ">
                                                    <label>
                                                        <input type="radio" name="gender" value="Male"required>Male</label>
                                                    <label>
                                                        <input type="radio" name="gender" value="Female">Female</label>
                                                </div>
                                            </div>
                                            <div class="submit">
                                                <button type="submit" id="submit" name="submit">Sign Me Up</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!--seach blood doner---->
                    <div class="col-sm-12 col-md-6 pull-right">
                        <h2 style="color:#130604" class="search-title">Areas Searching Blood Donors</h2>
                        <form role="form" class="r_form" action="<?php echo base_url('Home/searchdata');?>" method="POST">
                            
             <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label col-form-label-sm">Blood Group:</label>
                    <div class="col-sm-8 form-control-sm">
                        <select class="form-control" name="blood_group" style="cursor:pointer;border:2px solid black;" "required>
                                  <option value="">Blood Group</option>
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


					
					                           <div class="form-group row">
										    <label class="col-sm-4 col-form-label col-form-label-sm">Area :</label>
                                                <div class="col-sm-8 form-control-sm">
                                                    <select class="form-control" name="area" style="cursor:pointer;border:2px solid black;" required>
                                                        <option value="">Area</option>
                                                        <option value="Lamabazar">Lamabazar</option>
                                                        <option value="Zindabazar">Zindabazar</option>
                                                        <option value="Mirabazar">Mirabazar</option>
                                                        <option value="Amborkhana">Amborkhana</option>
                                                        <option value="Modina-Market">Modina-Market</option>
                                                        <option value="Madical-Road">Madical-Road</option>
                                                        <option value="Dokkin Surma">Dokkin Surma</option>
                                                        <option value="Bondor bazar">Bondor bazar</option>
                                                    </select>
                                                </div>
                                                </div>

								
            
          <div class="pull-right">
            <button type="submit" name="submit" class=" srch-btn pull-right">Search</button>
          </div>
    </form>                 
   </div>
  </div>
 </div>
</div>
</section>




 
 
<section class="about-security">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <h4 style="text-align:center; color:#930009;">"Blood is not optional, it is the responsibility of more than"</h4>
       </div>
    
    
    </div>
 </section>
 
 
 </div>
 

    <!-- counter_area  -->
    <div class="counter_area counter_bg_1 overlay_03">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo base_url('assets/images/group.svg');?>" alt="">
                        </div>
                        <h3> <span class="counter"><?php echo $available_members->num_rows();?></span> <span> </span> </h3>
                        <p>Available Blood Doners</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo base_url('assets/images/cart.svg');?>" alt="">
                        </div>
                        <h3> <span class="counter"><?php echo count($members);?></span> <span></span> </h3>
                        <p>Registered Members</p>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo base_url('assets/images/respect.svg');?>" alt="">
                        </div>
                        <h3> <span class="counter">20</span> </h3>
                        <p>Campaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Case Study-->
	  <div class="case_study_area">
        <div class="container">
            <div class="border_bottom">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-40">
                                    <h3 style="color:#6F1310;">Case Study</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                                
                   <div class="single_case col-md-4">
                                                <div class="case_thumb">
                                                        <img src="<?php echo base_url('assets/images/p1.jpg');?>" alt="">
                                                    </div>
                                             <div class="case_heading">
                                                    
                                                    <h1><a href="#"><b>Why not donate blood?</a></b></h1>
													  <p>
													 <div class="splits wc-round-crnr pull-left ">
                    <div class="in-splits" style="color:black; font-size:15px">
                       
                    
               
                       1. The first and main reason, donated blood to save the life of a human being.<br> What could be the reason for the larger donations!<br><br>
2. Maybe one day your own needs / <br>danger that someone else <br>will come forward<br><br>
3. Donate blood on a regular basis is much lower risk of heart attack and heart disease<br><br>
4. Increasing the body's resistance to disease <br><br>
5. Through regular voluntary blood donation free of cost <br>if there is any disease of the body's known. Such as hepatitis B,<br> hepatitis C, syphilis, HIV (AIDS) and so on 
                 
													
                                            </div>
                                            </div>
											  </p>
                                            </div>
                       
                    
   
                                            </div>
                                           
                                        <div class="single_case col-md-4">
                                                <div class="case_thumb">
                                                        <img src="<?php echo base_url('assets/images/s1.jpg');?>" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    
                                                    <h1><a href="#"><b>Who can Donate Blood?</b></a></h1>
													<p>
													 <div class="splits wc-round-crnr pull-right">
                    <div class="in-splits" style="color:black; font-size:15px">
					
                       1. 60-year-old man to 18 years in any susthadehera be able to donate blood <br/><br/>
                           2. Physically and mentally healthy individuals to donate blood can cure </br><br/>
                           3. Your weight should be 50 kg or more <br/><br/>
                           4. 4 months-intervals in women, in men giving blood is 3 months </br><br>
                           5. The amount of hemoglobin in the blood, blood pressure and body temperature will be normal <br/><br/>
                           6. Respiratory diseases, asthma, asthma in whom they will not be able to donate blood <br/><br/>
                           7. You must be disease-free
                         
                    </div>
                </div>
				 </p>     
                           
                </div>
                </div>
                                       
                                        
                                        <div class="single_case col-md-4">
                                                <div class="case_thumb">
                                                        <img src="<?php echo base_url('assets/images/p2.jpg');?>" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    
                                                    <h1><a href="#"><b>Benefits of Donating Blood</a></b></h1>
													  <p>
													 <div class="splits wc-round-crnr pull-left">
                    <div class="in-splits" style="color:black; font-size:15px">
                       
                    
               
                       1. By donating blood the iron stores in the body are maintained at healthy levels <br><br>
2. A reduction in the iron level in the body is linked with low cancer risk <br><br>
3. Blood donation is beneficial in reducing risk of heart and liver ailments caused by iron overload in the body <br><br>
4. Free Health Check-up <br><br>
5. Reduces Risk of Heart Disease <br><br>
6. After donating blood, the body works to replenish the blood loss. <br>This stimulates the production of new blood cells and in turn helps in maintaining good health 
													
                                            </div>
                                            </div>
											 </p>
                                            </div>
											
                                        </div>
                                      
                                </div>
                                
                            </div>
               </div>

	</div>
	
	
	 
	
	
	<!-- Donate-Blood Head Section-->



    <section id="create-head-section" class="text-center py-5 text-light">
        <div class="container">
            <h3 class="display-4 text-light">Donate Blood</h3>
            <p class="donatelead lead">To give blood  you need neither extra strength  nor extra food,  and you will save a life.   If you're a blood donor, you're a hero to someone,  somewhere,  who received your  gracious gift of life.  A bottle of blood saved my life, was it yours.  Every blood donor is a life saver</p>

            

        </div>
    </section>


    <!-- Donate-Blood Main Section-->


    <section id="create-main-section" class="py-5 bg-light">
        <div class="container">
            <div class="row">
			<br>
                <div class="col-lg-6 col-md-12">
                    <h3 style="color:#6F1310;">Did you Know?</h3>
					<br>
					
                    <p class="lead">Thirty-seven percent of the population in our area is eligible to give blood, but less than four percent of those eligible actually give. There is always a need for blood.</p>

                    <div class="d-flex flex-row ">
                        <div class="align-self-start mt-2 p-4">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="align-self-end p-4">
                            <p class="lead">Potential blood donors do not need to know their blood type before giving blood.</p>
                        </div>


                    </div>
                    <div class="d-flex flex-row">
                        <div class="align-self-start mt-2 p-4">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="align-self-end p-4">
                            <p class="lead">A single donation of blood can save multiple lives.</p>
                        </div>


                    </div>
                </div>
				<div class="col-lg-1 col-md-12">
				<p>.</p>
				
				</div>
<br>


                <div class="single_case_two col-lg-5 col-md-12">
				 <div class="case_thumb_two">
				 
                                                    
													
                       
                    <img src="<?php echo base_url('assets/images/m1.jpg');?>" class="img-fluid mt-2" style="height:370px;" alt="create">

                  
                                                    </div>
                                                    </div>
                </div>



            </div>


        </div>
 


    </section>
	
	
	<br>
	
	
	<!-- Explore Head Section-->

    <section id="explore-head-section" class="text-center py-5 text-light">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="display-4 text-light">Explore</h3>
                    <p class="explorelead lead">Blood is love, life and Joy.We all can save precious lives and bring smiles just by donating blood.A significant number of deaths could be avoided if people donate blood regularly and voluntarily, so that safe blood is always available<br>"Give Blood, Give Life"</p>
                   
                </div>
            </div>

        </div>

    </section>



    <!-- Explore Main Section-->


    <section id="explore-main-section" class="bg-light py-5">
        <div class="container">
            <div class="row">
			<br>
                <div class="single_case_two col-lg-6 my-2 col-md-12">
				<br><br>
				<div class="case_thumb_two">
				   
                    <img src="<?php echo base_url('assets/images/m2.jpg');?>" class="img-fluid" alt="explore">
                
              
                </div>
                </div>
				 

                <div class="col-lg-6 col-md-12">
                    <h3 style="color:#6F1310;">Some Misconceptions</h3>
					<br>
                    <p class="lead">The donation will be bad for health-it's the wrong idea.</p>


                    <div class="d-flex flex-row">

                        <div class="p-4 mt-2 align-self-start">
                            <i class="fa fa-check"></i></div>


                        <div class="p-4 align-self-end">
                            <p class="lead">Giving blood hurts.</p>
                        </div>
                    </div>


                    <div class="d-flex flex-row">

                        <div class="p-4 mt-2 align-self-start">
                            <i class="fa fa-check"></i></div>


                        <div class="p-4 align-self-end">
                            <p class="lead">There is limited blood in the body and it is unhealthy to give some away.</p>
                        </div>
                    </div>
					
					
                   <div class="d-flex flex-row">

                        <div class="p-4 mt-2 align-self-start">
                            <i class="fa fa-check"></i></div>


                        <div class="p-4 align-self-end">
                            <p class="lead"> Giving blood is time consuming.</p>
                        </div>
                    </div>

                     <div class="d-flex flex-row">

                        <div class="p-4 mt-2 align-self-start">
                            <i class="fa fa-check"></i></div>


                        <div class="p-4 align-self-end">
                            <p class="lead">you cannot take part in sports or other physical activities after donating blood.</p>
                        </div>
                    </div>
					
					<div class="d-flex flex-row">

                        <div class="p-4 mt-2 align-self-start">
                            <i class="fa fa-check"></i></div>


                        <div class="p-4 align-self-end">
                            <p class="lead">Taking medication means that one cannot be a blood donor.</p>
                        </div>
                    </div>
					
					

                </div>
            </div>
        </div>
    </section>
	
	<?php include ('partial/footer.php');?>
	
	
	
	
	<!--.case_study_area .single_case:hover .case_thumb img {
    width: 100%;
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}-->