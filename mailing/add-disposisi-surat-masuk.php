<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

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
				Form Disposisi Surat Masuk
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="pegawai.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
		</div>
	</div>
</div>
<!-- end:: Content Head -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!--Begin::Alert-->
	<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
		<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
		<div class="alert-text">A simple primary alert—check it out!</div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>
	<!--end::Alert-->

	<!--Begin:: App Content-->

	<div class="row">
	<div class="col-lg-12">
		<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-user-tie"></i> Preview Surat Masuk
													</a>
												</li>
												
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-users"></i>Lembar Disposisi
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-user-graduate"></i>Tembusan
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_5" role="tab">
														<i class="fa fa-copy"></i>Berkas
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_6" role="tab">
														<i class="fa fa-file-alt"></i>Riwayat Disposisi
													</a>
												</li>
												
											</ul>
												
		
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-8">

									<!--begin::Portlet-->
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											
											<div class="kt-portlet__head-label">
												
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-top">
										<embed src="../assets/img/sk-pengangkatan-calon-pegawai.pdf" type="application/pdf" width="100%" height="600px" />
										</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kepegawaian</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-6">
																						<label>Tipe Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Pegawai Tetap" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-6">
																						<label>NIP Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="012311239933" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label>Masuk Kerja :</label>
																						<div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
						<div class="col-lg-6">
																						<label>SK Pegawai Tetap :</label>
																						<div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label>Department :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Direksi</option>
														<option>Dewan Pengawas</option>
														<option>Umum</option>
														<option>Keuangan & Asset</option>
														<option>Operasional</option>
														<option>Pengembangan Usaha dan Kerjasama</option>
														
														</select>
																					</div>
<div class="col-lg-6">
																						<label>Bagian :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Umum dan Kepegawaian</option>
														<option>Hukum dan Humas</option>
														<option>Keuangan</option>
														<option>Asset</option>
														<option>Pengelolaan</option>
														<option>Produksi</option>
														<option>Pengembangan</option>
														<option>Kerja Sama</option>
														
														</select>
																					</div>
																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
<div class="col-lg-6">
																						<label>Pangkat / Golongan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pelaksanan Tingkat I / IV A</option>
                              <option value="2">Pelaksanan Tingkat I / IV B</option>
                              <option value="3">Pelaksanan Tingkat I / IV C</option>
                              <option value="3">Pelaksanan Tingkat I / IV D</option>

                          </select>
																					</div>
						<div class="col-lg-6">
																						<label>Kantor :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Pusat</option>
														<option>Cabang</option>
													
														
														</select>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Dewan Pengawas</option>
                              <option value="2">Direktur Utama</option>
                              <option value="2">Direktur Umum</option>
                              <option value="2">Direktur Keuangan dan Asset</option>
                              <option value="2">Direktur Operasional</option>
                              <option value="2">Direktur Pengembangan Usaha & Kerjasama</option>

                          </select>
																					</div>
						
                        </div>

									

									</div>
									


									</div>
							<!--end:: Portlet-->
</div>
<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atasan Langsung</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Cari Pegawai :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>

                          </select>
																						
																					</div>
																					
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>NIP :</label>
																						<input type="text" class="form-control form-control-sm" value="238 004 032" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Department :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Bagian :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum dan Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																					<input type="text" class="form-control form-control-sm" value="Kepala Seksi Administrasi Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>

									

									</div>
																						</div>

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Upload Foto">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Fingerprint Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Scan Fingerprint">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>

									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Tanda Tangan">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>
									</div>



                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
												<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat Masuk</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Surat Dari :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE">
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

                        <div class="col-lg-12">
                          <label class="">Nomor Surat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="28/12/2022">
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                        
						<div class="col-lg-12">
                          <label>Tanggal Surat :</label>
                       <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="29/12/2022">
                        </div>
                      </div>
					   
                    </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>
										<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Disposisi</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Tanggal Diterima :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="29/12/2022">
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

                        <div class="col-lg-12">
                          <label class="">Nomor Agenda :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete">
                        </div>
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					  <div class="col-lg-12">
                          <label>Catatan Disposisi :</label>
                      <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
                        </div>
                        </div>
                        </div>
                        </div>
							<!--end:: Portlet-->

									
										</div>
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Diteruskan Kepada :</label>
                           <div class="col-lg-12 col-md-12 col-sm-12">
											<select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
												
													<option value="AK" selected>Direktur Umum</option>
													<option value="AK" >Direktur Operasional</option>
													<option value="AK" >Direktur Keuangan dan Asset</option>
													<option value="AK" >Direktur Pengembangan Usaha dan Kerjasama</option>
													
											</select>
										</div>
                        </div>

                        
                        
						
						
						
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                       <div class="col-lg-12">
					   <br>
					   <table border="0">
  <tr>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Segera Diproses
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Buatkan Usulan
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Dirapatkan
																		<span></span>
																	</label></td>
  </tr>
  <tr>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Balas Segera
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Masukkan Program
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Buatkan Laporan
																		<span></span>
																	</label></td>
  </tr>
  <tr>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Buat Telaahan 
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Cek Data / Monitoring / Dilokasi
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Undang Rapat
																		<span></span>
																	</label></td>
  </tr>
  <tr>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox">  Koordinasikan
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Bicarakan Dengan Kabag
																		<span></span>
																	</label></td>
    <td width="50">&nbsp;</td>
    <td><label class="kt-checkbox kt-checkbox--success">
																		<input type="checkbox"> Ajukan Saran
																		<span></span>
																	</label></td>
  </tr>
  
</table>
					   
																

                        
						
                      </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>
										



								</div>
														</div>
													</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pendidikan</div>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">Jenjang<br>Pendidikan</th>
											  <th width="5%" bgcolor="#f7fcff">Jurusan / Fakultas</th>
											  <th width="3%" bgcolor="#f7fcff">Tahun Masuk</th>
											  <th width="3%" bgcolor="#f7fcff">Tahun Lulus</th>

											  <th width="5%" bgcolor="#f7fcff">Nama Sekolah / Universitas </th>
											  <th width="3%" bgcolor="#f7fcff" rowspan="2">Upload Ijazah</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">4</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>

										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_5" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Sertifikat</div>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="5%" bgcolor="#f7fcff">Uraian<br>Sertifikat</th>
											  <th width="5%" bgcolor="#f7fcff">Dikeluarkan Oleh</th>
											  <th width="2%" bgcolor="#f7fcff">Tahun<br>Sertifikat</th>

											
											  <th width="3%" bgcolor="#f7fcff" rowspan="2">Upload Sertifikat</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">4</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>

										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_6" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pengalaman Kerja</div>
                   
                      <div class="row">
								<div class="col-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_4">#</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Nama Instansi</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Alamat Instansi</th>

											  <th colspan="2" bgcolor="#f7fcff">Lama Bekerja</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Jabatan Terakhir</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Upload Bukti</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="4%" bgcolor="#f7fcff">Awal</th>
											  <th width="4%" bgcolor="#f7fcff">Akhir</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>

												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>


										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_7" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Login Aplikasi</div>

                    <div class="kt-portlet__body">
                      <div class="row">
								<div class="col-xl-12">
									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																

																<div class="form-group row">
						<div class="col-lg-3">
                          <label>Email Kantor :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                        </div>
                       <div class="col-lg-3">
                          <label>Email Lupa Password :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                        </div>
						<div class="col-lg-3">
                          <label>Password Login :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="******">
                        </div>
						<div class="col-lg-3">
                          <label>Ulangi Password :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="******">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>


															</div>
														</div>

                      </div>
                  
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>



								</div>

								<!--End:: App Content-->
							</div>
											</div>
										</div>
									</div>
								</div>
					

	<!--end::Portlet-->


	<!--end:: Portlet-->


</div>



</div>

<!--End:: App Content-->
</div>

<!--End::App-->
</div>

<!-- end:: Content -->
</div>


</div>
</div>

<!--end: Datatable -->
</div>
</div>

</div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
