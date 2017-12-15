
		  <div class="col-md-10 right-div" style="min-height: 560px;">
		  	<div class="row">
		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Total Blocks</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['blocks']; ?>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Current Blok size</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['currentblocksize']; ?>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Difficulty</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['difficulty']; ?>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">genproclimit</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['genproclimit']; ?>
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">hashespersec</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['hashespersec']; ?>
		  				</div>
		  			</div>
		  		</div>

				<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">networkhashps</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['networkhashps']; ?>
		  				</div>
		  			</div>
		  		</div>

				<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">pooledtx</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['pooledtx']; ?>
		  				</div>
		  			</div>
		  		</div>	

		  		<div class="col-md-3">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">generate</div>
						</div>
		  				<div class="panel-body">
		  					<?php echo $minig_info['generate'] ? 'True' : 'False'; ?>
		  				</div>
		  			</div>
		  		</div>		  			  		
		  	</div>

		  </div>
		</div>
    </div>

 