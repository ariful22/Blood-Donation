<?php include 'partial/header.php'?>


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
                              <img src="<?php echo base_url($row->image);?>">
                           </div>
                           </div>
                            
                      
                        <div class="col-8">
                            <h1 class="text-center">I'M <?php echo $row->full_name; ?></h1>
                             
                                    
                                    <p>Area:<?php echo $row->area; ?> </p>
									<p>Last Blood Donate:<?php if($row->l_date== null){
										echo 'Still have not given blood';
									}else{
										echo $row-> l_date;
									} ?></p>
									<p> No Of Donates:<?php if($row->donate_count== null){
										echo '0'; 
									}else{
										echo $row->donate_count;
									}?>
									</p>
                                    <p>Weight:<?php echo $row->weight; ?></p>
                                     <p>Blood Group:<?php echo $row->blood_group; ?></p>
                                    <p>Address:<?php echo $row-> address; ?></p>
                                    <p>Contact:<?php echo $row->mobile_no; ?></p>
                                    
                                <div class="clr">
                                         
                                     </div>
                             
                              </div>
							  
                        </div>
						<div class="row">
							
						</div>
                </div>
        </section>







<?php include 'partial/footer.php'?>