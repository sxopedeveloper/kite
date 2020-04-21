<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
					<h1>API Key</h1>
					<p>Generate API Token</p>

					<!-- <div id="infoMessage"><?php echo $message;?></div> -->
                </div>
                <div class="row">
					<div class="col-12">
						<form action="<?php base_url();?>index.php/Dashboard/token_gen">
							<div class="row">
				        		<div class="col-4">
				        			<div class="form-group">
					        			<input type="text" name="data[api_key]" placeholder=" " autocomplete="disabled" class="form-control" id="api_key">
					        			<label for="api_key">Api Key</label>
					        		</div>
				       			 </div>
				       			 <div class="col-4">
				       			 	<div class="form-group">
				       			 		<input type="text" name="data[api_sec]" placeholder=" " autocomplete="disabled" id="api_sec" class="form-control">
					        			<label for="api_sec">Api Secrte</label>
				       			 	</div>
				       			 </div>
				       			 <div class="col-4">
				       			 	<div class="form-group">
					        			<a href="https://kite.trade/connect/login?api_key=kjllz3s85ak07q7a&v=3" class="btn btn-primary">Generate</a>
				       			 	</div>
				       			 </div>
			            	</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</main>