
	
   <?php include ('partial/header.php');?>
        
	
	<!------top donor ------>

	<section class="staff mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 sec-title text-center">
                        <h3 class=" black h-sep">TOP   <span class="text-ultra-bold">DONORS</span> </h3>
                        <p class="fz-16 gray-666 mt-50">All Top Donor's are Available for Donate Blood</p>
						<span class="decor"><span class="inner"></span></span>
                    </div>
					<span class="decor"><span class="inner"></span></span>
                </div>
                <div class="row mt-6">
				<?php foreach ($results as $result) {?>
                    <div class="col-md-3 col-sm-3 offset-md-1 staff-member position-r text-center col-sm-6">
					
						<img class="img-responsive" style="width:180px;height:200px" alt="image" src="<?php echo base_url($result->image);?>" />
                        <div class="staff-hover">
                           
                            <h6 class="white text-bold text-uppercase"><?php echo $result->full_name; ?></h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11"><?php echo $result-> address; ?></span></br>
							<span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">Number of Donates : <?php echo $result->donate_count; ?></span>
							</br>
							<span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">Last Blood Donates : <?php echo $result->l_date; ?></span>
							<a href="<?php echo base_url('Home/detailview?id='.$result->id.'');?>"><button type="button" class="mdetails">Details</button></a>
                          
                        </div>
                        <div class="staff-overlay">
                            <h6 class="white text-bold text-uppercase">Blood Group : <?php echo $result->blood_group; ?></h6>
                            <span class=" mt-15 ubuntu white text-medium text-uppercase display-block fz-11">Mobile no : <?php echo $result->mobile_no; ?></span> 
							
                        </div>
						
                    
                    </div>
					
				<?php }?>
					
					
					
					
					
                
                   
					
                </div>
				
            </div>
    </section>
		
	
	<!-----*****top donor end-----***>
	
	
	
<?php include ('partial/footer.php');?>
   