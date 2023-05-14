
	<?php include ('partial/header.php');?>
	<style>
	.clearfix {
    clear: both;
}
	</style>
     <section id="features">

            <div class="container">
                <div class="row">
                    
                    <!----blood doner end ------->
                    <div class="col-sm-12 col-md-12">
                        <form id="" name="contact-form" method="get" action="">
                            <h2 style="color:#6F1310;text-align:center;margin-top:-50px;"" class="modal-title">Search the Blood Donor</h2><br/>
<p style="color:#000;text-align:center;font-weight:600;margin-top:-20px;">click to box and show your donor list :</p>
<br/><br/><br/>
                            <div class="group_list" style="margin-top:-30px;">
								<a href="<?php echo site_url('stock?id=3');?>">A+(<?php echo $threecount->num_rows();?>)</a>
                                <a href="<?php echo site_url('stock?id=4');?>">A-(<?php echo $fourcount->num_rows();?>)</a>
								<a href="<?php echo site_url('stock?id=5');?>">B+(<?php echo $sixcount->num_rows();?>)</a>
                                <a href="<?php echo site_url('stock?id=6');?>">B-(<?php echo $sevencount->num_rows();?>)</a>
								<a href="<?php echo site_url('stock?id=7');?>">AB+(<?php echo $eightcount->num_rows();?>)</a>
                                <a href="<?php echo site_url('stock?id=8');?>">AB-(<?php echo $fivecount->num_rows();?>)</a>
                                <a href="<?php echo site_url('stock?id=1');?>">0+(<?php echo $onecount->num_rows();?>)</a>
                                <a href="<?php echo site_url('stock?id=2');?>">0-(<?php echo $twocount->num_rows();?>)</a>
                                
                                
                                
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
					<div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12">
                                    <h1 class="my-5">Blood Donors List:</h1>
                                    
                                    <!--show output result from table--->
									
				
                                        <table border="1" style="margin-right:5px; color:black" class="table">
                                            <tr class="active" style="background-color:#6F1310;color:white;">
                                                <th>Full_Name</th>
                                                <th>Mobile_No</th>
                                                <th>Area</th>
                                                <th>Blood_Group</th>
                                                <th>Last blood donate</th>
                                                <th>Details</th>
                                          
                                            </tr>
				<?php 
				if(!empty($_GET['id']))
			{
			if($_GET['id'] == 1){
				$blood_group = 'O+';
				foreach($results as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  }
			  } elseif($_GET['id'] == 2){
				  $blood_group = 'O-';
				foreach($bloodtwo as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 3){
				  $blood_group = 'A+';
				foreach($bloodthree as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 4){
				  $blood_group = 'A+';
				foreach($bloodfour as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 5){
				  $blood_group = 'A+';
				foreach($bloodfive as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 6){
				  $blood_group = 'A+';
				foreach($bloodsix as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 7){
				  $blood_group = 'A+';
				foreach($bloodseven as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			  } } elseif($_GET['id'] == 8){
				  $blood_group = 'A+';
				foreach($bloodeight as $row)
			  {
			  ?>
                            <tr class="danger">
							
                                <td>
                                    <?php echo $row->full_name; ?>
                                </td>
								<td>
                                    <?php echo $row->mobile_no; ?>
                                </td>
								<td>
                                    <?php echo $row->area; ?>
                                </td>
								<td>
                                    <?php echo $row->blood_group; ?>
                                </td>
								<td>
                                    <?php echo $row->l_date; ?>
                                </td>
								<td>
                                    <a href="<?php echo site_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
                                                    
													
                                
                            </tr>
                            <?php
			} } }
			 ?>
			 
                                                 
                                        </table>
				
                                            <!---end table-->
					
                                
                            </div>
                        </div>
                    </div>
					<div class="clearfix"></div>

        </section>
<div class="clearfix"></div>

<?php include ('partial/footer.php');?>

            