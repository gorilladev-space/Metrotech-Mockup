<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Data Rekap Absen Pegawai
									</h3>
								</div>
								<div class="kt-subheader__toolbar">

										<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
										<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="flaticon2-printer"></i> Export Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">

													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

														</a>
													</li>

												</ul>

												<!--end::Nav-->
											</div>




										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
														<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
														<div class="alert-text">A simple primary alert—check it out!</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>

													<div class="kt-portlet" id = "login_Box_Div" >
																<div class="kt-portlet__head">
																	<div class="kt-portlet__head-label">
																		<h3 class="kt-portlet__head-title">
																			Filter Data
																		</h3>
																	</div>
																</div>

																<!--begin::Form-->
																<form class="kt-form">
																	<div class="kt-portlet__body">
						                      <div class="form-group row">
						                        <div class="col-lg-3">
						                          <label>Nama Pegawai :</label>
												  <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
						                        </div>
						                        <div class="col-lg-2">
						                          <label>Tipe Pegawai :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Tetap</option>
						                              <option value="3">Kontrak</option>
						                              <option value="3">Honor</option>

						                          </select>
						                        </div>
<div class="col-lg-2">
						                          <label>Department :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Keuangan</option>
						                              <option value="3">HR & GA</option>
						                              <option value="3">Infrastructure</option>
						                              <option value="3">Information Technology</option>
						                              <option value="3">Creative</option>
						                              <option value="3">Commercial & Business Development</option>

						                          </select>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">Tanggal :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-2">
						                          <label>Kantor :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Cabang Sulawesi Barat</option>

						                          </select>
						                        </div>

						                      </div>


						                      </div>
																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																		</div>
																	</div>
																</form>
															</div>

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										<ul class="nav nav-pills nav-fill" role="tablist">
											<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#5d78ff !important; color:#fff !important">2019</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2018</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2017</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2016</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Januari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Februari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Maret</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">April</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Mei</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juni</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juli</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1">Agustus</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">September</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Oktober</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">November</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Desember</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Type Pegawai</th>
																<th width="1%" bgcolor="#f7fcff">01</th>
																<th width="1%" bgcolor="#f7fcff">02</th>
																<th width="1%" bgcolor="#f7fcff">03</th>
																<th width="1%" bgcolor="#f7fcff">04</th>
																<th width="1%" bgcolor="#f7fcff">05</th>
																<th width="1%" bgcolor="#f7fcff">06</th>
																<th width="1%" bgcolor="#ebedf2">07</th>
																<th width="1%" bgcolor="#f7fcff">08</th>
																<th width="1%" bgcolor="#f7fcff">09</th>
																<th width="1%" bgcolor="#f7fcff">10</th>
																<th width="1%" bgcolor="#f7fcff">11</th>
																<th width="1%" bgcolor="#f7fcff">12</th>
																<th width="1%" bgcolor="#f7fcff">13</th>
																<th width="1%" bgcolor="#ebedf2">14</th>
																<th width="1%" bgcolor="#f7fcff">15</th>
																<th width="1%" bgcolor="#f7fcff">16</th>
																<th width="1%" bgcolor="#f7fcff">17</th>
																<th width="1%" bgcolor="#f7fcff">18</th>
																<th width="1%" bgcolor="#f7fcff">19</th>
																<th width="1%" bgcolor="#f7fcff">20</th>
																<th width="1%" bgcolor="#ebedf2">21</th>
																<th width="1%" bgcolor="#f7fcff">22</th>
																<th width="1%" bgcolor="#f7fcff">23</th>
																<th width="1%" bgcolor="#f7fcff">24</th>
																<th width="1%" bgcolor="#f7fcff">25</th>
																<th width="1%" bgcolor="#f7fcff">26</th>
																<th width="1%" bgcolor="#f7fcff">27</th>
																<th width="1%" bgcolor="#ebedf2">28</th>
																<th width="1%" bgcolor="#f7fcff">29</th>
																<th width="1%" bgcolor="#f7fcff">30</th>
																<th width="1%" bgcolor="#f7fcff">31</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MON</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">TUE</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">WED</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">THU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FRI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAT</td>
																<td width="1%" bgcolor="#ebedf2" style="color: #74788d !important" class="hari">SUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MON</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">TUE</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">WED</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">THU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FRI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAT</td>
																<td width="1%" bgcolor="#ebedf2" style="color: #74788d !important" class="hari">SUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MON</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">TUE</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">WED</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">THU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FRI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAT</td>
																<td width="1%" bgcolor="#ebedf2" style="color: #74788d !important" class="hari">SUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MON</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">TUE</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">WED</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">THU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FRI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAT</td>
																<td width="1%" bgcolor="#ebedf2" style="color: #74788d !important" class="hari">SUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MON</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">TUE</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">WED</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="33">Department Keuangan</td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Kontrak</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td colspan="33">Department HR & GA</td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Harian</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Honor</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
																		<img src="../assets/media/users/100_10.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
															</tr>
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--unified-success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Hadir" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Absen" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Dinas" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Lembur" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--warning kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terlambat" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Izin" data-original-title="" title=""></span>
						<span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Libur" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"></span>
          </div>

												</div>
											</div>
                    </div>

                  </form>
                  </div>
						</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
