<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->


<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">Aside Light</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<span class="kt-subheader__desc">#XRS-45670</span>
									<a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
										Add New
									</a>
									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="#" class="btn kt-subheader__btn-secondary">Today</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Month</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Year</a>
										<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
											<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
											<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Sep 30</span>
											<i class="flaticon2-calendar-1"></i>
										</a>
										<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
											<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
													</g>
												</svg>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Add anything or jump to:
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Order</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">Ticket</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Goal</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support Case</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row row-full-height">
											<div class="col-sm-12 col-md-12 col-lg-3">
												<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-brand">
													<div class="kt-portlet__body kt-portlet__body--fluid">
														<div class="kt-widget26">
															<div class="kt-widget26__content">
																<span class="kt-widget26__number">57</span>
																<span class="kt-widget26__desc">Total Lupa Absen Masuk</span>
															</div>
															<div class="kt-widget26__chart" style="height:100px; width: 230px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
																<canvas id="kt_chart_quick_stats_1" width="230" height="115" class="chartjs-render-monitor" style="display: block; width: 230px; height: 115px;"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-3">
												<div class="kt-space-20"></div>
												<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-danger">
													<div class="kt-portlet__body kt-portlet__body--fluid">
														<div class="kt-widget26">
															<div class="kt-widget26__content">
																<span class="kt-widget26__number">64</span>
																<span class="kt-widget26__desc">Total Lupa Absen Keluar</span>
															</div>
															<div class="kt-widget26__chart" style="height:100px; width: 230px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
																<canvas id="kt_chart_quick_stats_2" width="230" height="115" class="chartjs-render-monitor" style="display: block; width: 230px; height: 115px;"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-3">
												<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-success">
													<div class="kt-portlet__body kt-portlet__body--fluid">
														<div class="kt-widget26">
															<div class="kt-widget26__content">
																<span class="kt-widget26__number">23</span>
																<span class="kt-widget26__desc">Total Lupa Absen Masuk Lembur</span>
															</div>
															<div class="kt-widget26__chart" style="height:100px; width: 230px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
																<canvas id="kt_chart_quick_stats_3" width="230" height="115" class="chartjs-render-monitor" style="display: block; width: 230px; height: 115px;"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-3">
												<div class="kt-space-20"></div>
												<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet--border-bottom-warning">
													<div class="kt-portlet__body kt-portlet__body--fluid">
														<div class="kt-widget26">
															<div class="kt-widget26__content">
																<span class="kt-widget26__number">40</span>
																<span class="kt-widget26__desc">Total Lupa Absen Keluar Lembur</span>
															</div>
															<div class="kt-widget26__chart" style="height:100px; width: 230px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
															<canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50" class="chartjs-render-monitor"></canvas>															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="kt-portlet kt-portlet--head-noborder kt-portlet--height-fluid ">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Cuti Pegawai
												</h3>
											</div>
										</div>

										<!--full height portlet body-->
										<div class="kt-portlet__body kt-portlet__body--fluid-full kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Alasan Penting
															</a>
														</div>
														<span class="kt-widget4__number kt-font-brand kt-font-bold">17</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Bersalin
															</a>
														</div>
														<span class="kt-widget4__number kt-font-success kt-font-bold">3</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Besar
															</a>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">3</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti khusus
															</a>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">3</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Sakit
															</a>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">3</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Tahunan
															</a>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">3</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Cuti Menikah
															</a>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">3</span>
													</div>
												</div>
												<div class="kt-widget4__chart kt-margin-t-15">
													<canvas id="kt_chart_trends_stats_2" style="height: 275px;"></canvas>
												</div>
											</div>
										</div>
									</div>
						</div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-3.js" type="text/javascript"></script>
<script src="../assets/js/pages/dashboard.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
