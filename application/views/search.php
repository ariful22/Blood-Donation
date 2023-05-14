<?php include 'partial/header.php'?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		
<div class="search-page">
<table border="1" style="margin-right:5px; color:black" class="table">
	<tr>
		<th>Full_Name</th>
    <th>Mobile_No</th>
    <th>Area</th>
    <th>Blood_Group</th>
	<th>Last blood donate</th>
	<th>View Detail</th>
	</tr>
	
<?php
 foreach($results as $row){ ?>
		
			<tr class="danger">
				<td><?php echo $row->full_name?></td>
				<td><?php echo $row->mobile_no?></td>
				<td><?php echo $row->area?></td>
				<td><?php echo $row->blood_group?></td>
				<td><?php echo $row->l_date?></td>
				
				<td>
                                    <a href="<?php echo base_url('Home/detailview?id='.$row->id.'');?>"><button type="button">Details</button></a>
                                                    </td>
			</tr>
		
            
 <?php } ?>
		</table>
		</div>
		</div>
	</div>
</div>
<?php //include 'inc/footer.php'?>