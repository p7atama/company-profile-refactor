<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <?php $login = $this->session->userdata('nama'); ?>
                    <?php  if($login == 'SALES') { ?>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?php echo base_url('pintumasuk/dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="<?php echo base_url('pintumasuk/home') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Home
                    </a> 

                    <a class="nav-link" href="<?php echo base_url('pintumasuk/vision_mission') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-bullseye"></i></div>
                        Vision & Mission
                    </a> 

                    <a class="nav-link" href="<?php echo base_url('pintumasuk/line_of_business') ?>"> 
                        <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                        Line of Business
                    </a>  
                    <?php } ?>

                    <?php  if($login == 'DIVISI') { ?>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?php echo base_url('pintumasuk/dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="<?php echo base_url('pintumasuk/line_of_business') ?>"> 
                        <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                        Line of Business
                    </a>     
                    <?php } else { }; ?>
                    <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                        Line of Business
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/stamping') ?>">
                                Stamping Division
                                <div class="sb-nav-link-icon"></div>
                            </a>
                            <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/injection') ?>">
                                Injection Division
                                <div class="sb-nav-link-icon"></div>
                            </a>
                            <a class="nav-link collapsed" href="#">
                                Machining Division
                                <div class="sb-nav-link-icon"></div>
                            </a>    
                            <a class="nav-link collapsed" href="#">
                                Assembly Division
                                <div class="sb-nav-link-icon"></div>
                            </a>  
                            <a class="nav-link collapsed" href="#">
                                Tooling Division
                                <div class="sb-nav-link-icon"></div>
                            </a>                            
                        </nav>
                    </div> -->
                    <?php  if($login == 'HRD') { ?>
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url('pintumasuk/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-walking"></i></div>
                            Career
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <!-- <a class="nav-link collapsed" href="#">
                                    Master Major
                                    <div class="sb-nav-link-icon"></div>
                                </a> -->
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/job_vacancy') ?>">
                                    Job Vacancy
                                    <div class="sb-nav-link-icon"></div>
                                </a>
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/list_of_applicants') ?>">
                                    List of Applicants
                                    <div class="sb-nav-link-icon"></div>
                                </a>       
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/check_applicants') ?>">
                                    Applicants Check
                                    <div class="sb-nav-link-icon"></div>
                                </a>
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/disclaimer') ?>">
                                    Disclaimer
                                    <div class="sb-nav-link-icon"></div>
                                </a>  
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/faq') ?>">
                                    FAQ
                                    <div class="sb-nav-link-icon"></div>
                                </a>                        
                            </nav>
                        </div>

                        <a class="nav-link" href="<?php echo base_url('pintumasuk/contact') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Contact
                        </a> 
<!-- 
                        <a class="nav-link" href="<?php echo base_url('user/register') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                             Add New User
                        </a>  -->
                    <?php } ?>

                    <?php  if($login == 'admin') { ?>
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url('pintumasuk/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="<?php echo base_url('pintumasuk/home') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a> 

                        <a class="nav-link" href="<?php echo base_url('pintumasuk/vision_mission') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullseye"></i></div>
                            Vision & Mission
                        </a>

                        <a class="nav-link" href="<?php echo base_url('pintumasuk/line_of_business') ?>"> 
                            <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                            Line of Business
                        </a>  

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-walking"></i></div>
                            Career
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <!-- <a class="nav-link collapsed" href="#">
                                    Master Major
                                    <div class="sb-nav-link-icon"></div>
                                </a> -->
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/job_vacancy') ?>">
                                    Job Vacancy
                                    <div class="sb-nav-link-icon"></div>
                                </a>
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/list_of_applicants') ?>">
                                    List of Applicants
                                    <div class="sb-nav-link-icon"></div>
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/check_applicants') ?>">
                                    Applicants Check
                                    <div class="sb-nav-link-icon"></div>
                                </a>
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/disclaimer') ?>">
                                    Disclaimer
                                    <div class="sb-nav-link-icon"></div>
                                </a>   
                                <a class="nav-link collapsed" href="<?php echo base_url('pintumasuk/faq') ?>">
                                    FAQ
                                    <div class="sb-nav-link-icon"></div>
                                </a>                           
                            </nav>
                        </div>

                        <a class="nav-link" href="<?php echo base_url('pintumasuk/contact') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Contact
                        </a> 

                        <a class="nav-link" href="<?php echo base_url('user/register') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                             Add New User
                        </a> 
                    <?php } ?>
                    


                    <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div> -->
                </div>
            </nav>
        </div>