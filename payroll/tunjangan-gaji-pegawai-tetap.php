<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Tunjangan Gaji Pegawai Tetap
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
                <a href="add-tunjangan-gaji-pegawai-tetap.php" class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i> Tambah Data</button>
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
                                <label>Nama Tunjangan :</label>
    	                       <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															
					 																<option value="AK"selected >Tunjangan Jabatan</option>
																					<option value="HI">Tunjangan Keluarga</option>
																					<option value="HI">Tunjangan Kesehatan</option>
																					<option value="HI">Tunjangan Transport</option>
																					<option value="HI">Tunjangan Telekomunikasi</option>
																					<option value="HI">Tunjangan Makan / Minum</option>
																					<option value="HI">Tunjangan Representasi</option>
																					
					 														</select>
					                       </div>
        					
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
											  <th width="15%" bgcolor="#f7fcff">Nama Tunjangan</th>
											  <th width="5%" bgcolor="#f7fcff">Keterangan</th>
											  <th width="5%" bgcolor="#f7fcff">Jabatan</th>
											  <th width="2%" colspan="2" bgcolor="#f7fcff">Nilai Tunjangan</th>
											  <th width="3%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:left" nowrap>Tunjangan Jabatan</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Direktur Utama</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">4.950.000,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
											  <td id="kt_table_9">2</td>
											  <td style="text-align:left" nowrap="nowrap">Tunjangan Jabatan</td>
											  <td style="text-align:center" nowrap="nowrap">&nbsp;</td>
											  <td style="text-align:left" nowrap="nowrap">Direksi</td>
											  <td style="text-align:center" nowrap="nowrap">Rp.</td>
											  <td style="text-align:right" nowrap="nowrap">4.500.000,-</td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
											        <li class="kt-nav__item"> <a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat</span> </a> </li>
											        <li class="kt-nav__item"> <a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hr-pegawai-log.php" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon-share"></i> <span class="kt-nav__link-text">History Log</span> </a> </li>
										          </ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_10">3</td>
											  <td style="text-align:left" nowrap="nowrap">Tunjangan Jabatan</td>
											  <td style="text-align:center" nowrap="nowrap">&nbsp;</td>
											  <td style="text-align:left" nowrap="nowrap">Kepala Bagian</td>
											  <td style="text-align:center" nowrap="nowrap">Rp.</td>
											  <td style="text-align:right" nowrap="nowrap">1.250.000,-</td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
											        <li class="kt-nav__item"> <a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat</span> </a> </li>
											        <li class="kt-nav__item"> <a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_2"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hr-pegawai-log.php" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon-share"></i> <span class="kt-nav__link-text">History Log</span> </a> </li>
										          </ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_11">4</td>
											  <td style="text-align:left" nowrap="nowrap">Tunjangan Jabatan</td>
											  <td style="text-align:center" nowrap="nowrap">&nbsp;</td>
											  <td style="text-align:left" nowrap="nowrap">Kepala Seksi</td>
											  <td style="text-align:center" nowrap="nowrap">Rp.</td>
											  <td style="text-align:right" nowrap="nowrap">950.000,-</td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
											        <li class="kt-nav__item"> <a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat</span> </a> </li>
											        <li class="kt-nav__item"> <a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_3"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hr-pegawai-log.php" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon-share"></i> <span class="kt-nav__link-text">History Log</span> </a> </li>
										          </ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_12">5</td>
											  <td style="text-align:left" nowrap="nowrap">Tunjangan Jabatan</td>
											  <td style="text-align:center" nowrap="nowrap">&nbsp;</td>
											  <td style="text-align:left" nowrap="nowrap">Staff</td>
											  <td style="text-align:center" nowrap="nowrap">Rp.</td>
											  <td style="text-align:right" nowrap="nowrap">-</td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
											        <li class="kt-nav__item"> <a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat</span> </a> </li>
											        <li class="kt-nav__item"> <a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_4"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        <li class="kt-nav__item"> <a href="hr-pegawai-log.php" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon-share"></i> <span class="kt-nav__link-text">History Log</span> </a> </li>
										          </ul>
										        </div>
											    </div></td>
										  </tr>
											
										  <tr>
												<td id="kt_table_1">6</td>
												<td style="text-align:left" nowrap>Tunjangan Keluarga</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Direktur Utama</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">495.000,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">6</td>
												<td style="text-align:left" nowrap>Tunjangan Keluarga</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">550.000,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">6</td>
												<td style="text-align:left" nowrap>Tunjangan Keluarga</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Kepala Bagian</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">144.975,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">6</td>
												<td style="text-align:left" nowrap>Tunjangan Keluarga</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Kepala Seksi</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">151.105,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">6</td>
												<td style="text-align:left" nowrap>Tunjangan Keluarga</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:left" nowrap>Staff</td>
												<td style="text-align:center" nowrap>Rp.</td>
												<td style="text-align:right" nowrap="nowrap">139.090,-</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">7</td>
												<td style="text-align:left" nowrap>Tunjangan Kesehatan</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">8</td>
												<td style="text-align:left" nowrap>Tunjangan Transport</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">9</td>
												<td style="text-align:left" nowrap>Tunjangan Telekomunikasi</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">10</td>
												<td style="text-align:left" nowrap>Tunjangan Makan / Minum</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">11</td>
												<td style="text-align:left" nowrap>Tunjangan Representasi</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-parameter-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
