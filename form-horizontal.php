<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CRMS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Horizontal Form - CRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--font style-->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">

        <!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">

        <!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

        <!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="assets/css/theme-settings.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

      
    </head>
    <body id="skin-color" class="inter">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header" id="heading">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png"  alt="Logo" class="sidebar-logo">
						<img src="assets/img/s-logo.png"  alt="Logo" class="mini-sidebar-logo">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.php">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="settings.php">Settings</a>
							<a class="dropdown-item" href="login.php">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="settings.php">Settings</a>
						<a class="dropdown-item" href="login.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                	<form action="search.php" class="mobile-view">
						<input class="form-control" type="text" placeholder="Search here">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
					</form>
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="nav-item nav-profile">
				              <a href="#" class="nav-link">
				                <div class="nav-profile-image">
				                  <img src="assets/img/profiles/avatar-17.jpg" alt="profile">
				                  
				                </div>
				                <div class="nav-profile-text d-flex flex-column">
				                  <span class="font-weight-bold mb-2">David Grey. H</span>
				                  <span class="text-white text-small">Project Manager</span>
				                </div>
				                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				              </a>
				            </li>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="index.php">Deals Dashboard</a></li>
									<li><a href="projects-dashboard.php">Projects Dashboard</a></li>
									<li><a href="leads-dashboard.php">Leads Dashboard</a></li>
								</ul>
							</li>
							
							<li> 
								<a href="tasks.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Tasks</span></a>
							</li>
							<li> 
								<a href="contacts.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span>Contacts</span></a>
							</li>
							<li> 
								<a href="companies.php"><i class="fa fa-building-o" aria-hidden="true"></i> <span>Companies</span></a>
							</li>
							<li> 
								<a href="leads.php"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Leads</span></a>
							</li>
							
							<li> 
								<a href="deals.php"><i class="fa fa-podcast" aria-hidden="true"></i> <span>Deals</span></a>
							</li>
							<li> 
								<a href="projects.php"><i class="fa fa-cubes" aria-hidden="true"></i> <span>Projects</span></a>
							</li>
							<li> 
								<a href="reports.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Reports</span></a>
							</li>
							<li> 
								<a href="activities.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href="email.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email</span></a>
							</li>
							
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="error-404.php">404 Error </a></li>
									<li><a href="error-500.php">500 Error </a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="fa fa-columns" aria-hidden="true"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="faq.php"> FAQ </a></li>
									<li><a href="terms.php"> Terms </a></li>
									<li><a href="privacy-policy.php"> Privacy Policy </a></li>
									<li><a href="blank-page.php"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.php"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-object-ungroup" aria-hidden="true"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
									<li><a href="form-input-groups.php" >Input Groups </a></li>
									<li><a href="form-horizontal.php" class="active">Horizontal Form </a></li>
									<li><a href="form-vertical.php"> Vertical Form </a></li>
									<li><a href="form-mask.php"> Form Mask </a></li>
									<li><a href="form-validation.php"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-table" aria-hidden="true"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="tables-basic.php">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fa fa-retweet" aria-hidden="true"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul class="sub-menus">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul class="sub-menus">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="crms-title row bg-white mb-4">
                		<div class="col  p-0">
                			<h3 class="page-title">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="fa fa-object-group" aria-hidden="true"></i>
			                </span> Horizontal Form </h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Horizontal Form</li>
							</ul>
                		</div>
                	</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title mb-0">Basic Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">First Name</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Last Name</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Email Address</label>
											<div class="col-lg-8">
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Username</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Password</label>
											<div class="col-lg-8">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Repeat Password</label>
											<div class="col-lg-8">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title mb-0">Address Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Address 1</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Address 2</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">City</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">State</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Country</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Postal Code</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Two Column Horizontal Form</h4>
								</div>
								<div class="card-body">
									<h4 class="card-title">Personal Information</h4>
									<form action="#">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">First Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Last Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Gender</label>
													<div class="col-lg-8">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
															<label class="form-check-label" for="gender_male">
															Male
															</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
															<label class="form-check-label" for="gender_female">
															Female
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Blood Group</label>
													<div class="col-lg-8">
														<select class="select">
															<option>Select</option>
															<option value="1">A+</option>
															<option value="2">O+</option>
															<option value="3">B+</option>
															<option value="4">AB+</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Username</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Email</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Password</label>
													<div class="col-lg-8">
														<input type="password" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Repeat Password</label>
													<div class="col-lg-8">
														<input type="password" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<h4 class="card-title">Address</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Address Line 1</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Address Line 2</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">State</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">City</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Country</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Postal Code</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-0">
								<div class="card-header">
									<h4 class="card-title mb-0">Two Column Horizontal Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-xl-6">
												<h4 class="card-title">Personal Details</h4>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">First Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Last Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Password</label>
													<div class="col-lg-8">
														<input type="password" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">State</label>
													<div class="col-lg-8">
														<select class="select">
															<option>Select State</option>
															<option value="1">California</option>
															<option value="2">Texas</option>
															<option value="3">Florida</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">About</label>
													<div class="col-lg-8">
														<textarea rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<h4 class="card-title">Personal details</h4>
												<div class="row">
													<label class="col-lg-4 col-form-label">Name</label>
													<div class="col-lg-8">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="First Name" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="Last Name" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Email</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Phone</label>
													<div class="col-lg-8">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Address</label>
													<div class="col-lg-8">
														<input type="text" class="form-control m-b-20">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<select class="select">
																		<option>Select Country</option>
																		<option value="1">USA</option>
																		<option value="2">France</option>
																		<option value="3">India</option>
																		<option value="4">Spain</option>
																	</select>
																</div>
																<div class="form-group">
																	<input type="text" placeholder="ZIP code" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="State/Province" class="form-control">
																</div>
																<div class="form-group">
																	<input type="text" placeholder="City" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		 <!--theme settings modal-->

			<div class="modal right fade settings" id="settings"  role="dialog" aria-modal="true">
				<div class="toggle-close">
          			<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
          			</div>
           
        		</div>
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header p-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">Settings</h4>
						</div>

						<div class="modal-body pb-3">
							<div class="scroll">
							
				            <div>
				            	

				            	

				                <ul class="list-group">
				                    <li class="list-group-item border-0">
				                      <div class="row">
				                        <div class="col">
				                          <h5 class="pb-2">Primary Skin</h5>
				                        </div>
				                        <div class="col text-right">
				                          <a class="reset text-white bg-dark" id="ChangeprimaryDefault">Reset Default</a>
				                        </div>
				                      </div>
				                      <div class="theme-settings-swatches">
				                         <div class="themes">
												<div class="themes-body">
													<ul id="theme-change" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="theme-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="theme-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="theme-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="theme-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="theme-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="theme-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>
														

														<li class="list-inline-item"><span class="theme-orange bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="theme-blue bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="theme-grey bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="theme-lgrey bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="theme-dblue bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="theme-pink bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="theme-purple bg-plum-plate"></span></li>
														
													</ul>
												</div>
											</div>

				                         
				                      </div>
				                  	</li>
				              	</ul>
				              </div>

				              <div>
				                <ul class="list-group">
				                  <li class="list-group-item border-0">
				                     <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Header Style</h5>
				                      </div>
				                      <div class="col text-right">
				                        <a class="reset text-white bg-dark" id="ChageheaderDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change1" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="header-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="header-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="header-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="header-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="header-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="header-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="header-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				              </div>
				              <div>
				                <ul class="list-group m-0">
				                  <li class="list-group-item border-0">
				                    <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Apps Sidebar Style</h5>
				                      </div>
				                      <div class="col  text-right">
				                        <a class="reset text-white bg-dark" id="ChagesidebarDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change2" class="theme-colors border-0 list-inline-item list-unstyled">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="sidebar-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="sidebar-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="sidebar-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="sidebar-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="sidebar-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				                <div class="row Default-font">
				                	<div class="col">
				                        <h5 class="pb-2">Font Style</h5>
				                    </div>
				                    <div class="col text-right">
				                        <a class="reset text-white bg-dark font-Default" >Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font">Roboto</li>
				                  <li class="list-inline-item poppins-font">Poppins</li>
				                  <li class="list-inline-item montserrat-font">Montserrat</li>
				                  <li class="list-inline-item inter-font">Inter</li>
				                </ul>
				            </div>
				            
				        </div>
						</div>

					</div>
				</div>
			</div>

		<!--theme settings-->
        <div class="sidebar-contact">
          	<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i></div>
           
        </div>


		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>

		<!-- theme JS -->
		<script src="assets/js/theme-settings.js"></script>

		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>

		
    </body>
</html>