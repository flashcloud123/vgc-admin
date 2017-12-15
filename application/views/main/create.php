
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
									<a href="<?php echo base_url('dashboard/create_about'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
				  				<form role="form" method="post" action="<?php echo base_url('dashboard/store_about'); ?>">
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
									<div class="form-group">
										 
										<label for="content">
											Section type
										</label>
										<select name='section' class="section-type">
												<?php if(isset($section_types)): ?>
													<?php foreach ($section_types as $section): ?>

													<option value="<?php echo $section->id; ?>"><?php echo $section->section_type; ?></option>
													<?php endforeach; ?>
												<?php else: ?>
													<option value="">No sections available</option>
												<?php endif; ?>
										</select>
										<span class="text-danger section-error error"></span>
									</div>
									
									
									<button type="submit" class="btn btn-primary store" data-table='section' name="submit">
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

 