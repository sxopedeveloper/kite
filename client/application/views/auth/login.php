<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>KiteConnect</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/newDesign/styles/framework.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/newDesign/fonts/css/fontawesome-all.min.css">
        <link rel="manifest" href="_manifest.json" data-pwa-version="set_by_pwa.html">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/newDesign/app/icons/icon-192x192.png">
    </head>
    <body class="theme-light" data-background="none" data-highlight="red2">
        <div id="page">
            <div id="page-preloader">
                <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
            </div>
            <div class="header header-fixed header-logo-center">
                <a href="index.html" class="header-title">Login</a>
                <!-- <a href="#" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a> -->
                <a href="#" data-toggle-theme-switch class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
            </div>
            <!-- <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
                <a href="index.html"><i class="fa fa-home"></i><span>Home</span></a>
                <a href="index-components.html"><i class="fa fa-star"></i><span>Features</span></a>
                <a href="index-pages.html" class="active-nav"><i class="fa fa-heart"></i><span>Pages</span></a>
                <a href="index-search.html"><i class="fa fa-search"></i><span>Search</span></a>
                <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>
                <div class="clear"></div>
            </div> -->
            <div class="page-content header-clear-medium">
                <div class="content-boxed left-40 right-40">
                    <div class="content top-10 bottom-20">
                        <h1 class="center-text uppercase ultrabold fa-3x">KiteConnect</h1>
                        <p class="center-text font-11 under-heading bottom-30 color-highlight">
                            Let's get you logged in
                        </p>
                        <form action="<?php echo base_url();?>index.php/auth/login" method="POST">
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-user font-11"></i>
                                <span>Username</span>
                                <em>(required)</em>
                                <input type="name" placeholder="Username" name="identity">
                            </div>
                            <div class="input-style has-icon input-style-1 input-required">
                                <i class="input-icon fa fa-lock font-11"></i>
                                <span>Password</span>
                                <em>(required)</em>
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="clear"></div>
                            <button type="submit" class="button button-margins button-m button-full button-round-small shadow-medium bg-orange-dark bg-highlight bottom-30">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="menu-settings" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="310" data-menu-effect="menu-over">
                <div class="content bottom-0">
                    <div class="menu-title"><h1>Settings</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                    <div class="divider bottom-20"></div>
                    <div class="toggle-with-icon">
                        <i class="toggle-icon round-tiny fa fa-moon bg-red2-dark color-white"></i>
                        <a href="#" class="toggle-switch toggle-ios toggle-off" data-toggle-theme data-toggle-height="27" data-toggle-width="50" data-toggle-content="toggle-content-1" data-toggle-checkbox="toggle-checkbox-1" data-bg-on="bg-green1-dark" data-bg-off="">
                            <span class="color-theme regularbold font-13">Dark Mode</span>
                            <strong></strong>
                            <u></u>
                        </a>
                    </div>
                    <div class="divider top-25 bottom-0"></div>
                    <div class="link-list link-list-2 link-list-long-border">
                        <a href="#" data-menu="menu-highlights">
                            <i class="fa fa-tint bg-green1-dark color-white round-tiny"></i>
                            <span>Page Highlight</span>
                            <strong>16 Color Highlights Included</strong>
                            <em class="bg-highlight">HOT</em>
                        </a>
                        <a href="#" data-menu="menu-backgrounds" class="no-border">
                            <i class="fa fa-brush bg-blue2-dark color-white round-tiny"></i>
                            <span>Page Background</span>
                            <strong>10 Page Gradients Included</strong>
                            <em class="bg-highlight">NEW</em>
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
        <script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/custom.js"></script>
    </body>
    <!--
    <!DOCTYPE html>
    <html lang="en">
        <head> -->
            <!-- Required Meta -->
            <!--     <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Login to KiteConnect</title>
            <meta name=”description” content=””>
            -->
            <!-- Fonts -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->
            <!-- Stylesheet -->
            <!-- <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
            <!-- <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"> -->
            <!-- </head> -->
            <!-- <body class="bg-light login-page">
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
        </html>-->
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