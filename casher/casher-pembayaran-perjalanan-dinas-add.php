<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
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
											Pembayaran Estimasi Biaya Perjalanan Dinas
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
										</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
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
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
                      <div class="row">
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-website"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Estimasi Biaya
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Surat Persetujuan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pembayaran
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Bukti
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kas Keluar
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>


									</div>
								</div>

								<!--end: Form Wizard Nav -->
								
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												
													<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
											
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemberi Tugas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-3">
                          <label>Nama Pejabat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE">
                        </div>
						
<div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-1">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                       
                       <div class="col-lg-2">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						 <div class="col-lg-2">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						
<div class="col-lg-3">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
						
                       
                        </div>
						
                      </div>
                    </div>
                    </div>
					<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Perjalanan Dinas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-3">
                          <label>No. SPPD :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238/10.1/PERUMDA-PMR/XII/2022">
                        </div>
						
<div class="col-lg-3">
                          <label>Tipe Perjalanan Dinas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Operasional Kantor">
                        </div>
						<div class="col-lg-3">
                          <label>Jenis Perjalanan Dinas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Luar Kota">
                        </div>
                       
                       
						
<div class="col-lg-3">
                          <label>Transportasi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pesawat Udara">
                        </div>
						
                       
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-3">
                          <label>Tanggal Berangkat :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="09/01/2022">
                        </div>
						 <div class="col-lg-3">
                          <label>Estimasi Tanggal Kembali :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12/01/2022">
                        </div>
						<div class="col-lg-3">
                          <label>Kota Asal :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>
						<div class="col-lg-3">
                          <label>Kota Tujuan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jakarta">
                        </div>
                        </div>
                      </div>
                    </div>
							<!--end:: Portlet-->
							<div class="row">
							
										<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Maksud Perjalanan Dinas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Mengikuti seluruh rangkaian kegiatan Rapat Kerja Nasional XV APEKSI Tahun 2022 di Kota Padang."></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						

                        </div>
						
                        </div>
						
						
                      </div>
                    </div>


										</div>
										
										
										


								<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Form Surat Tugas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                          <label class="">No. Surat Tugas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="097/80.3/PERUMDA-PMR/ST/XII/2022">
                        </div>
						
                       
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                       <div class="col-lg-7">
					    <label>Dasar Surat Tugas :</label>
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Perda No 2 Tahun 2021 Tentang Pendirian Perusahaan Umum Daerah Parkir Makassar Raya"></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Perda No 17 Tahun 2006 Tentang Pengelolaan Parkir Tepi Jalan Umum dalam Kota Makassar"></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Surat Perintah Walikota Makassar Nomor : 094/465/SP/VII/2022 Tanggal 22 Juli 2022 Mengikuti seluruh rangkaian kegiatan Rapat Kerja Nasional XV APEKSI Tahun 2022 di Kota Padang."></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						

                        </div>
					<div class="col-lg-5">
					    <label>Tembusan Surat Tugas :</label>
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Yth, Bapak Walikota Makassar"></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Yth, Dewan  Pengawas PERUMDA. Parkir Makassar Raya"></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" disabled="disabled" placeholder="Pertinggal"></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						

                        </div>
						
                        </div>
						
						
                    </div>
					
							<!--end:: Portlet-->


										</div>
										
										
										



								</div>
								

									<!--begin::Portlet-->
										
					
							<!--end:: Portlet-->


									<!--begin::Portlet-->
									
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
                        <div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="5%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="4%" bgcolor="#f7fcff">Department</td>
																									<td width="6%" bgcolor="#f7fcff">Bagian</td>
																									<td width="7%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="1%" bgcolor="#f7fcff">Tipe Pegawai</td>
																									<td width="1%" bgcolor="#f7fcff">Kantor</td>
																									
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjadad"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha dan Kerjasama"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">6</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>

																								<tr data-repeater-item>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
                                          </div>
													
								
									</div>
                   
							<!--end:: Portlet-->
										</div>



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">NO</td>
    <td width="10%" colspan="2" bgcolor="#f7fcff">URAIAN </td>
    <td width="10%" bgcolor="#f7fcff">JABATAN / GOLONGAN</td>
    <td colspan="2" bgcolor="#f7fcff">VOL</td>
    <td width="6%" bgcolor="#f7fcff">BIAYA</td>
    <td width="6%" bgcolor="#f7fcff">JUMLAH</td>
    <td width="3%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td colspan="2" bgcolor="#f5f5f5">b</td>
    <td bgcolor="#f5f5f5">c</td>
    <td width="1%" bgcolor="#f5f5f5">d</td>
    <td width="3%" bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    <td bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penginapan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td style="text-align:center" width="1%">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
     <td style="text-align:left">
       <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Saku"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.850.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="450.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
<tr>
    <td style="text-align:center">3</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Makan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="400.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.800.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="250.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi Setempat"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="450.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="350.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.450.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.400.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biaya Berangkat dan Kepulangan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">6</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" style="text-align:center"></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">7</option>
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
    <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="7.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>

    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="7" style="text-align:right"><b>GRAND TOTAL </b></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="40.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:right" bgcolor="#feffed"><b>JUMLAH PEMBAYARAN </b></td>
    <td bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="40.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:right"><b>SELISIH </b></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang :</b></td>
  </tr>
</tbody></table>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														

								<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:left; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
<tr>
  <td colspan="9" style="text-align: center">&nbsp;</td>
</tr>
<tr>
  <td colspan="9" style="text-align: center"><u><b>SURAT PERSETUJUAN PEMBAYARAN</b></u></td>
</tr>
<tr>
  <td colspan="9" style="text-align: center"><strong>NO : 642</strong></td>
</tr>
<tr>
  <td colspan="9" style="text-align: right">&nbsp;</td>
</tr>
<tr>
  <td colspan="9" style="text-align: left">DISETUJUI UNTUK DIBAYAR</td>
</tr>
<tr>
  <td colspan="3" style="text-align: left">KEPADA</td>
  <td width="6" style="text-align: center">:</td>
  <td colspan="5">YULIANTI TOMU, SE</td>
</tr>
<tr>
  <td colspan="3" style="text-align: left">UANG SEJUMLAH</td>
  <td style="text-align: center">:</td>
  <td width="29" style="text-align: left">Rp.</td>
  <td colspan="4" style="text-align: left">23.261.000,-</td>
</tr>
<tr>
  <td colspan="3" style="text-align: left">TERBILANG</td>
  <td style="text-align: center">:</td>
  <td colspan="5" style="text-align: left">Dua Puluh Tiga Juta Dua Ratus Enam Puluh Satu Ribu Rupiah</td>
</tr>
<tr>
  <td colspan="3" style="text-align: left">UNTUK PEMBAYARAN</td>
  <td style="text-align: center">:</td>
  <td colspan="5" style="text-align: left">Pembayaran Biaya Perjalanan Dinas Ke Makassar - Jakarta - Padang</td>
</tr>
<tr>
  <td colspan="3" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td colspan="5" style="text-align: left">Direktur Utama Perumda Parkir Makassar Raya An. Yulianti Tomu, SE Sesuai SPPD Terlampir</td>
</tr>
<tr>
  <td colspan="3" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td colspan="5"></td>
</tr>
<tr>
  <td colspan="3" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td colspan="4"></td>
</tr>
<tr>
  <td colspan="3" style="text-align: center"></td>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td style="text-align: left">Ditetapkan di</td>
  <td width="8" style="text-align: left">:</td>
  <td width="180" style="text-align: left">Makassar</td>
</tr>
<tr>
  <td width="57" style="text-align: right"></td>
  <td width="52" style="text-align: right"></td>
  <td width="52" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td width="85" style="text-align: left">&nbsp;</td>
  <td width="93" style="text-align: left">Tanggal</td>
  <td style="text-align: left">:</td>
  <td style="text-align: left">5 Agustus 2022</td>
</tr>
<tr>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td colspan="3" style="text-align: left">PERUMDA PARKIR MAKASSAR RAYA</td>
</tr>
<tr>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td colspan="3" style="text-align: left">&nbsp;</td>
</tr>
<tr>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td rowspan="3"><img src="../assets/img/qrcode.jpg" width="75" height="75"></td>
  <td></td>
  <td></td>
</tr>
<tr >
  <td style="border:1px solid #000; text-align:center" colspan="3" >KOLOM PARAF</td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td rowspan="3" style="border:1px solid #000; text-align: center"><img src="../assets/img/paraf.png" width="50" height="50"></td>
  <td rowspan="3" style="border:1px solid #000; text-align: center"><img src="../assets/img/paraf.png" width="50" height="50"></td>
  <td rowspan="3" style="border:1px solid #000; text-align: center"><img src="../assets/img/paraf.png" width="50" height="50"></td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td colspan="3" style="text-align: left">&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td colspan="3" style="text-align: left"><strong><u>YULIANTI TOMU, SE</u></strong></td>
</tr>
<tr>
  <td colspan="3" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td style="text-align: left">&nbsp;</td>
  <td colspan="3" style="text-align: left">DIREKTUR UTAMA</td>
  </tr>
<tr>
  <td colspan="3" style="text-align: right"></td>
  <td>&nbsp;</td>
  <td></td>
  <td colspan="4"></td>
</tr>

</table>
   <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							
							<tr>
							  <td width="554" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
  </tr>
</table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														

								<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:left; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
<tr>
  <td colspan="7" style="text-align: center">&nbsp;</td>
</tr>
<tr>
  <td colspan="7" style="text-align: center"><u><b>BUKTI KAS KELUAR</b></u></td>
</tr>
<tr>
  <td colspan="7" style="text-align: center"><strong>BKU NO : 666</strong></td>
</tr>
<tr>
  <td colspan="7" style="text-align: right">&nbsp;</td>
</tr>
<tr>
  <td width="146" style="text-align: left">SUDAH TERIMA DARI</td>
  <td width="8" colspan="-1" style="text-align: center">:</td>
  <td colspan="3">PERUMDA PARKIR MAKASSAR RAYA</td>
</tr>
<tr>
  <td style="text-align: left">UANG SEJUMLAH</td>
  <td colspan="-1" style="text-align: center">:</td>
  <td width="25" colspan="-1" style="text-align: left">Rp.</td>
  <td width="403" colspan="2" style="text-align: left">23.261.000,-</td>
</tr>
<tr>
  <td style="text-align: left">TERBILANG</td>
  <td colspan="-1" style="text-align: center">:</td>
  <td colspan="3" style="text-align: left">Dua Puluh Tiga Juta Dua Ratus Enam Puluh Satu Ribu Rupiah</td>
</tr>
<tr>
  <td style="text-align: left">UNTUK PEMBAYARAN</td>
  <td colspan="-1" style="text-align: center">:</td>
  <td colspan="3" style="text-align: left">Pembayaran Biaya Perjalanan Dinas Ke Makassar - Jakarta - Padang</td>
</tr>
<tr>
  <td style="text-align: right"></td>
  <td colspan="-1">&nbsp;</td>
  <td colspan="3" style="text-align: left">Direktur Utama Perumda Parkir Makassar Raya An. Yulianti Tomu, SE Sesuai SPPD Terlampir</td>
</tr>
<tr>
  <td style="text-align: right"></td>
  <td colspan="-1">&nbsp;</td>
  <td colspan="3"></td>
</tr>

</table>
  <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							
							<tr>
							  <td colspan="3" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td width="180" valign="middle" style="text-align: center; border: 1px solid #ccc"><strong>DISETUJUI</strong></td>
							  <td width="198" valign="middle" style="text-align: center; border: 1px solid #ccc"><strong>DIBAYARKAN OLEH</strong></td>
							  <td width="208" valign="middle" style="text-align: center; border: 1px solid #ccc"><strong>DITERIMA</strong></td>
     </tr>
							<tr>
							  <td valign="middle" style="text-align: center; border: 1px solid #ccc" ><img src="../assets/img/qrcode.jpg" width="50" height="50"></td>
							  <td valign="middle" style="text-align: center; border: 1px solid #ccc"><img src="../assets/img/qrcode.jpg" width="50" height="50"></td>
							  <td height="75" valign="middle" style="text-align: center; border: 1px solid #ccc"></td>
     </tr>
							<tr>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc">YULIANTI TOMU, SE</td>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc">ROSNANI, S.IP</td>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc">NAMA PEGAWAI</td>
     </tr>
							<tr>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc"">DIREKTUR UTAMA</td>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc"">KASIR</td>
							  <td valign="top" style="text-align: center; border: 1px solid #ccc"">[ JABATAN ]</td>
     </tr>
							<tr>
							  <td colspan="3" valign="top">&nbsp;</td>
     </tr>
							<tr>
							  <td colspan="3" valign="top">&nbsp;</td>
     </tr>
							<tr>
							  <td colspan="3" valign="top"><hr /></td>
     </tr>
							<tr>
							  <td colspan="3" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="3" valign="top">&nbsp;</td>
  </tr>
</table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Previous
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Submit
														</button>
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Next Step
														</button>
													</div>

													<!--end: Form Actions -->
												</form>

												<!--end: Form Wizard Form-->
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
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
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
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
