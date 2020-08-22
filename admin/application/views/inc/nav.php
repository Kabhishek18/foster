 <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <!-- Left Item Top Nav -->
                        <h1>Foster Bright Learning Management System</h1>

                    </div>
                    <ul class="nav navbar-nav float-right">
                     
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                       <!--  <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vaidaan..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li> -->
                    
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void0" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600" style="text-transform: capitalize;"><?=$users_name?></span><span class="user-status">
                                    <?php 
                                                        if($users_type=='0'){
                                                            echo "Super";
                                                        }elseif($users_type=='1'){echo "Admin";}
                                                        else{echo "User";}?>
                                </span></div><span><img class="round" src="<?=base_url()?>resource/upload/<?=$users_image?>" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?=base_url()?>user/useredit/<?=$users_id?>"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=base_url()?>Home/Logout"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
   
    <!-- END: Header -->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url()?>resource/html/ltr/vertical-menu-template-dark/<?=base_url('dashboard')?>">
                        
                        <h2 class="brand-text mb-0">Admin Panel</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item "><a href="javascript:void(0)"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                    <ul class="menu-content">
                        <li><a href="<?=base_url()?>dashboard"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Dashboard</span></a>
                        </li>
                        <li><a href="<?=base_url()?>profile"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Profile</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Categories, Courses</span>
                </li>
                <li class=" nav-item"><a href="<?=base_url()?>tutor"><i class="feather icon-list"></i><span class="menu-title" data-i18n="User">Courses,Category</span></a>
                    <ul class="menu-content">
                        <li><a href="<?=base_url()?>category"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Category</span></a>
                        </li>
                        <li><a href="<?=base_url()?>course"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Courses</span></a>
                        </li>
                    </ul>
                </li>
               
                <li class=" navigation-header"><span>Student</span>
                </li>
                <li class=" nav-item"><a href="<?=base_url()?>student"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Student</span></a>
                </li>
                <li class=" navigation-header"><span>Tutor</span>
                </li>
                <li class=" nav-item"><a href="<?=base_url()?>tutor"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Tutor</span></a>
                </li>

                

               
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->