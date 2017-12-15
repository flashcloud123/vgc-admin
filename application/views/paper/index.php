
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">About contents</div>
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/upload_paper'); ?>" >Upload new White paper</a>
									
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
				               <?php  if(isset($white_papers)): ?>
				               	<?php  foreach ($white_papers as $paper): ?>
				                <tr class="row_<?php echo $paper->id; ?>" >
				                  <td><?php echo $i; ?></td>
				                  	<td>
				                  		
				                  		<a href="<?php echo base_url('uploads/'.$paper->name); ?>" target='_BLANK' downlod><?php echo $paper->name; ?></a>
				                  	</td>
				                  	<td>
				                  		<p>
				                  		<?php echo isset($paper->heading)  ? $paper->heading : ''; ?>
				                  			</p>
				                  		</td>
				                  <td>
				                  
				                  	<a href="javascript:void(0);" class="btn btn-danger delete" data-id='<?php echo $paper->id; ?>' data-table='paper'> Delete</a>
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

 