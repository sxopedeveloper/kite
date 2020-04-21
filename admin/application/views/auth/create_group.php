<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
 <main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
					<h1><?php echo lang('create_group_heading');?></h1>
					<p><?php echo lang('create_group_subheading');?></p>

					<div id="infoMessage"><?php echo $message;?></div>
				</div>
				<form action="<?php echo base_url();?>index.php/auth/create_group" method="POST">
					<div class="row">
	                  <div class="col-4">
	                    <div class="form-group">
	                        <input type="text" class="form-control" id="g_name" placeholder=" "  autocomplete="disabled" name="group_name">
	                        <label for="g_name">Group Name</label>
	                    </div>
	                  </div>
	                  <div class="col-4">
	                    <div class="form-group">
	                        <input type="text" class="form-control" id="des" placeholder=" "  autocomplete="disabled" name="description">
	                        <label for="des">Description</label>
	                    </div>
	                  </div>

					</div>
					<div class="row">
					  <div class="col-1">
	                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
	                  </div>
	                  <div class="col-1">
	                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
	                  </div>
					</div>
				</form>
<!-- <?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?> -->

<?php $this->load->view('admin/layout/footer'); ?>