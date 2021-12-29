<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kanakku.dreamguystech.com/template-html/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jul 2021 07:10:24 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Kanakku - Bootstrap Admin HTML Template</title>

	<link rel="shortcut icon" href="{{ asset('admin_assets/img/favicon.png') }}">

	<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">

	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome/css/all.min.css') }}">

	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/datatables/datatables.min.css') }}">

	<link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
<!--[if lt IE 9]>
			<script src="admin_assets/js/html5shiv.min.js"></script>
			<script src="admin_assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="main-wrapper">

			<div class="header">

				<div class="header-left">
					<a href="index.html" class="logo">
						<img src="{{ asset('admin_assets/img/logo.png') }}" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="{{ asset('admin_assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
					</a>
				</div>


				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-bars"></i>
				</a>


				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>


				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>


				<ul class="nav user-menu">

					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="admin_assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="admin_assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="admin_assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="admin_assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="admin_assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>


					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i data-feather="bell"></i> <span class="badge badge-pill">5</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="admin_assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="admin_assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">New user registered</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="admin_assets/img/profiles/avatar-04.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>


					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
								<img src="admin_assets/img/profiles/avatar-01.jpg" alt="">
								<span class="status online"></span>
							</span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
							<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
							<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
						</div>
					</li>

				</ul>

			</div>


			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li>
								<a href="{{url('/')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="{{url('/sliders')}}"><i data-feather="sliders"></i> <span>Sliders</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0)"><i data-feather="list"></i> <span> Services</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="{{ url('services/categories') }}">Categories</a></li>
									<li><a href="{{ url('services') }}">All Services</a></li>
								</ul>
							</li>
							<li>
								<a href="{{url('/contact')}}"><i data-feather="users"></i> <span>Contact</span></a>
							</li>
							<li>
								<a href="{{url('/edit-setting')}}"><i data-feather="settings"></i> <span>Setting</span></a>
							</li>
							{{-- <li class="submenu">
								<a href="#"><i data-feather="grid"></i> <span> Test</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="{{ url('test') }}">t1</a></li>
									<li><a href="calendar.html">t2</a></li>
									<li><a href="inbox.html">t3</a></li>
								</ul>
							</li> --}}
							<li class="submenu">
								<a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="chat.html">Chat</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="inbox.html">Email</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>


			@yield('content')


			</div>


		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="admin_assets/js/jquery-3.5.1.min.js"></script>

		<script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('admin_assets/js/feather.min.js') }}"></script>

		<script src="{{ asset('admin_assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

		<script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('admin_assets/plugins/datatables/datatables.min.js') }}"></script>
		<script src="{{ asset('admin_assets/js/script.js') }}"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script type="text/javascript">
			$(document).on('click', 'ul li', function(){
				$(this).addClass('active').siblings().removeClass('active')
			})
		</script>

		<!-- <script src="admin_assets/js/script.js"></script> -->
	</body>

	<!-- Mirrored from kanakku.dreamguystech.com/template-html/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jul 2021 07:10:31 GMT -->
	</html>