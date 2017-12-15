
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">About contents
			  						
			  					</div> 
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/create_menu'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
				  				<form role="form" method="post" >
									<div class="form-group">
										 
										<label for="heading">
											Menu
										</label>
										<input type="text" class="form-control menu " placeholder="Menu" name='Menu' id="menu" value='<?php echo $menu->menu; ?>' />
										<span class="text-danger menu-error error"></span>
									</div>
									
									
									
									<button type="submit" class="btn btn-primary update-menu" data-id='<?php echo $menu->id; ?>' name="submit">
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

 