
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">How to contribute Metamask</div>
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/create_contribute_metamask'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  		<table class="table">
				              <thead>
				                <tr>
				                  <th>S.No</th>
				                  <th>heading</th>
				                  <th>content</th>
				                  
				                  <th>action</th>
				                </tr>
				              </thead>
				              <tbody>
				              	<?php  $i=1; ?>
				               <?php  if(isset($contribute_metamask)): ?>
				               	<?php  foreach ($contribute_metamask as $banner): ?>
				                <tr class="row_<?php echo $banner->id; ?>" >
				                  <td><?php echo $i; ?></td>
				                  <td><?php echo $banner->heading; ?></td>
				                  <td><?php echo $banner->content; ?></td>
				                 
				                  <td>
				                  	<a href="<?php echo base_url('dashboard/edit_contribute_metamask/'.$banner->id); ?>" class="btn btn-primary"> Edit</a> |
				                  	<a href="javascript:void(0);" class="btn btn-danger delete" data-id='<?php echo $banner->id; ?>' data-table='contribute_metamask' data-type='banner_section'>  Delete</a>
				                  </td>
				                  
				                </tr>
				            <?php  $i++; endforeach; ?>
						        <?php else: ?>
						        	<tr>
						        		<td></td>
						        		<td></td>
						        		<td>No content yet !</td>
						        		<td></td>
						        		<td></td>
						        	</tr>
				               <?php endif; ?>
				              </tbody>
				            </table>
							</div>
		  				</div>
		  			</div>
		  			
		  		</div>
		  	</div>

		  </div>
		</div>
    </div>

 