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
											Data Customer Anda
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											YUNUS TULAK, S.IP [ Nama Kolektor ]</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
												  <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>
						                        </div>
						                        
<div class="col-lg-2">
						                          <label>Department :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
						                        </div>
												<div class="col-lg-2">
						                          <label>Bagian :</label>
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
												
												<div class="col-lg-2">
						                          <label class="">Tanggal :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-1">
						                          <label>Tipe Pegawai :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Tetap</option>
						                              <option value="3">Kontrak</option>
						                              <option value="3">Honor</option>

						                          </select>
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
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#5d78ff !important; color:#fff !important">2023</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1" >KESELURUHAN</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">SUDAH TERBAYAR</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">BELUM TERBAYAR</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="4%" bgcolor="#f7fcff" rowspan="2">Nama Customer</th>
																<th width="4%" bgcolor="#f7fcff" rowspan="2">Zona</th>
																<th width="1%" bgcolor="#f7fcff" rowspan="2">Wil</th>
																<th width="4%" bgcolor="#f7fcff" rowspan="2">Titik Parkir</th>
																<th width="6%" bgcolor="#f7fcff" rowspan="2">Alamat</th>
																<th colspan="12" bgcolor="#f7fcff" style="border-bottom-width: 1px !important">BULAN</th>
																
																
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JAN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FEB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MAR</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">APR</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MEI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">AGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEP</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">OKT</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">NOV</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">DES</td>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="19" bgcolor="#feffe2">Data Customer Anda</td>
															</tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">1</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">CV. AMANDA BROWNIES</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Biringkanaya</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">I</td>
															  <td width="1%" align="center" valign="middle" style="text-align:left">Amanda Brownies</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	
															</tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">2</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">BPJS KETENAGAKERJAAN</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Bontoala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">I</td>
															  <td width="1%" align="center" valign="middle" style="text-align:left">BPJS Ketenagakerjaan</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. Urip Sumoharjo</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>BANK BTN<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">3</td>
																
																<td width="1%" align="center" valign="middle" style="text-align:left">PDAM</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Kepulauan Sangkarrang</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">I</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">PDAM WIL III</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. Racing Centre</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : - <hr> Penerima Pembayaran : <hr>-" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">4</td>
																
																<td width="1%" align="center" valign="middle" style="text-align:left">CV. BROWCIL MAKASSAR</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Makassar</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">II</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">BROWCIL</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">5</td>
																
																<td width="1%" align="center" valign="middle" style="text-align:left">PT. KEISHA GLOW INDONESIA</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Mamajang</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">II</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">KLINIK KEISHA GLOW</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>BANK BTN<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">6</td>
																
																<td width="1%" align="center" valign="middle" style="text-align:left">PT. CITRA KOSMETIK INDONESIA</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Mariso</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">II</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">CITRA KOSMETIK</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. Boulevard</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : - <hr> Penerima Pembayaran : <hr>-" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">7</td>
																
																<td width="1%" align="center" valign="middle" style="text-align:left">CV. MBAK DAENG MAKASSAR</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">II</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">RUMAH MAKAN MBAK DAENG</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jl. Abd. Daeng Sirua</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															
															
															
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Manual" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Online" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Belum Terbayar" data-original-title="" title=""></span>
           
          </div>

												</div>
												 <!-- begin:: pageline -->
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="kt-pagination  kt-pagination--danger">
						<select class="form-control kt-font-danger" style="width: 60px">
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
							<span class="pagination__desc">
								Menampilkan 10 dari 230 Data
							</span>
							<div class="kt-pagination__toolbar">
								<ul class="kt-pagination__links">
								<li class="kt-pagination__link--first">
									<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
								</li>
								<li class="kt-pagination__link--next">
									<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
								</li>
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
								</li>
								<li>
									<a href="#">...</a>
								</li>
								<li class="kt-pagination__link--prev">
									<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
								</li>
								<li class="kt-pagination__link--last">
									<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
								</li>
							</ul>
							</div>
						</div>
                    <!-- end:: pageline -->
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
