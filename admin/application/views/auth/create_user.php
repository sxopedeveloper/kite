<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
 <main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
                  <h4><?php echo lang('create_user_heading');?></h4>
                  <p><?php echo lang('create_user_subheading');?></p>
                  <div id="infoMessage"><?php echo $message;?></div>
                </div>
              <form action="<?php echo base_url();?>index.php/auth/create_user" method="POST">
                  <div class="row">
                  
                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="u_name" placeholder=" " autocomplete="disabled" name="first_name">
                        <label for="f_name">First Name</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="l_name" placeholder=" " autocomplete="disabled" name="last_name">
                        <label for="l_name">Last Name</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" placeholder=" " autocomplete="disabled" name="username">
                        <label for="user">User</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id" placeholder=" " autocomplete="disabled" name="email">
                        <label for="id">Email</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="phn" placeholder=" " autocomplete="disabled" name="phone">
                        <label for="phn">Phone</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" placeholder=" " autocomplete="disabled" name="password">
                        <label for="password">Password</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="password_confirm" placeholder=" " autocomplete="disabled" name="password_confirm">
                        <label for="password_confirm">Password Confirm</label>
                    </div>
                  </div>
                  <div class="col-2">
                      <button type="submit" class="btn btn-sm btn-success btn-block">Create</button>
                  </div>
                  <div class="col-2">
                      <button type="reset" class="btn btn-sm btn-danger btn-block">Reset</button>
                  </div>
                </div>
              </form>    
            </div>
        </div>
      </div>
<?php $this->load->view('admin/layout/footer'); ?>