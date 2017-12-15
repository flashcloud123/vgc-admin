
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
				  				
					  		<table class="table">
				              <thead>
				                <tr>
				                  <th>S.No</th>
				                  <th>logo</th>
				                 
				                  <th>Heading</th>
				                  <th>action</th>
				                </tr>
				              </thead>
				              <tbody>
				              	<?php  $i=1; ?>
				               <?php  if(isset($logos)): ?>
				               	<?php  foreach ($logos as $logo): ?>
				                <tr class="row_<?php echo $logo->id; ?>" >
				                  <td><?php echo $i; ?></td>
				                  	<td>
				                  		
				                  		<img height='100' src="<?php echo base_url('uploads/'.$logo->logo) ?>">
				                  	</td>
				                  	<td>
				                  		<p>
				                  		<?php echo isset($logo->heading)  ? $logo->heading : ''; ?>
				                  			</p>
				                  		</td>
				                  <td>
				                  
				                  	<a href="javascript:void(0);" class="btn btn-danger delete" data-id='<?php echo $logo->id; ?>' data-table='logo'> Delete</a>
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

 