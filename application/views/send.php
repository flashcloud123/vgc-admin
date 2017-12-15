
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		
		  		<div class="col-md-12">
		  			<?php if($this->session->flashdata('message')): ?>
						<h4 class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></h4>
		  			<?php endif; ?>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<div class="alert-success alert success-msg" style="font-size: 26px;display: none;"> </div>
				  				<form role="form">
				  					<div class="form-group">
								 
										<label for="amount-doller">
											Send to <span class="text-danger"> (* Please send coins only to wallet address)</span>
										</label>
										<select name="send-type" class="form-control">
											
											<option value ="">where to send</option>
											<option value ="wallet">send coins to wallet address</option>
											<!-- <option value ="exchange">send coins to exchanghe address</option> -->
											
										</select>
									</div>
							<div class="form-group">
								 
								<label for="amount-doller">
									Amount Dollers
								</label>
								<input type="text" class="form-control" id="amount-doller" />
							</div>
							<div class="form-group">
								 
								<label for="total-coins">
									Coins
								</label>
								<input type="text" class="form-control" id="total-coins"  readonly/>
							</div>

							<div class="form-group">
								 
								<label for="total-coins">
									Zedex Address
								</label>
								<input type="text" class="form-control" id="zedex-address" />
							</div>
						
							
							
							<a href='javascript:void(0);' class="btn btn-default send-payout">
								Submit
							</a>
						</form>

						
					  		
							</div>
							<?php if($this->session->flashdata('error')): ?>
								<h3 class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></h3>
							<?php endif; ?>
							<div class="col-md-6">
								<form action="<?php echo base_url('dashboard/excelUploadOnly'); ?>" method="post" enctype="multipart/form-data">
							
							<div class="form-group">
								 
								<label for="total-coins">
									Select excel file
								</label>
								<input type="file" class="form-control" name='file'/>
							</div>

							<div class="form-group">
								 
								<label for="total-coins">
									Select ROI Date
								</label>
								<input type="date" class="form-control roi-date" name='date'/>
							</div>
							<div class="form-group">
								 
								
								<input type="submit" name='submit' class="form-control" value='Submit'/>
							</div>

						</form>
							</div>
		  				</div>
		  			</div>
		  			
		  		</div>
		  	</div>

		  </div>
		</div>
    </div>

 