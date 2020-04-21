<body class="bg-light streaming-page">
<div class="d-flex sidebar-box">
    <div class="sidebar-logo">
        <a href="javascript:void(0)">
            <img src="<?php echo base_url(); ?>assets/images/kite.svg" class="img-fluid" alt="">
        </a>
    </div>
    <nav class="sidebar">
        <ul class="nav flex-column h-100">
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Dashboard/" class="nav-link">
                    <!-- <img src="<?php echo base_url(); ?>assets/images/kite.svg" class="img-fluid" alt=""> -->
                </a>
            </li>
            <!-- <li class="nav-item mt-auto my-2">
                <a href="javascript:void(0);" class="nav-link p-3">
                    <img src="<?php echo base_url(); ?>assets/images/client.svg" class="img-fluid" alt="">
                </a>
            </li>-->
            
            <li class="nav-item mt-auto my-2 ">
                <a href="<?php echo base_url(); ?>index.php/Dashboard/" class="nav-link p-3">
                     <i data-feather="bar-chart-2" ></i>
                     <span>Home</span>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/script.svg" class="img-fluid" alt=""> -->
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Dashboard/key_gen" class="nav-link p-3">
                     <i data-feather="key" ></i>
                     <span>API KEY</span>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/broker.svg" class="img-fluid" alt=""> -->
                </a>
            </li> 
             <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>Admin/timezone" class="nav-link p-3">
                    <i data-feather="clock"></i>
                    <span>Timezone</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="<?php echo base_url(); ?>index.php/Dashboard/bhavcopy" class="nav-link p-3">
                     <i data-feather="upload-cloud" ></i>
                     <span>BhauCopy</span>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/broker.svg" class="img-fluid" alt=""> -->
                </a>
            </li>
            <li class="nav-item mt-auto my-2">
                <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link p-3 text-center">
                     <i data-feather="log-out"></i>
                     <span>Logout</span>
                    <!-- <img src="<?php echo base_url(); ?>assets/images/logout.svg" class="w-75" alt=""> -->
                </a>
            </li>
        </ul>
    </nav>