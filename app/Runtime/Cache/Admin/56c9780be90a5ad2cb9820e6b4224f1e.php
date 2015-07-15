<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<!---------------------------------head----------------------------->
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/fullcalendar/fullcalendar.print.css" media="print">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/Public/Admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/themer.css" media="screen">

<title>MWS Admin - Calendar</title>
<style>
	body, 
#mws-container
{
	background-image:url('../images/core/bg/paper.png');
}

#mws-sidebar, 
#mws-sidebar-bg, 
#mws-header, 
.mws-panel .mws-panel-header, 
#mws-login, 
#mws-login .mws-login-lock, 
.ui-accordion .ui-accordion-header, 
.ui-tabs .ui-tabs-nav, 
.ui-datepicker, 
.fc-event-skin, 
.ui-dialog .ui-dialog-titlebar, 
.jGrowl .jGrowl-notification, .jGrowl .jGrowl-closer, 
#mws-user-tools .mws-dropdown-menu .mws-dropdown-box, 
#mws-user-tools .mws-dropdown-menu.open .mws-dropdown-trigger
{
	background-color:#000047;
}

#mws-header
{
	border-color:#e2f700;
}

.mws-panel .mws-panel-header span, 
#mws-navigation ul li.active a, 
#mws-navigation ul li.active span, 
#mws-user-tools #mws-username, 
#mws-navigation ul li .mws-nav-tooltip, 
#mws-user-tools #mws-user-info #mws-user-functions #mws-username, 
.ui-dialog .ui-dialog-title, 
.ui-state-default, 
.ui-state-active, 
.ui-state-hover, 
.ui-state-focus, 
.ui-state-default a, 
.ui-state-active a, 
.ui-state-hover a, 
.ui-state-focus a
{
	color:#b1ff4c;
	text-shadow:0 0 6px rgba(230, 232, 208, 0.45);
}

#mws-searchbox .mws-search-submit, 
.mws-panel .mws-panel-header .mws-collapse-button span, 
.dataTables_wrapper .dataTables_paginate .paginate_disabled_previous, 
.dataTables_wrapper .dataTables_paginate .paginate_enabled_previous, 
.dataTables_wrapper .dataTables_paginate .paginate_disabled_next, 
.dataTables_wrapper .dataTables_paginate .paginate_enabled_next, 
.dataTables_wrapper .dataTables_paginate .paginate_active, 
.mws-table tbody tr.odd:hover td, 
.mws-table tbody tr.even:hover td, 
.ui-slider-horizontal .ui-slider-range, 
.ui-slider-vertical .ui-slider-range, 
.ui-progressbar .ui-progressbar-value, 
.ui-datepicker td.ui-datepicker-current-day, 
.ui-datepicker .ui-datepicker-prev, 
.ui-datepicker .ui-datepicker-next, 
.ui-accordion-header .ui-accordion-header-icon, 
.ui-dialog-titlebar-close
{
	background-color:#e2f700;
}

</style>

</head>

<body>


<!-----------------------------------top--------------------------------->
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/Public/Admin/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/Public/Admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
<!----------------------------------left------------------------------------->
 <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li><a href="<?php echo U(Admin/index/index);?>"><i class="icon-home"></i> 首页</a></li>
                    <li><a href="<?php echo U(Admin/user/index);?>"><i class="icon-user"></i> 用户管理</a></li>
                    <li class="active"><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                    <li><a href="files.html"><i class="icon-folder-closed"></i> File Manager</a></li>
                    <li><a href="table.html"><i class="icon-table"></i> Table</a></li>
                    <li>
                        <a href="#"><i class="icon-list"></i> Forms</a>
                        <ul>
                            <li><a href="form_layouts.html">Layouts</a></li>
                            <li><a href="form_elements.html">Elements</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    <li><a href="widgets.html"><i class="icon-cogs"></i> Widgets</a></li>
                    <li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
                    <li><a href="grids.html"><i class="icon-th"></i> Grids &amp; Panels</a></li>
                    <li><a href="gallery.html"><i class="icon-pictures"></i> Gallery</a></li>
                    <li><a href="error.html"><i class="icon-warning-sign"></i> Error Page</a></li>
                    <li>
                        <a href="icons.html">
                            <i class="icon-pacman"></i> 
                            Icons <span class="mws-nav-tooltip">2000+</span>
                        </a>
                    </li>
                </ul>
            </div> 
        </div>
        

        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
 <!---------------------------------------------innerLABEL------------------------------>
  	<!-- Inner Container Start -->
<div class="container">

 
	 
            
            	<!-- Statistics Button Container -->
            	<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Floors Climbed</span>
                            <span class="mws-stat-value">324</span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Calories Burned</span>
                            <span class="mws-stat-value down">74%</span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Kilometers Walked</span>
                            <span class="mws-stat-value">14</span>
                        </span>
                    </a>
                    
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Bugs Fixed</span>
                            <span class="mws-stat-value up">22%</span>
                        </span>
                    </a>
                    
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-car"></span>

                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Cars Repaired</span>
                            <span class="mws-stat-value">77</span>
                        </span>
                    </a>
                </div>

 
 
 
</div>
<!-- Inner Container End -->
                       
<!-----------------------------------footer------------------------------------>
            <!-- Footer -->
            <div id="mws-footer">
            	<block name="base_footer" />
            		Copyright Your Website 2012. All Rights Reserved.kangchao
            	
            </div>
        </div>
        <!-- Main Container End -->
        
    </div>

  <!---------------------------------bottomResource-------------------------------->
    <!-- JavaScript Plugins -->
    <script src="/Public/Admin/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/Public/Admin/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/Public/Admin/js/libs/jquery.placeholder.min.js"></script>
    <script src="/Public/Admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/Public/Admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/Public/Admin/jui/jquery-ui.custom.min.js"></script>
    <script src="/Public/Admin/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/Public/Admin/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="/Public/Admin/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/Public/Admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/Public/Admin/js/demo/demo.calendar.js"></script>
  

</body>
</html>