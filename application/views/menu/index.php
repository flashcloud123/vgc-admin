
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  	
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">menu contents</div>
								<span class="text-success success-msg"></span>
								<div class="panel-options">
									<a href="<?php echo base_url('dashboard/create_menu'); ?>" >Add New content</a>
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  		<table class="table">
				              <thead>
				                <tr>
				                  <th>S.No</th>
				                  <th>menu</th>
				                 
				                  <th>order</th>
				                  <th>action</th>
				                </tr>
				              </thead>
				              <tbody>
				              	<?php  $i=1; ?>
				               <?php  if(isset($menus)): ?>
				               	<?php  foreach ($menus as $menu): ?>
				                <tr class="row_<?php echo $menu->id; ?>" >
				                  <td><?php echo $i; ?></td>
				                  <td><?php echo $menu->menu; ?></td>
				               
				                  <td>

				                  	order: <input type="number" placeholder="order" name="menu_order" value='<?php echo $menu->menu_order; ?>' data-id='<?php echo $menu->id; ?>' class='menu-order'>
				                  	<span class="ajax-loder" id='loader_<?php echo $menu->id; ?>'><img src="<?php echo base_url('assets/images/ajax-loader.gif'); ?>">	</span>
				                  </td>
				                  <td>
				                  	<a href="<?php echo base_url('dashboard/edit_menu/'.$menu->id); ?>" class="btn btn-primary"> Edit</a> |
				                  	<a href="javascript:void(0);" class="btn btn-danger delete" data-table='menu' data-id='<?php echo $menu->id; ?>'> Delete</a>
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

 