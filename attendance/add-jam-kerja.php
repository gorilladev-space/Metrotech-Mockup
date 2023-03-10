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

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
				Tambah Jam Kerja
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="hr-setup-jam-kerja.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Save</span>
				</button>
				<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-reload"></i>
								<span class="kt-nav__link-text">Save as Draf</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-power"></i>
								<span class="kt-nav__link-text">Save & Exit</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
		<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
		<div class="alert-text">Hari Kerja : Tandai hari kerja yang menggunakan kebijakan absensi ini.
			<br>Jam Kerja : Tentukan jam kerja masing-masing hari pada kebijakan absensi ini. Durasi Istirahat :Tentukan lama waktu istirahat pada masing-masing hari yang termasuk pada kebijakan absensi.</div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>

	<div class="kt-portlet kt-portlet--mobile ">
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-xl-9">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Jam Kerja</div>
						<div class="kt-portlet__body">
							<table class="table">
								<thead>
									<tr>
										<th width="5%" class="text-left">Hari Kerja</th>
										<th width="19%" class="text-left">Jam Kerja</th>
										<th width="19%" class="text-left">Jam Absen Masuk Kerja</th>
										<th width="19%" class="text-left">Jam Absen Pulang Kerja</th>
										<th width="19%" class="text-left">Jam Lembur</th>
										<th width="19%" class="text-left">Jam Istirahat</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Senin
												<span></span>
											</label></td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
													<div></div>
												<label>	Jam Pulang </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Selasa
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Rabu
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Kamis
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Jumat
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Sabtu
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
									</tr>
									<tr>
										<td><label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
												<input type="checkbox" checked> Minggu
												<span></span>
											</label></td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
											<td>
												<label> Jam Mulai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
												<label> Jam Selesai </label>
														<div class="input-group timepicker">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
															</div>
															<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
														</div>
											</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
										<td>
											<label> Jam Mulai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
											<label> Jam Selesai </label>
													<div class="input-group timepicker">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-exclamation-circle"></i>
															</span>
														</div>
														<input class="form-control form-control-sm" id="kt_timepicker_1" readonly value="10:30:20 AM" type="text" />
													</div>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="6"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
												<input type="checkbox"> Jam kerja fleksibel
												<span></span>
											</label>
											<div class="form-group row show">
												<div class="col-lg-6">
													<div class="form-group">
														<label>Toleransi keterlambatan dari Jam Mulai :</label>
														<div class="input-group input-group-sm w-50">
															<input type="number" class="form-control" placeholder="60" aria-describedby="basic-addon2">
															<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Menit</span></div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label>Toleransi Pulang Awal :</label>
														<div class="input-group input-group-sm w-50">
															<input type="number" class="form-control" placeholder="60" aria-describedby="basic-addon2">
															<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Menit</span></div>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
				<div class="col-xl-3">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Nama Jenis Jam Kerja</div>
						<br>
						<div class="kt-portlet__body kt-form">
							<div class="form-group row">
								<label>Nama Jenis Jam Kerja</label>
								<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
							</div>
						</div>
					</div>

					<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kebijakan ini berlaku untuk</div>
						<br>
						<div class="kt-portlet__body kt-form">
							<div class="form-group row">
								<label class="">Pilih Departemen:</label>
								<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
							</div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
								<label class="">Pilih Bagian:</label>
								<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Direksi</option>
                                      <option value="4">Umum dan Kepegawaian</option>
                                      <option value="5" selected="">Hukum dan Humas</option>
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
                                      <option value="12" >Pengelolaan</option>
                                      <option value="12" >Produksi</option>
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
                                  </select>
							</div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
								<label class="">Pilih Pegawai:</label>
								<input id="kt_tagify_5" name='tags3' placeholder="Pilih Pegawai" value="Yuni Saslia, NuruL Insani Budiarta, Irma Fitriani, Amel Karla, Magfirah Omar, Oklan Zulkifli, Muhammad Nasrullah S.Kom, Amaar Mangrove, Zulfadli">
							</div>
						</div>
					</div>


					<!--end::Portlet-->
				</div>

			</div>
		</div>
	</div>

</div>

<?php require '../layouts/footer.php' ?>
<script>
$(function() {
				 $('input[type="checkbox"]').on('change', function() {
						 $(this).closest('tfoot').find('.show').toggle(!this.checked);
				 });
		 });
</script>
<?php require '../layouts/foot.php' ?>
