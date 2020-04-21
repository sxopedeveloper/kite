<body class="bg-light streaming-page">
<div class="d-flex">
    <nav class="sidebar d-none d-md-block">
        <ul class="nav flex-column h-100">
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>" class="nav-link">
                    <img src="<?php echo base_url(); ?>assets/images/kite.svg" class="img-fluid" alt="">
                </a>
            </li>
            <li class="nav-item mt-auto my-2">
                <a href="<?php echo base_url();?>index.php/auth/user_list" class="nav-link p-3">
                     <i data-feather="users" ></i>
                </a>
            </li>
            <!-- <li class="nav-item my-2">
                <a href="javascript:void(0);" class="nav-link p-3">
                     <i class="fa fa-chart-bar fa-2x"></i>
                </a>
            </li> -->
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Script/manage_script" class="nav-link p-3">
                    <i data-feather="database"></i>

                </a>
            </li>
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Script" class="nav-link p-3">
                    <i data-feather="server"></i>
                </a>
            </li>
             <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Report" class="nav-link p-3">
                    <i data-feather="file-text"></i>
                </a>
            </li>
            
             <li class="nav-item my-2">
                <a href="javascript:void(0);" class="nav-link p-3">
                    <i data-feather="trash" ></i>
                </a>
            </li>
            <li class="nav-item mt-auto my-2">
                <a href="<?php echo base_url(); ?>index.php/admin/sett" class="nav-link p-3">
                     <i data-feather="settings"></i>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link p-3 text-center">
                     <i data-feather="log-out"></i>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/logout.svg" class="w-75" alt=""> -->
                </a>
            </li>
        </ul>
    </nav>