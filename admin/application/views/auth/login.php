<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login to KiteConnect</title>
    <meta name=”description” content=””>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bg-light login-page">
<main class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card border-0 shadow-sm p-5">
                    <form action="<?php echo base_url();?>index.php/auth/login" method="POST">
                        <div class="logo mb-3">
                            <img src="images/kite.svg" alt="" class="img-fluid">
                        </div>
                        <p class="h4 text-center mb-4 font-weight-normal">Login to KiteConnect</p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userId" placeholder=" " autocomplete="disabled" name="identity">
                            <label for="userId">User ID</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder=" " name="password">
                            <label for="password">Password</label>
                        </div>
                        <button class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>

<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->