
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">How to contribute MyEtherWallet
			  						
			  					</div> 
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/create_contribute_mew'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
				  				<form role="form" method="post" >
									<div class="form-group">
										 
										<label for="heading">
											Heading
										</label>
										<input type="text" class="form-control heading " placeholder="Heading" name='heading' id="heading" />
										<span class="text-danger heading-error error"></span>
									</div>
									<div class="form-group">
										 
										<label for="content">
											Content
										</label>
										<textarea  class="form-control content-box" placeholder="content..." name='content'  rows="15" id='ckeditor' /></textarea>
										<span class="text-danger content-error error"></span>
									</div>
									
									
									<button type="submit" class="btn btn-primary main-store" ' name="submit" data-table='contribute_mew' >
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

 