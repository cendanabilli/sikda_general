<header id="m_header" class="m-grid__item    m-header " m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand m-brand--mobile">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<!-- <img alt="" src="assets/demo/demo9/media/img/logo/logo.png" /> -->
										<img alt="" src="<?php echo base_url() ?>assets/image/left.png" style="width:200px !important" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_toggle_mobile" class="m-brand__icon m-brand__toggler m-brand__toggler--left">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
							<div class="m-stack m-stack--ver m-stack--desktop">
								<div class="m-stack__item m-stack__item--middle m-stack__item--fit">

									<!-- BEGIN: Aside Left Toggle -->
									<a href="javascript:;" id="m_aside_left_toggle" class="m-aside-left-toggler m-aside-left-toggler--left m_aside_left_toggler">
										<span></span>
									</a>

									<!-- END: Aside Left Toggle -->
								</div>
								<div class="m-stack__item m-stack__item--fluid">

									<!-- BEGIN: Horizontal Menu -->
									<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
									<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
										<!-- <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
											<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><i
													 class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Dashboard</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<ul class="m-menu__subnav">
														<li class="m-menu__item " aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Generate
																			Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
														<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
																 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
															<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
																<ul class="m-menu__subnav">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
																	<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
																			 class="m-menu__link-text">Delivered Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
																		<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
																			<ul class="m-menu__subnav">
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
																				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
																			</ul>
																		</div>
																	</li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
																</ul>
															</div>
														</li>
														<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-chat-1"></i><span
																 class="m-menu__link-text">Customer Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
															<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
																<ul class="m-menu__subnav">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
																</ul>
															</div>
														</li>
														<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
													</ul>
												</div>
											</li>
											<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span
													 class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
												<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<div class="m-menu__subnav">
														<ul class="m-menu__content">
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
																				CRM</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																				Airlines Booking Site</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																				Accounting</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																				Website Rewamp</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																				Mobile App</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><i
													 class="m-menu__link-icon flaticon-stopwatch"></i><span class="m-menu__link-text">Orders</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
												<div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<div class="m-menu__subnav">
														<ul class="m-menu__content">
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
																				CRM</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																				Airlines Booking Site</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																				Accounting</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																				Website Rewamp</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																				Mobile App</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																				Directory</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																				Directory</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
																				Reports</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																				Payslips</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																				Expenses</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																				Expenses</span></a></li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
																	<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul> -->
									</div>

									<!-- END: Horizontal Menu -->
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--middle m-stack__item--center">

							<!-- BEGIN: Brand -->
							<a href="index.html" class="m-brand m-brand--desktop">
								<img  src="<?php echo base_url() ?>assets/image/left.png" style="width:300px !important" />

							</a>

							<!-- END: Brand -->
						</div>
						<div class="m-stack__item m-stack__item--right">

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__username m--hidden-mobile">Mark</span>
												<span class="m-topbar__userpic">
													<!-- <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" /> -->
												</span>
												<span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<!-- <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" /> -->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">Mark Andre</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Activity</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Support</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
