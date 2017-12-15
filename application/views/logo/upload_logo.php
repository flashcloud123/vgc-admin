
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">About contents</div>
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/upload_logo'); ?>" >Upload new logo</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			<form method="post" enctype="multipart/form-data" action="<?php echo base_url('dashboard/upload_site_logo') ?>">
									
									
									<div class="form-group">
										 
										<label for="file">
											Select Logo
										</label>
										<input type="file" id="file" name='file' class="form-control" />
										<p class="help-block">
											Only png, jpg and jpeg files are supported .
										</p>
									</div>
									<div class="form-group">
										<label for="heading">
											Logo Heading
										</label>
										<input type="text" name="heading"  placeholder="Logo heading" class="form-control" id="heading">
									</div>

									
									<button type="submit" name='submit' class="btn btn-default">
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

 