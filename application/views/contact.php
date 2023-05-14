<?php include ('partial/header.php');?>
        
        <!---</section> ---->

    <section class="contact">
		<!--<h2>ABOUT  US</h2>-->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="contact_block">
                        <div class="contact_block_icon rollIn animated wow"><span><i class="fa fa-home"></i></span></div>
                        <span>Tasnim Akther Juhee
						<br>58/1, Hasna House, Road no: 5C</br>
						Kuarpar, Sylhet</br>
              </span> </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_block">
                        <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa fa-phone"></i></span></div>
                        <span> 01738-232322
						<br>01811-788833</br></span></div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_block">
                        <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa fa-pencil"></i></span></div>
                        <span> <a href="#"> tasnimjuhee@yahoo.com
						<br>tasnimjuhee1@gmail.com</br></span> </div>
                </div>
                </div>
				<div class="row">
                
                <div class="col-md-6 offset-md-3 wow fadeInUp delay-06s">
				<h2 class="feed">Online Feedback</h2>
                    <div class="form">
					<?php if ($this->session->flashdata('success'))
					{
						$message=$this->session->flashdata('success');
					?>
                    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p><?php echo $message;?></p>
  
  </div>
					<?php } ?>
                    <form action="<?php echo base_url('Contact/sendmail');?>" method ='post'>
                        <input class="input-text animated wow flipInY delay-02s" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text animated wow flipInY delay-02s" type="text" name="phone" value="Phone *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text animated wow flipInY delay-04s" type="text" name="email" value="E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text animated wow flipInY delay-04s" type="text" name="subject" value="Subject *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <textarea name="message" class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Message *</textarea>
                        <input class="input-btn animated wow flipInY delay-08s" type="submit" name="submit" value="send message">
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    



        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 100
            });
            wow.init();
            document.getElementById('').onclick = function () {
                var section = document.createElement('section');
                section.className = 'wow fadeInDown';
                section.className = 'wow shake';
                section.className = 'wow zoomIn';
                section.className = 'wow lightSpeedIn';
                this.parentNode.insertBefore(section, this);
            };
        </script>
        
        
<?php include ('partial/footer.php');?>
       
        	
