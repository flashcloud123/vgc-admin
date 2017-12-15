
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">banner sections contents
			  						
			  					</div> 
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/create_banner'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
				  				<form role="form" method="post" >
									<div class="form-group">
										 
										<label for="heading">
											Main Heading
										</label>
										<input type="text" class="form-control heading " placeholder="Main Heading" name='heading' value='<?php echo $banner_sections->heading ? $banner_sections->heading : ''; ?>' id="heading" />
										<span class="text-danger heading-error error"></span>
									</div>

									<div class="form-group">
										 
										<label for="main_sub_heading">
											Main sub heading
										</label>
										<input type="text" class="form-control heading " placeholder="Main sub heading" name='heading' value='<?php echo $banner_sections->main_sub_heading ? $banner_sections->main_sub_heading : ''; ?>' id="main_sub_heading" />
										<span class="text-danger main_sub_heading-error error"></span>
									</div>

									<div class="form-group">
										 
										<label for="sub_heading">
											sub heading
										</label>
										<input type="text" class="form-control heading " placeholder="Sub Heading" name='heading' value='<?php echo $banner_sections->sub_heading ? $banner_sections->sub_heading : ''; ?>' id="sub_heading" />
										<span class="text-danger sub_heading-error error"></span>
									</div>

									<div class="form-group">
										<label for="heading_bottom">
											Bottom heading
										</label>
										<input type="text" class="form-control heading " placeholder="bottom heading" value='<?php echo $banner_sections->heading_bottom ? $banner_sections->heading_bottom : ''; ?>' name='heading' id="heading_bottom" />
										<span class="text-danger heading_bottom-error error"></span>
										
									</div>
									
									<button type="submit" class="btn btn-primary update-home" data-id='<?php echo $banner_sections->id; ?>' name="submit" data-table='home'  data-type='banner_section'>
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

 