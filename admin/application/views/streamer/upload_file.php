<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
					<h1>BhavCopy</h1>
					<p>Upload BhavCopy Segment Vise</p>

					<!-- <div id="infoMessage"><?php echo $message;?></div> -->
                </div>
                <div class="row">
					<div class="col-12">
						<form method="POST" action="<?php base_url();?>index.php/Dashboard/bhavcopy_upload" enctype="multipart/form-data">
							<div class="row">
				        		<div class="col-12">
				        			<div class="form-group">
				        				<h4>NSE</h4>
					        			<div class="file-upload">
										  <div class="file-select">
										    <div class="file-select-button" id="fileName">Choose File</div>
										    <div class="file-select-name" id="noFile">No file chosen...</div> 
										    <input type="file" name="nse_bhavcopy" id="chooseFile">
										  </div>
										</div>
					        		</div>
				       			 </div>
			            	</div>
			            	<button class="btn btn-primary btn-sm">SUBMIT</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</main>