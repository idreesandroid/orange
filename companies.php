<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CRMS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Companies - CRMS admin template</title>
		
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
									<li><a href="employee-dashboard.php">Projects Dashboard</a></li>
									<li><a href="employee-dashboard.php">Leads Dashboard</a></li>
								</ul>
							</li>
							
							<li> 
								<a href="tasks.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Tasks</span></a>
							</li>
							<li> 
								<a href="contacts.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span>Contacts</span></a>
							</li>
							<li> 
								<a href="companies.php" class="active"><i class="fa fa-building-o" aria-hidden="true"></i> <span>Companies</span></a>
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
									<li><a href="form-input-groups.php">Input Groups </a></li>
									<li><a href="form-horizontal.php">Horizontal Form </a></li>
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
			
				<!-- Page Content -->
                <div class="content container-fluid">

                	<div class="crms-title row bg-white">
                		<div class="col">
                			<h3 class="page-title m-0">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="fa fa-building-o" aria-hidden="true"></i>
			                </span> Companies </h3>
                		</div>
                		<div class="col text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Companies</li>
							</ul>
                		</div>
                	</div>
					
					<!-- Page Header -->
					<div class="page-header pt-3 mb-0 ">
						<div class="row">
							<div class="col">
								<div class="dropdown">
									<a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Recently Viewed</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Recently Viewed</a>
				                        <a class="dropdown-item" href="#">Items I'm following</a>
				                        <a class="dropdown-item" href="#">All Companies</a>
				                        <a class="dropdown-item" href="#">Companies added in the last 24 hours</a>
				                        <a class="dropdown-item" href="#">Companies added in the last 7 days</a>
				                        <a class="dropdown-item" href="#">Companies with no notes in the last month</a>
				                        <a class="dropdown-item" href="#">Companies with no notes in the last 7 days</a>
									</div>
								</div>
							</div>
							<div class="col text-right">
								<ul class="list-inline-item pl-0">
					                <li class="nav-item dropdown list-inline-item add-lists">
					                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
					                        <div class="nav-profile-text">
					                          <i class="fa fa-th" aria-hidden="true"></i>
					                        </div>
					                    </a>
					                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
					                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
					                    </div>
					                </li>
					                <li class="list-inline-item">
					                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_company">New Company</button>
					                </li>
					            </ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped table-nowrap custom-table mb-0 datatable">
											<thead>
												<tr>
													<th class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</th>
													<th>Company</th>
													<th>Phone</th>
													<th>Billing Street</th>
													<th>Billing City</th>
													<th>Billing State</th>
													<th>Billing Country</th>
													<th></th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
													</td>
													<td>8754554531</td>
													<td>
													 Escalon Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>United States</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a>
													</td>
													<td>8754554531</td>
													<td>
														1000 Escalon Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>USA</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo3.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Soylent Corp</a>
													</td>
													<td>8754554531</td>
													<td>
														Havier Street	
													</td>
													<td>Soylent Corp</td>
													<td>CA</td>
													<td>India</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox"> 
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Umbrella </a>
													</td>
													<td>8754554531</td>
													<td>
														1000 Escalon Street	
													</td>
													<td> Umbrella</td>
													<td>CA</td>
													<td>Europe</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
													</td>
													<td>8754554531</td>
													<td>
													  Nephew Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>United States</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Silicon Valley</a>
													</td>
													<td>8754554531</td>
													<td>
													 Albert Street	
													</td>
													<td>Palo Alto</td>
													<td>-</td>
													<td>India</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox"> 
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar"><img alt="" src="assets/img/c-logo3.png"></a>
														<a href="#" data-toggle="modal" data-target="#company-details">Fringe </a>
													</td>
													<td>8754554531</td>
													<td>
														RVN Road	
													</td>
													<td> Umbrella</td>
													<td>CA</td>
													<td>USA</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Content End -->
					
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->

		<!--modal section starts here-->
		<div class="modal fade" id="add-new-list">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New List View</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <form class="forms-sample">
                  <div class="form-group row">
                    <label for="view-name" class="col-sm-4 col-form-label">New View Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="view-name" placeholder="New View Name">
                    </div>
                  </div>
                  <div class="form-group row pt-4">
                    <label class="col-sm-4 col-form-label">Sharing Settings</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Just For Me <i class="input-helper"></i></label>
                        </div><br />
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked=""> Share Filter with Everyone <i class="input-helper"></i></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>
                </form>
              </div>
           
            </div>
          </div>
        </div>

		<!-- Modal -->
			<div class="modal right fade" id="add_company" tabindex="-1" role="dialog" aria-modal="true">
				<div class="modal-dialog" role="document">
					<button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">

						<div class="modal-header">
		                    <h4 class="modal-title text-center">Add Company</h4>
		                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
		                  </div>

						<div class="modal-body">
							<div class="row">
						        <div class="col-md-12">
						            <form>
						            	<h4>Organization Name</h4>
						            	<div class="form-group row">
				                            <div class="col-md-12">
				                            	<label class="col-form-label">Organization Name <span class="text-danger">*</span></label>
                              					<input class="form-control" type="text" placeholder="Organization Name" name="organization" >
				                            </div>
				                        </div>
						                <div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Organization</label>
					                            <select class="form-control">
					                                <option>Select</option>
					                            </select>
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Title</label>
                            					<input type="text" class="form-control"  name="title" placeholder="Title">
											</div>
										</div>
										<h4>Organization Contact Details</h4>
										
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Phone</label>
                            					<input type="text" class="form-control" name="phone" placeholder="Phone">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Fax</label>
                            					<input type="text" class="form-control" name="fax" placeholder="Fax">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Website</label>
                            					<input type="text" class="form-control" name="website" placeholder="Website">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Linkedin</label>
                            					<input type="text" class="form-control"  name="linkedin" placeholder="Linkedin">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Facebook</label>
                            					<input type="text" class="form-control"  name="fb" placeholder="Facebook">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Twitter</label>
                            					<input type="text" class="form-control"  name="twitter" placeholder="Twitter">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Email Domains</label>
                            					<input type="text" class="form-control"  name="domains" placeholder="Email Domains">
											</div>
											
										</div>
										<h4>Address Information</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Billing Address</label>
                            					<textarea class="form-control" rows="3" name="billing-address" placeholder="Billing Address"></textarea>
											</div>
											<div class="col-sm-6 mt-3">
												<label class="col-form-label"></label><br>
                            					<input type="text" class="form-control" placeholder="Billing City" name="billing-city">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Billing State" name="billing-state">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Billing Postal code" name="billing-postal-code">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Billing Country</label>
					                            <select class="form-control">
					                                <option>India</option>
					                                <option>US</option>
					                                <option>Japan</option>
					                            </select>
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Shipping Address</label>
                            					<textarea class="form-control" rows="3" name="shipping-address" placeholder="Shipping Address"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Shipping City" name="shipping-city">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Shipping State" name="shipping-state">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control"  placeholder="Shipping Postal code" name="shipping-postal-code">
											</div>
											<div class="col-sm-6">
												<select class="form-control">
					                                <option>India</option>
					                                <option>US</option>
					                                <option>Japan</option>
					                            </select>
											</div>
										</div>
										<h4>Additional Information</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Dates To Remember <span class="text-danger">*</span></label>
				                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
											</div>
										</div>
										
										<h4>Description Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Description </label>
				                            	<textarea class="form-control" rows="3" id="description" placeholder="Description"></textarea>
											</div>
										</div>
										<h4>Tag Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Tag List</label>
                            					<input type="text" class="form-control" name="tag-name" placeholder="Tag List">
											</div>
										</div>
										<h4>Permissions</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Permission</label>
					                        	<select class="form-control">
					                                <option>Task Visibility</option>
					                                <option>Private Task</option>
					                         	</select>
											</div>
											
										</div>
						                <div class="text-center py-3">
						                	<button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
						                	<button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
						                </div>
						            </form>
						        </div>
							</div>

						</div>

					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!--system users Modal -->
            <div class="modal right fade" id="company-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account d-flex">
                      	<div class="company_img">
                      		<img src="assets/img/c-logo.png" alt="User" class="user-image" class="img-fluid" />
                  		</div>
                  		<div>
                  			<p class="mb-0">Company</p>
                  			<span class="modal-title">Clampett Oil and Gas Corp</span>
                    		<span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>
                    		<span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  		</div>

                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Company</a>
                              		<a class="dropdown-item" href="#">Change Organization Image</a>
                              		<a class="dropdown-item" href="#">Delete This Organization</a>
                              		<a class="dropdown-item" href="#">Change Record Owner</a>
                              		<a class="dropdown-item" href="#">Generate Merge Document</a>
                              		<a class="dropdown-item" href="#">Print This Organization</a>
                              		<a class="dropdown-item" href="#">Add New Task For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Event For Organization</a>
                              		<a class="dropdown-item" href="#">Add Activity Set To Organization</a>
                              		<a class="dropdown-item" href="#">Add New Contact For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Project For Organization</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card due-dates">
                  	<div class="card-body">
	                    <div class="row">
	                      <div class="col">
	                        <span>Title</span>
	                        <p>Enquiry</p>
	                      </div>
	                      <div class="col">
	                        <span>Companies</span>
	                        <p>Acme Corp</p>
	                      </div>
	                      <div class="col">
	                        <span>Phone</span>
	                        <p>9876764875</p>
	                      </div>
	                      <div class="col">
	                        <span>Email</span>
	                        <p>johndoe@gmail.com</p>
	                      </div>
	                      <div class="col">
	                        <span>Contact owner</span>
	                        <p>John Doe</p>
	                      </div>
	                    </div>
	                </div>
                  </div>

                  <div class="modal-body">
                    <div class="task-infos">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#task-details" data-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-related" data-toggle="tab">Related</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-activity" data-toggle="tab">Activity</a></li>
							
							<li class="nav-item"><a class="nav-link" href="#task-news" data-toggle="tab">News</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Organization Name</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
										    <table class="table">
				                                <tbody>
				                                  <tr>
				                                    <td class="border-0">Record ID</td>
				                                    <td class="border-0">124192692</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Organization Name</td>
				                                    <td>Clampett Oil and Gas Corp.</td>
				                                  </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Organization Contact Details</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Phone</td>
			                                    <td class="border-0">(626) 847-1294</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Fax</td>
			                                    <td>1234</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Website</td>
			                                    <td>google.com</td>
			                                  </tr>
			                                  <tr>
			                                    <td>LinkedIn</td>
			                                    <td>Lorem ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Facebook</td>
			                                    <td>lorem Ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Twitter</td>
			                                    <td>Not Started</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Email Domains</td>
			                                    <td>abc@gmail.com</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Address Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								        <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Billing Address</td>
			                                    <td class="border-0">1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Shipping Addres</td>
			                                    <td>United States</td>
			                                  </tr>
			                                </tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Additional Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td>Dates to remember</td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Organization Created</td>
			                                    <td>03-Jun-20 1:14 AM</td>
			                                  </tr>
			                                   <tr>
			                                    <td>Date of Next Activity </td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Date of Last Activity </td>
			                                    <td>27/01/2006</td>
			                                  </tr>
			                                </tbody>
			                             </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Description Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td>Description</td>
			                                    <td>Lorem ipsum </td>
			                                  </tr>
			                                </tbody>
			                             </table>
								    </div>
							    </div>
							  </div>
							 
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Tag Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Tag List</td>
			                                    <td class="border-0">Lorem Ipsum</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
								    
							    </div>
							  </div>
							</div>
							</div>
								
							<div class="tab-pane task-related" id="task-related">
								<div class="row">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Companies</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Deals</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Projects</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Company Name</th>
																	<th>Phone</th>
																	<th>Billing Country</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Deal Name</th>
																	<th>Company</th>
																	<th>User Responsible</th>
																	<th>Deal Value</th>
																	<th></th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Bensolet
																	</td>
																	<td>Globex</td>
																	<td>John Doe</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Ansanio tech
																	</td>
																	<td>Lecto</td>
																	<td>John Smith</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Project Name</th>
																	<th>Status</th>
																	<th>User Responsible</th>
																	<th>Date Created</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Completed</td>
																	<td>Williams</td>
																	<td>13-Jul-20 11:37 PM</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Title</th>
																	<th>phone</th>
																	<th>Email</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Call Enquiry</td>
																	<td>987675656</td>
																	<td>william@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		John Doe
																	</td>
																	<td>Enquiry</td>
																	<td>987675656</td>
																	<td>john@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Phone call</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Phone Enquiry</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
									</div>
		                        </div>
							</div>
							<div class="tab-pane" id="task-activity">
								<div class="row">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Total Activities</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Last Activity</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Upcoming Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Phone Enquiry</td>
																	<td>David</td>
																	<td>13-Jul-20 11:37 PM</td>
																	
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Past Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																
															</tbody>
														</table>
													</div>
											    </div>
										    </div>
										</div>
									</div>
		                        </div>
							</div>
							<div class="tab-pane" id="task-news">
								<div class="row">
									<div class="col-md-12">
										<h4>News Items</h4>
										<p>Current news items about this Organization are sourced from Google News</p>
									</div>
								</div>
							</div>
						</div>
                   
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->



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
				                        <a class="reset text-white bg-dark font-Default" onclick="ChangeFontDefault()">Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font" onclick="changeFonts1();">Roboto</li>
				                  <li class="list-inline-item poppins-font" onclick="changeFonts2();">Poppins</li>
				                  <li class="list-inline-item montserrat-font" onclick="changeFonts3();">Montserrat</li>
				                  <li class="list-inline-item inter-font" onclick="changeFonts4();">Inter</li>
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

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- theme JS -->
		<script src="assets/js/theme-settings.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

		
    </body>
</html>