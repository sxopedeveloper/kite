<div class="app-main__outer">
    <div class="app-main__inner">
     <h3>Add Broker</h3>
		<form action="<?php echo base_url();?>index.php/Broker/add_broker" method="POST">
		      <div class="card p-3">
		      	<p class="font-weight-bold">Basic Information</p>
					        <div class="row">
					        		<div class="col-md-6">

					        			<div class="form-group">
						        			<label>Name</label>
						        			<input type="text" name="data[name]" class="form-control">
						        		</div>
					       			 </div>
					       			 <div class="col-md-6">
					       			 	<div class="form-group">
						        			<label>Code</label>
						        			<input type="text" name="data[broker_code]" class="form-control">
					        			</div>
					       			 </div>
					       			 <div class="col-md-6">
					       			 	<div class="form-group">
						        			<label>Password</label>
						        			<input type="password" name="data[pass]" class="form-control">
					        			</div>
					       			 </div>
					       			 <div class="col-md-6">
					       			 	<div class="form-group">
						        			<label>Note</label>
						        			<input type="text" name="data[remark]" class="form-control">
					        			</div>
					       			 </div>
					            </div>
				       </div>
				        <div class="card mt-2 p-3">
					        <div class="row">
					        	<div class="col-md-3">
				        			<div class="form-group">
				        				<button type="submit" class="btn btn-success">Create</button>
				        				<button type="reset" class="btn btn-danger">Reset</button>
					        		</div>
				       			 </div>
					        </div>
					    </div>
        </form>
    </div>
</div>