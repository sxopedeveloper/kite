<body class="bg-light streaming-page">
<div class="d-flex sidebar-box">
    <div class="sidebar-logo">
        <a href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/images/kite.svg" class="img-fluid" alt="">
        </a>
    </div>
    <nav class="sidebar">
        <ul class="nav flex-column h-100">
            <!-- <li class="nav-item my-2">
                <a href="javascript:void(0)" class="nav-link second-logo">
                    <img src="<?php echo base_url(); ?>assets/images/kite.svg" class="img-fluid" alt="">
                </a>
            </li> -->
            <li class="nav-item mt-auto my-2">
                <a href="<?php echo base_url();?>admin/client_list" class="nav-link p-3">
                     <i data-feather="users" ></i>
                     <span>Manage Clients</span>
                </a>
            </li>
            <!-- <li class="nav-item my-2">
                <a href="javascript:void(0);" class="nav-link p-3">
                     <i class="fa fa-chart-bar fa-2x"></i>
                </a>
            </li> -->
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>Script/manage_script" class="nav-link p-3">
                    <i data-feather="database"></i> 
                    <span>Manage Scripts</span>
                </a>
            </li>
            <!-- <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>Script" class="nav-link p-3">
                    <i data-feather="server"></i>
                </a>
            </li> -->
             <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>Report" class="nav-link p-3">
                    <i data-feather="file-text"></i>
                    <span>Reports</span>
                </a>
            </li>

           <!--  <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>Admin/timezone" class="nav-link p-3">
                    <i data-feather="clock"></i>
                    <span>Timezone</span>
                </a>
            </li> -->
            
             <!-- <li class="nav-item my-2">
                <a href="javascript:void(0);" class="nav-link p-3">
                    <i data-feather="trash" ></i>
                </a>
            </li> -->
            <li class="nav-item mt-auto my-2">
                <a href="<?php echo base_url(); ?>admin/sett" class="nav-link p-3">
                    <i data-feather="settings"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>auth/logout" class="nav-link p-3 text-center">
                    <i data-feather="log-out"></i>
                    <span>Logout</span>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/logout.svg" class="w-75" alt=""> -->
                </a>
            </li>
        </ul>
    </nav>