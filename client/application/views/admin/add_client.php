<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
            	<h3>Add Client</h3>
				<form action="<?php echo base_url();?>index.php/Client/add_client" method="POST">
				      <div class="card p-3">
				      	<p class="font-weight-bold">Basic Information</p>
			        	<div class="row">
			        		<div class="col-3">
			        			<div class="form-group">
				        			<input type="text" name="data[name]" placeholder=" " autocomplete="disabled" class="form-control" id="name">
				        			<label for="name">Name</label>
				        		</div>
			       			 </div>
			       			 <div class="col-3">
			       			 	<div class="form-group">
			       			 		<input type="text" name="data[client_code]" placeholder=" " autocomplete="disabled" id="client_code" class="form-control">
				        			<label for="client_code">Client Code</label>
			       			 	</div>
			       			 </div>
			       			 <div class="col-3">
			       			 	<div class="form-group">
				        			<input type="password" name="data[pass1]" placeholder=" " autocomplete="disabled"  id="pass_t" class="form-control">
				        			<label for="pass_t">Password Trade</label>
			       			 	</div>
			       			 </div>
			       			 <div class="col-3">
			       			 	<div class="form-group">
			       			 		<input type="password" name="data[pass2]" placeholder=" " autocomplete="disabled"  id="pass_i" class="form-control">
				        			<label for="pass_i">Password Investor</label>
			       			 	</div>
			       			 </div>
			            </div>
			            <hr/>
			      		<p class="font-weight-bold">Broker Information</p>

			            <div class="row">
			            	 <div class="col-6">
			            	 	<div class="form-group">
			            	 		<label for="broker_id">Select Broker</label>
				        			<select id="broker_id" class="form-control" name="data[broker_id]" placeholder=" " autocomplete="disabled">
				        				<option value="1">Broker 1</option>
				        				<option value="2">Broker 2</option>
				        				<option value="3">Broker 3</option>
				        			</select>
			            	 	</div>
			       			 </div>
			       			 <div class="col-6">
			            	 	<div class="form-group">
				        			<label for="perc">Brockrage %</label>
				        			<input id="perc" type="text" name="data[broker_per]" class="form-control" placeholder=" " autocomplete="disabled">
		       			 		</div>
			       			 </div>
			       			 <div class="col-md-6 form-group">
			            	 	<div class="form-group">
				        			<label>Comment</label>
				        			<input type="text" name="data[comment]" class="form-control">
			            	 	</div>
			       			 </div>
			       		</div>
			       		<hr/>
				      	<p class="font-weight-bold">Exchange Information</p>

			            <div class="row">
			        		 <div class="col-md-6 form-group">
			        			<label>Forex</label>
			        			<select class="form-control" name="data[forex]">
			        				<option value="1">Fix</option>
			        				<option value="2">Paisa</option>
			        				<option value="3">Trade</option>
			        			</select>
			       			 </div>
			       			 <div class="col-md-6 form-group">
			        			<label>MCX</label>
			        			<select class="form-control" name="data[mcx]">
			        				<option value="1">Fix</option>
			        				<option value="2">Paisa</option>
			        				<option value="3">Trade</option>
			        			</select>
			       			 </div>
			       			 <div class="col-md-6 form-group">
			        			<label>Balance</label>
			        			<select class="form-control" name="">
			        				<option value="1">Yes</option>
			        				<option value="2">No</option>
			        			</select>
			       			 </div>
			       			  <div class="col-md-6 form-group">
			        			<label>Balance Amount</label>
			        			<input type="text" name="data[balance]" class="form-control">
			       			 </div>
			       			 <div class="col-md-6 form-group">
			        			<label>Volume</label>
			        			<input type="text" name="data[vol]" class="form-control">
			       			 </div>
			       			 <div class="col-md-6 form-group">
			        			<label>Script Group</label>
			        			<select name="data[s_id]" class="form-control">
			        				<?php
			        					foreach ($group as $g) {
			        						echo "<option value=".$g->id.">".$g->g_name."</option>";
			        					}
			        				?>
			        			</select>
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
    </div>
</main>