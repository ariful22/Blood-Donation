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
<div class="chngepage">
<div class="container">
  <div class="row">
	<div class="col-md-6 offset-md-4">  
<?php echo form_open(base_url().'users/changepassword/'.$person_info->id, array('id'=>'employee_form', 'class'=>'form-horizontal')); ?>
<div class="form-group form-group-sm">	
					<?php echo form_label('Username', 'username', array('class'=>'required control-label col-xs-3')); ?>
					<div class='col-md-6'>
						<div class="input-group">
							<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-user"></span></span>
							<?php echo form_input(array(
									'name'=>'username',
									'id'=>'username',
									'class'=>'form-control input-sm',
									'value'=>$person_info->username,
									'readonly'=>'true')
									);?>
						</div>
					</div> 
				</div>

				<?php $password_label_attributes = $person_info->id == "" ? array('class'=>'required') : array(); ?>

				<div class="form-group form-group-sm">	
					<?php echo form_label('Current password', 'current_password', array_merge($password_label_attributes, array('class'=>'control-label col-xs-3'))); ?>
					<div class='col-md-6'>
						<div class="input-group">
							<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
							<?php echo form_password(array(
									'name'=>'current_password',
									'id'=>'current_password',
									'class'=>'form-control input-sm')
									);?>
						</div>
					</div>
				</div>

				<div class="form-group form-group-sm">	
					<?php echo form_label('New Password', 'password', array_merge($password_label_attributes, array('class'=>'control-label col-xs-3'))); ?>
					<div class='col-md-6'>
						<div class="input-group">
							<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
							<?php echo form_password(array(
									'name'=>'password',
									'id'=>'password',
									'class'=>'form-control input-sm')
									);?>
						</div>
					</div>
				</div>

				<div class="form-group form-group-sm">	
				<?php echo form_label('Repeat Password', 'repeat_password', array_merge($password_label_attributes, array('class'=>'control-label col-xs-3'))); ?>
					<div class='col-md-6'>
						<div class="input-group">
							<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
							<?php echo form_password(array(
									'name'=>'repeat_password',
									'id'=>'repeat_password',
									'class'=>'form-control input-sm')
									);?>
						</div>
					</div>
				</div>
				<div class="form-group form-group-sm">	
				<?php echo form_label('', '', array_merge($password_label_attributes, array('class'=>'control-label col-xs-3'))); ?>
					<div class='col-md-6'>
							<?php
								echo form_submit(array(
									'name'=>'submit',
									'id'=>'submit',
									'value'=>'submit',
									'class'=>'btn btn-chng',
									
									)
								);

							?>
					</div>
				</div>
				
</div> 
</div> 
</div> 
</div> 
				<?php echo form_close(); ?>
				
				<script type="text/javascript">
//validation and submit handling
$(document).ready(function()
{
	$.validator.setDefaults({ ignore: [] });

	$.validator.addMethod("notEqualTo", function(value, element, param) {
		return this.optional(element) || value != $(param).val();
	}, '<?php echo 'Current password and new password should not be the same'; ?>');
	
	$('#employee_form').validate($.extend({
		submitHandler:function(form) 
		{
			$(form).ajaxSubmit({
				success:function(response)
				{
					dialog_support.hide();
					if(!response.success)
					{
						$.notify(response.message, {type: 'danger' });
					}
					else
					{
						$.notify(response.message, {type: 'success' });
					}
				},
				dataType:'json'
			});
		},
		rules:
		{
			current_password:
			{
				required:true,
				equalTo: "#current_password"
			},
			password:
			{
				required:true,
				notEqualTo: "#current_password"
			},	
			repeat_password:
			{
 				equalTo: "#password"
			}
   		},
		messages: 
		{
			password:
			{
				required:"<?php echo 'Password is required'; ?>"
			},
			repeat_password:
			{
				equalTo: "<?php echo 'Passwords do not match'; ?>"
     		}
		}
	}));
});
</script>
<?php $this->load->view('partial/footer');?>