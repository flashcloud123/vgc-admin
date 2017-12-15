
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  		<div class="col-md-8  " >
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">change admin's password</div>
								<?php if($this->session->flashdata('form_error')): ?>
								<h4 class="alert-success alert success-msg"><?php echo $this->session->flashdata('form_error'); ?></h4>
								<?php endif; ?>
								<form role="form" class="admin-transaction" method="post" action='<?php echo base_url('dashboard/password_change'); ?>'>
									<div class="form-group">

										<input type="password" name='oldpassword' placeholder="old password" class="form-control"  />
									
									</div>
									<div class="form-group">

										<input type="password" name='newpassword' placeholder="New password" class="form-control"  />
									
									</div>
									
									<div class="form-group"> 

										<input type="password"  placeholder="Retype New password" class="form-control" name='retype' />
										
									</div>
									
									
									<button type="submit" name='submit' class="btn btn-primary ">
										Submit 
									</button>
								</form>
				  			</div>
		  				</div>
		  			</div>
		  		</div>
	
		  		
		  	</div>

		  </div>
		</div>
    </div>

 