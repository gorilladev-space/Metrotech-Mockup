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
											Data Cuti
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

											<a href="cuti-add.php" class="btn btn-label-info btn-sm">
												<i class="fa fa-calculator"></i> Buat Cuti</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>


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
							                        <div class="col-lg-2">
							                          <label>Nama Pegawai :</label>
													  <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>

							                        <div class="col-lg-2">
							                          <label>Jabatan :</label>
							                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
							                        </div>
							                        
													
													<div class="col-lg-2">
							                          <label class="">Tipe Pegawai :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">Pegawai Tetap</option>
																							<option value="3">Kontrak Bulanan</option>
																							<option value="4">Kontrak Harian</option>
																					</select>
							                      </div>
							                        </div>
													<div class="col-lg-2">
							                          <label class="">Jenis Cuti :</label>
							                          <div class="form-group">
							                      <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">cuti alasan penting</option>
																							<option value="3">cuti bersalin</option>
																							<option value="4">cuti besar</option>
																							<option value="5">cuti khusus</option>
																							<option value="6">cuti sakit</option>
																							<option value="7" selected="">cuti tahunan</option>
																							<option value="12">menikah</option>
																					</select>
							                      </div>
							                        </div>
							                      </div>
							                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							                     <div class="form-group row">
							                       
													<div class="col-lg-2">
							                          <label class="">Departemen :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">Direksi</option>
																							<option value="3">Umum</option>
																							<option value="4">Keuangan & Asset</option>
																							<option value="5">Operasional</option>
																							<option value="6" selected="">Pengembangan Usaha & Kerja Sama</option>
																							
																					</select>
							                      </div>
							                        </div>
													<div class="col-lg-2">
							                          <label class="">Kantor :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">Pusat</option>
																							<option value="3">Cabang Sulawesi Barat</option>
																					</select>
							                      </div>
							                        </div>
																			
							                        <div class="col-lg-4">
							                          <label class="">Tanggal Pengajuan :</label>
							                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
							                        </div>
							                        <div class="col-lg-4">
							                          <label class="">Keterangan :</label>
							                          <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
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

																	<!--end::Form-->
																</div>
							<!--begin:: Widgets/Stats-->
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
															Keseluruhan Cuti
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
															Cuti Disetujui
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang telah disetujui
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
															Cuti Ditolak
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang telah ditolak
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
															Cuti Pending
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang sedang menunggu persetujuan
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

							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
							
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">ID</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Nip</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Tipe Pegawai</th>
												<th width="10%" bgcolor="#f7fcff" rowspan="2">Department</th>
												<th width="5%" bgcolor="#f7fcff" rowspan="2">Kantor</th>
												<th width="10%" bgcolor="#f7fcff" rowspan="2">Jenis Cuti</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Waktu<br>Pengajuan</th>
												<th width="16%" bgcolor="#f7fcff" colspan="2">Tanggal Cuti</th>
												<th colspan="6" bgcolor="#f7fcff">Verifikasi</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Status Cuti</th>
												<th width="20%" bgcolor="#f7fcff" rowspan="2">Keterangan</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Actions</th>
											</tr>
											<tr>
												<th width="8%" bgcolor="#f7fcff">Awal </th>
												<th width="8%" bgcolor="#f7fcff">Akhir </th>
												<th width="3%" bgcolor="#f7fcff">Atasan Langsung</th>
												<th width="3%" bgcolor="#f7fcff">Kabag Terkait </th>
												<th width="3%" bgcolor="#f7fcff">Direksi Terkait</th>
												<th width="3%" bgcolor="#f7fcff">Direktur Utama</th>
												<th width="3%" bgcolor="#f7fcff">Bagian Kepegawaian</th>
												<th width="3%" bgcolor="#f7fcff">Direktur Umum</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="1%" id="kt_table_1">001TOHRXI2022</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="SRI SUHARTINI,SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td id="kt_table_1">238 004 032</td>
												<td style="text-align:center">Tetap</td>
												<td style="text-align:left">Bagian Umum</td>
												<td style="text-align:center">Pusat</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td width="1%" id="kt_table_1">002TOHRXI2022</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="10%" style="text-align:left">Pengembangan Usaha dan Kerjasama</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock kt_sweetalert_demo_9" data-html="true"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">3</td>
												<td width="1%" id="kt_table_1">003TOHRXI2022</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="10%" style="text-align:left">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Cabang Sulawesi Barat</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Nama Kabag Terkait<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Nama Direktur Terkait<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Telah Terinfokan<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-info kt_sweetalert_demo_9"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Telah Terinfokan<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-info kt_sweetalert_demo_9"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Telah Terinfokan<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-info kt_sweetalert_demo_9"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">4</td>
												<td width="1%" id="kt_table_1">004TOHRXI2022</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="10%" style="text-align:left">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Cabang Sulawesi Tenggara</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak<hr>Lagi Padat Pekerjaan<hr>31 Desember 2018 - 14:30 WITA " data-html="true"><i class="fa flaticon2-delete"></i></button></td>
													<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										</tbody>
									</table>


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
<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<div class="swal2-header">
											<div class="swal2-icon swal2-question swal2-animate-question-icon" style="display: flex;"></div>
											<h2 class="swal2-title" id="swal2-title" style="display: flex;">Menuggu Persetujuan</h2>
											<div id="swal2-content" style="display: block;">Segera Lakukan Konfirmasi !</div>
										</div>

									</div>
										<div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-secondary btn-sm kt_sweetalert_demo_batal"><i class="fa fa-times"></i>Tolak</button>
											<button type="button" class="btn btn-success btn-sm kt_sweetalert_demo_confirm"><i class="fa fa-check"></i> Konfirmasi</button>
											<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Revisi</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
			<div class="modal fade" id="statistik-cuti-pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  									<div class="modal-content">
  										<div class="modal-header">
  											<span ><b>Statistik Cuti Pegawai</b></span>
  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  											</button>
  										</div>
  										<div class="modal-body">
										<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="1%" bgcolor="#f7fcff">Pegawai</th>
												
												<th width="15%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Standar</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Saat ini</th>
												<th width="1%" bgcolor="#f7fcff">Terpakai</th>
												<th width="1%" bgcolor="#f7fcff">Saldo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <td colspan="7" bgcolor="#fdfdec">Keuangan</td>
										  </tr>
											<tr>
												<td>1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">Accounting Supervisor</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
											<tr>
												<td>2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">Treasurer of Expenditures</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  <tr>
												<td>3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">&nbsp;</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  <tr>
										    <td colspan="7" bgcolor="#fdfdec">HR &amp; GA</td>
									      </tr>
										  <tr>
												<td>1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
											<tr>
												<td>2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  
										  
										</tbody>
									</table>
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                        

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
														
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li >
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li>
															<a href="#">4</a>
														</li>
														<li>
															<a href="#">5</a>
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
                      </div>
  										</div>
  										<div class="modal-footer">
  											<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Reset</button>
  											<button type="button" class="btn btn-sm btn-primary">Simpan</button>
  										</div>
  									</div>
  								</div>
  							</div>

			<div class="modal fade" id="saldo-tahunan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Saldo Cuti tahunan - Standar perusahaan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							</button>
						</div>
						<div class="modal-body">
							<!--begin::Form-->
							<form class="kt-form">
								<div class="form-group row p-3">
									<div class="col-lg-4">
										<label>Periode Aktif:</label>
										<select class="form-control kt-selectpicker">
											<option value="2">Bulan Lalu</option>
											<option value="2">12 Bulan Terakhir</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label class="">Departemen:</label>
										<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
											<option value="2">Human Resource</option>
											<option value="2">Finance Accounting</option>
											<option value="2">Engineer</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label class="">Jabatan :</label>
										<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
											<option value="2">CEO</option>
											<option value="2">Staff</option>
											<option value="2">Back-End Engineer</option>
										</select>
									</div>
								</div>
								<div class="kt-portlet__foot text-center">
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
										<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
									</div>
								</div>
							</form>
							<table class="table" width="100%">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Budget standar</th>
										<th>Budget periode ini</th>
										<th>Terpakai</th>
										<th>Direncanakan</th>
										<th>Saldo</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bob Brownfoot</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Bob Brownfoot</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Bob Brownfoot</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Roderic Sackville Baggins</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Roderic Sackville Baggins</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Roderic Sackville Baggins</td>
										<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></td>
										<td><input type="text" class="form-control form-control-sm" placeholder="12"></td>
										<td>0</td>
										<td>0</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
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
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="riwayat-cuti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Riwayat pengajuan cuti</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							</button>
						</div>
						<div class="modal-body">
							<!--begin::Form-->
							<form class="kt-form">
								<div class="form-group row p-3">
									<div class="col-lg-3">
										<label>Jenis Cuti:</label>
										<select class="form-control kt-selectpicker" data-live-search="true">
											<option value="2">Cuti Alasan Penting</option>
											<option value="3">Cuti Bersalin</option>
											<option value="4">Cuti Besar</option>
											<option value="5">Cuti Khusus</option>
											<option value="6">Cuti Sakit</option>
											<option value="7" selected>Cuti Tahunan</option>
											<option value="12">Cuti Menikah</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label class="">Departemen:</label>
										<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
											<option value="2">Human Resource</option>
											<option value="2">Finance Accounting</option>
											<option value="2">Engineer</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label class="">Jabatan :</label>
										<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
											<option value="2">CEO</option>
											<option value="2">Staff</option>
											<option value="2">Back-End Engineer</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label class="">Status:</label>
										<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
											<option value="2">Disetujui</option>
											<option value="2">Ditolak</option>
											<option value="2">Pending</option>
										</select>
									</div>
								</div>
								<div class="kt-portlet__foot text-center">
									<div class="kt-form__actions">
										<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
										<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
									</div>
								</div>
							</form>
							<table class="table" width="100%">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Tanggal Cuti</th>
										<th>Tipe Cuti</th>
										<th>Status</th>
										<th>...</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#"> Rollo Underhill </a></td>
										<td class="text-center">13-17 Desember 2019</td>
										<td class="text-center">Cuti Tahunan</td>
										<td class="text-center">Telah Disetujui oleh <a href="#" data-toggle="kt-tooltip"
												title="<div class='kt-media kt-media--circle'> <img src='../assets/img/users/100_1.jpg' alt='image'></div> <h5><b>Bob Brownfoot</b></h5> <span class='kt-badge kt-badge--danger kt-badge--inline'>HR STAFF</span>"
												data-html="true">Bob Brownfoot</a></td>
										<td class="text-center"><button type="button" class="btn btn-outline-hover-danger btn-sm" data-toggle="modal" data-target="#detail-cuti">Detail</button></td>
									</tr>
									<tr>
										<td><a href="#"> Rollo Underhill </a></td>
										<td class="text-center">13-17 Desember 2019</td>
										<td class="text-center">Cuti Tahunan</td>
											<td class="text-center">Telah Disetujui oleh <a href="#" data-toggle="kt-tooltip"
													title="<div class='kt-media kt-media--circle'> <img src='../assets/img/users/100_1.jpg' alt='image'></div> <h5><b>Bob Brownfoot</b></h5> <span class='kt-badge kt-badge--danger kt-badge--inline'>HR STAFF</span>"
													data-html="true">Bob Brownfoot</a></td>
											<td class="text-center"><button type="button" class="btn btn-outline-hover-danger btn-sm" data-target="#detail-cuti" data-toggle="modal">Detail</button></td>
									</tr>
									<tr>
										<td><a href="#"> Rollo Underhill </a></td>
										<td class="text-center">13-17 Desember 2019</td>
										<td class="text-center">Cuti Tahunan</td>
										<td class="text-center">Telah Disetujui oleh <a href="#" data-toggle="kt-tooltip"
												title="<div class='kt-media kt-media--circle'> <img src='../assets/img/users/100_1.jpg' alt='image'></div> <h5><b>Bob Brownfoot</b></h5> <span class='kt-badge kt-badge--danger kt-badge--inline'>HR STAFF</span>"
												data-html="true">Bob Brownfoot</a></td>
										<td class="text-center"><button type="button" class="btn btn-outline-hover-danger btn-sm" data-target="#detail-cuti" data-toggle="modal">Detail</button></td>
									</tr>
									<tr>
										<td><a href="#"> Rollo Underhill </a></td>
										<td class="text-center">13-17 Desember 2019</td>
										<td class="text-center">Cuti Tahunan</td>
										<td class="text-center">Telah Disetujui oleh <a href="#" data-toggle="kt-tooltip"
												title="<div class='kt-media kt-media--circle'> <img src='../assets/img/users/100_1.jpg' alt='image'></div> <h5><b>Bob Brownfoot</b></h5> <span class='kt-badge kt-badge--danger kt-badge--inline'>HR STAFF</span>"
												data-html="true">Bob Brownfoot</a></td>
										<td class="text-center"><button type="button" class="btn btn-outline-hover-danger btn-sm" data-target="#detail-cuti" data-toggle="modal">Detail</button></td>
									</tr>
								</tbody>
							</table>
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
						</div>
					</div>
				</div>
			</div>

			<div aria-hidden="true" class="onboarding-modal modal fade animated" id="detail-cuti" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-lg" role="document" style="background:#fff !important">
					<div class="modal-content text-center" style="border:none !important">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
						<div class="onboarding-media">
							<div class="d-flex m-3">
								<button type="button" class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm btn-wide">Disetujui</button>
								<h5 class="ml-5"><b>Pengajuan Cuti Tahunan</b></h5>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Untuk:</label>
								<div class="col-lg-6">
									<input type="email" class="form-control" placeholder="Cerdic Burrowes" disabled>
								</div>
							</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Yang mengajukan:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control" placeholder="Bob Brownfoot" disabled>
							</div>
						</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Jabatan:</label>
								<div class="col-lg-6">
									<input type="email" class="form-control" placeholder="Back-end Engineer - Engineer" disabled>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Tanggal pengajuan:</label>
								<div class="col-lg-6">
									<input type="email" class="form-control" placeholder="12 Dec 2019" disabled>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Tanggal diputuskan:</label>
								<div class="col-lg-6">
									<input type="email" class="form-control" placeholder="12 Dec 2019" disabled>
								</div>
							</div>
					</div>
						<div class="onboarding-content with-gradient" style="padding:90px 0px 40px !important">
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Tanggal cuti:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control" placeholder="12 - 16 Dec 2019" disabled>
							</div>
						</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">No yang bisa dihubungi:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control" placeholder="086575673478" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Keperluan cuti:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control" placeholder="Cuti Saja" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Status pengajuan:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control" placeholder="Telah Disetujui Bob Brownfoot" disabled>
						</div>
					</div>
						</div>
					</div>
			</div>
		</div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
