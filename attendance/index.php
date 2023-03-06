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
<?php require 'layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Dashboard

									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Attendance </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
							</div>
						</div>

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total
														</h4>
														<span class="kt-widget24__desc">
															Keseluruhan
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														4
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lupa Absen Disetujui
														</h4>
														<span class="kt-widget24__desc">
															Lupa Absen yang telah disetujui
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														1
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lupa Absen Ditolak
														</h4>
														<span class="kt-widget24__desc">
															Lupa Absen yang telah ditolak
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														1
													</span>
												</div>

											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lupa Absen Pending
														</h4>
														<span class="kt-widget24__desc">
															Lupa Absen yang sedang menunggu persetujuan
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														2
													</span>
												</div>

											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
								</div>

								<div class="row">
								
									<div class="col-lg-6">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Jumlah Lupa Absen
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
											    <div id="container"></div>
											</figure>
										</div>
									</div>
									</div>
									<div class="col-lg-6">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Jumlah Lembur
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
													<div id="container2"></div>
											</figure>
										</div>
									</div>
									</div>
								</div>

								<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total
														</h4>
														<span class="kt-widget24__desc">
															Keseluruhan
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														4
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lembur Disetujui
														</h4>
														<span class="kt-widget24__desc">
															Lembur yang telah disetujui
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														1
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lembur Ditolak
														</h4>
														<span class="kt-widget24__desc">
															Lembur yang telah ditolak
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														1
													</span>
												</div>

											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">
											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Lembur Pending
														</h4>
														<span class="kt-widget24__desc">
															Lembur yang sedang menunggu persetujuan
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														2
													</span>
												</div>
											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
								</div>
						</div>

						<?php require '../layouts/footer.php' ?>
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>
						<script src="https://code.highcharts.com/modules/export-data.js"></script>
						<script src="https://code.highcharts.com/modules/accessibility.js"></script>
						<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
						<?php require '../layouts/foot.php' ?>
