<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Setup Gaji Pegawai Tetap
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
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
                <a href="setup-gaji-pegawai-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-calculator"></i> Tambah Data</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>

            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="row">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
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
    	                       <div class="form-group">

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
                                <label class="">Jabatan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>
                             
                            </div>
							<div class="col-lg-2">
                                <label class="">Pangkat / Golongan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Penata Muda / IV A</option>
                                      <option value="2" selected="">Penata Muda / IV A</option>
                                      <option value="2">Penata Muda / IV A</option>
                                     
                                  </select>
                             
                            </div>
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Cabang</option>
                                  </select>
                             
                            </div>
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Mulai Kerja :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Tanggal SK :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
                            </div>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">Foto</th>
											  <th width="3%" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="1%" bgcolor="#f7fcff">NIP</th>
											  <th width="3%" bgcolor="#f7fcff">Department</th>
											  <th width="3%" bgcolor="#f7fcff">Bagian</th>
											  <th width="3%" bgcolor="#f7fcff">Jabatan</th>
											  <th width="3%" bgcolor="#f7fcff">Pangkat / Golongan</th>
											  <th width="3%" bgcolor="#f7fcff">Kantor</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal<br>Mulai Kerja</th>
											  <th width="5%" colspan="2" bgcolor="#feffed">Pendapatan</th>
											  <th width="5%" colspan="2" bgcolor="#feffed">Potongan</th>
											  <th width="3%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_15.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Yulianti Tomu, SE</td>
												<td width="1%" style="text-align:center" nowrap>000 000 001</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Utama</td>
												<td width="3%" style="text-align:center" nowrap>Pembina Utama / IV E</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="1%" style="text-align:right" nowrap>5.000.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="1%" style="text-align:right" nowrap>1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirum.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Rizal Asjadad</td>
												<td width="1%" style="text-align:center" nowrap>000 000 002</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Umum</td>
												<td width="3%" style="text-align:center" nowrap>Pembina Madya / IV D</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">3</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirops.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Christofher Rio Aviary</td>
												<td width="1%" style="text-align:center" nowrap>000 000 003</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Operasional</td>
												<td width="3%" style="text-align:center" nowrap>X / IV A</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">4</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirkeu.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Mu’amar Nor Amin</td>
												<td width="1%" style="text-align:center" nowrap>000 000 004</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Keuangan dan Asset</td>
												<td width="3%" style="text-align:center" nowrap>X / IV A</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>

<tr>
												<td width="1%" id="kt_table_1">5</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirjasa.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Zulfadli Syahrir</td>
												<td width="1%" style="text-align:center" nowrap>000 000 005</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Pengembangan Usaha & Kerjasama</td>
												<td width="3%" style="text-align:center" nowrap>X / IV A</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td width="1%" id="kt_table_1">6</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>

												<td width="3%" style="text-align:left" nowrap>Ir. Asrarudin Mamonto, MM</td>
												<td width="1%" style="text-align:center" nowrap>000 000 006</td>
												<td width="3%" style="text-align:center" nowrap>Umum</td>
												<td width="3%" style="text-align:center" nowrap>Umum</td>
												<td width="3%" style="text-align:left" nowrap>Kepala Bagian Umum</td>
												<td width="3%" style="text-align:center" nowrap>X / IV A</td>
												<td width="3%" style="text-align:center" nowrap>Pusat</td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">1.000.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="view-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-check"></i>
																				<span class="kt-nav__link-text">Lihat Detail Gaji</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>

										  
										</tbody>
									</table>
                    <!--end: Datatable -->

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
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
