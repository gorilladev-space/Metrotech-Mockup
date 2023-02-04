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
											Detail Mutasi Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="mutasi-pegawai.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;


										</div>
										
										</div>
										</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						

							<!--Begin::App-->

								<!--Begin:: App Content-->
								
								
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
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup Mutasi
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Setup Surat Mutasi Pegawai
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Mutasi Pegawai
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														2
													</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-rocket"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Rincian Potongan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Potongan Gaji Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>-->
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Review
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Preview Slip Gaji
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>-->

									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Petugas Pelaksana</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-8">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        
                        </div>
                       <div class="col-lg-4">
                          <label>NIP :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama">
                        
                        </div>

                        </div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Surat Mutasi</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>No. SK Mutasi :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="088/20.S-Kep.Dir/PERUMDA-PMR/VIII/2022">
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Ditetapkan Di :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Tanggal SK Mutasi :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="21 Desember 2022">
                        
                        </div>
												</div>
												
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat Mutasi</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Tembusan Surat</td>
																								 
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Walikota Makassar"></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pertinggal"></td>
																									
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
                       

                       
                     
						
												
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								</div>
								
								
								</div>
								<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Penerima Mutasi</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div id="kt_repeater_1">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" rowspan="2" bgcolor="#f7fcff">No</td>
																								  <td width="7%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</td>
																								  <td width="5%" rowspan="2" bgcolor="#f7fcff">NIP</td>
																								  <td width="7%" rowspan="2" bgcolor="#f7fcff">Pangkat<br>/ Golongan</td>
																								  <td colspan="6" bgcolor="#f7fcff">Mutasi Tugas</td>
																								 
																								  </tr>
																								<tr style="text-align:center">
																								  <td width="10%" bgcolor="#f7fcff">Jabatan Lama</td>
																									<td width="10%" bgcolor="#f7fcff">Department Lama</td>
																								  <td width="4%" bgcolor="#f7fcff">Kantor<br>Lama</td>
																									<td width="5%" bgcolor="#feffe2">Jabatan Baru</td>
																									<td width="8%" bgcolor="#feffe2">Department Baru</td>
																									<td width="4%" bgcolor="#feffe2">Kantor<br>
																								  Baru</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pelaksana Tingkat I/B4"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sekertaris Direksi"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerjasama"></td>
                                                                                                    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
                                                                                                   
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>

									<!--end::Portlet-->



								</div>
								
								
								
								</div>
								
								</div>
								</div>
								</div>



												<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											

									<!--begin::Portlet-->
										
			
			<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
								<th colspan="6" class="text-center">
									<span style="text-align: center"><span style="font-family: Bookman Old Style; font-size: 12px;"><u>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></u></span><br /><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>Nomor : 088/20.S-Kep.Dir/PERUMDA-PMR/VIII/2022</b></span>
								</th>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;">TENTANG</span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>PENGANGKATAN TENAGA KONTRAK KERJA WAKTU TERBATAS</b></span><br />
							    <span style="font-family: Bookman Old Style; font-size: 12px;"><b>(TENAGA PENDUKUNG) PADA PERUSAHAAN UMUM DAERAH PARKIR</b></span><br />
						      <span style="font-family: Bookman Old Style; font-size: 12px;"><b>MAKASSAR RAYA KOTA MAKASSAR TAHUN 2023</b></span></p></td>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
								<td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>Dengan Rahmat Tuhan Yang Maha Esa</b></span></p></td>
							</tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Menimbang</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td width="10" valign="top">a.</td>
							  <td>&nbsp;</td>
							  <td>bahwa  untuk menunjang kelancaran pelaksanaan tugas-tugas Perusahaan Umum Daerah  Parkir Makassar Raya Kota Makassar, maka dipandang perlu mengangkat tenaga Kontrak  Kerja waktu terbatas (Tenaga Pendukung) sesuai dengan kebutuhan tiap Bagian  dengan memperhatikan Analisis beban kerja dan kemampuan keuangan perusahaan.   </td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td>&nbsp;</td>
							  <td>bahwa berdasarkan pertimbangan sebagaimana dimaksud pada  huruf a diatas dipandang perlu ditetapkan dengan Keputusan Direksi Perusahaan Umum  Daerah Parkir Makassar Raya tentang Pengangkatan Tenaga Kontrak Kerja Waktu  Terbatas (Tenaga Pendukung) pada Perusahaan Umum Daerah Parkir Makassar Raya  Kota Makassar Tahun 2023. </td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Mengingat</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">1.</td>
							  <td>&nbsp;</td>
							  <td>Undang-Undang Nomor 29 Tahun 1959 tentang Pembentukan  Daerah-daerah Tingkat II di Sulawesi (Lembaran Negara Republik Indonesia Tahun  1959 Nomor 74, Tambahan Lembaran Negara Republik Indonesia Nomor 1822);
						      <span style="text-align: justify"></span></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 75, tambahan Lembaran Negara Republik Indonesia Nomor 3851);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang – Undangan (Lembaran Negara Republik Indonesia Tahun 2011 Nomor 82, Tambahan Lembaran Negara Republik Indonesia Nomor 5234) sebagaimana telah diubah dengan Undang-Undang Nomor 15 Tahun 2019 Tentang Perubahan atas Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang-undangan (Lembaran Negara Republik Indonesia Tahun 2019 Nomor 183, Tambahan Lembaran Negara Republik Indonesia Nomor 6398);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">4.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Noomor 5587) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Nomor 5679);</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
  </table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
  <div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">5.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 30 Tahun 2014 tentang Administrasi Pemerintahan (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 292, Tambahan Lembaran Negara Republik Indosesia Nomor 5601); </td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">6.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar Nomor 10 Tahun 2000 tentang Pokok-Pokok Badan Pengawas Direksi dan Kepegawaian PD.Parkir Makassar Raya;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">7.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar  Nomor 16 Tahun 2006 tentang Perubahan atas Peraturan Daerah Kota Makassar Nomor 5 Tahun 1999 tentang pendirian Perusahaan Daerah Parkir Makassar Raya Kotamadya Daerah Tingkat II Ujung Pandang;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">8.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar Nomor 17 Tahun 2006 tentang Pengelolaan Parkir Tepi Jalan Umum dalam daerah Kota Makassar;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">9.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 51 Tahun 1971 tentang Perubahan Batas – batas Daerah Kotamadya Makassar dan Kabupaten – Kabupaten Gowa, Maros dan Pangkajene dan Kepulauan dalam lingkungan Daerah Provinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Tahun 1971 Nomor 65, Tambahan Lembaran Negara Republik Indonesia Nomor 2970);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">10.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan pemerintah Nomor 54 Tahun 2017 tentang Badan Usaha Milik Daerah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">11.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 86 Tahun 1999 tentang Perubahan Nama Kota Ujung Pandang menjadi Kota Makassar dalam Wilayah Provinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Nomor 5258);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">12.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Dalam Negeri Daerah Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah (Berita Negara Republik Indonesia Tahun 2015 Nomor 2036) sebagaimana telah diubah terakhir dengan Peraturan Menteri dalam Negeri Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah (Berita Negara Republik Indonesia Tahun 2018 Nomor 157);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">13.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Menteri Dalam Negeri Nomor 37 Tahun 2018 tentang Pengangkatan dan Pemberhentian Anggota Dewan Pengawas atau Anggota Komisaris dan Anggota Direksi Badan Usaha Milik Daerah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">14.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Menteri Dalam Negeri Nomor 118 tahun 2018 tentang Rencan Bisnis, Rencana Kerja dan Anggaran, Kerja Sama, Pelaporan dan Evaluasi Badan Usaha Milik Daerah; </td>
  </tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
						</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
						<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="9"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>MEMUTUSKAN</b></p></td>
							</tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td width="76" valign="top">Menetapkan</td>
							  <td width="1" valign="top">&nbsp;</td>
							  <td width="3" valign="top">:</td>
							  <td width="10" valign="top"></td>
							  <td width="1">&nbsp;</td>
							  <td colspan="4"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA  TENTANG  PENGANGKATAN TENAGA KONTRAK KERJA WAKTU TERBATAS (TENAGA PENDUKUNG) PADA PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA KOTA MAKASSAR TAHUN 2023</b></td>
  </tr>
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KESATU</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"></td>
							  <td>&nbsp;</td>
							  <td colspan="4">Mengangkat Tenaga Kontrak Kerja Waktu Terbatas (Tenaga Pendukung) pada Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar Tahun 2023, sebagaimana namanya tercantum dalam Lampiran Keputusan ini yang merupakan satu kesatuan yang tidak terpisahkan dengan Keputusan ini; </td>
  </tr>
							<tr>
							  <td valign="top">KEDUA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Hak dan Kewajiban Tenaga Kontrak Kerja Waktu Terbatas (Tenaga Pendukung) sebagaimana dimaksud dalam Diktum KESATU, dituangkan dalam Surat Perjanjian Kesepakatan Kerja Waktu terbatas yang ditandatangani oleh yang bersangkutan dengan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar;   


</span></td>
  </tr>
							<tr>
							  <td valign="top">KETIGA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Segala Biaya yang timbul dari pelaksanaan Keputusan ini, akan dibebankan pada  Anggaran Belanja Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar Tahun Anggaran 2023;</td>
  </tr>
							<tr>
							  <td valign="top">KEEMPAT</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Ketentuan yang berkaitan dengan teknis pelaksanaan Keputusan ini akan diatur lebih lanjut dalam Surat Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar;</td>
  </tr>
							<tr>
							  <td valign="top">KELIMA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Keputusan ini berlaku terhitung mulai tanggal 01 Januari 2023 sampai dengan 31 Desember 2023.</td>
  </tr>
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr align="right" valign="top">
							  <td colspan="6" rowspan="9"><img src="../assets/img/paraf.png" width="50" height="50" /></td>
							  <td width="84" style="text-align:right">Ditetapkan di </td>
							  <td width="8">:</td>
							  <td width="130" style="text-align:left">Makassar</td>
  </tr>
							<tr>
							  <td><u>Pada Tanggal</u></td>
							  <td><u>:</u></td>
							  <td><u>30 Desember 2022</u></td>
  </tr>
							<tr>
							  <td colspan="3">Direksi Perusahaan Umum Daerah </td>
  </tr>
							<tr>
							  <td colspan="3">Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
							<tr>
							  <td colspan="3">Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="9"><u>Tembusan disampaikan Kepada Yth.:</u></td>
  </tr>
							<tr>
							  <td colspan="9">1. Walikota Makassar;</td>
  </tr>
							<tr>
							  <td colspan="9">2. Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</td>
  </tr>
							<tr>
								<td colspan="9">3. Pertinggal.</td>
  </tr>
							<tr>
								<td colspan="9">&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="9"><hr /></td>
  </tr>
							<tr>
							  <td colspan="9" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
								<td colspan="9">&nbsp;</td>
							</tr>
</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="84"><b>Daftar</b></td>
    <td width="8">:</td>
    <td width="4">&nbsp;</td>
    <td width="437">Lampiran Keputusan Direksi PERUMDA Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td><b>Nomor</b></td>
							  <td>:</td>
							  <td>&nbsp;</td>
							  <td>001/20-S/Kep.Dir/PERUMDA-PMR/XI/2022</td>
  </tr>
							<tr>
							  <td><b>Tanggal</b></td>
							  <td>:</td>
							  <td>&nbsp;</td>
							  <td>29 November 2022</td>
  </tr>
							<tr>
							  <td colspan="4">&nbsp;</td>
  </tr>
						</table>
						<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:justify; line-height:2.0; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td valign="center" style="text-align: right">1&nbsp;</td>
							  <td valign="center">&nbsp;Nomor</td>
							  <td valign="center">&nbsp;001</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">2&nbsp;</td>
							  <td valign="center">&nbsp;Nama</td>
							  <td valign="center">&nbsp;Mardiyah, SE</td>
  </tr>
							<tr>
							  <td width="24" valign="center" style="text-align: right">3&nbsp;</td>
							  <td width="214" valign="center">&nbsp;Nomor Pokok Pegawai</td>
							  <td width="331" valign="center">&nbsp;2381980022062</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">4&nbsp;</td>
							  <td valign="center">&nbsp;Tempat/Tanggal Lahir</td>
							  <td valign="center">&nbsp;Sungguminasa, 13 Januari 1980</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">5&nbsp;</td>
							  <td valign="center">&nbsp;Jenis Kelamin</td>
							  <td valign="center">&nbsp;Perempuan</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">6&nbsp;</td>
							  <td valign="center">&nbsp;Pendidikan Terakhir</td>
							  <td valign="center">&nbsp;S.1</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">7&nbsp;</td>
							  <td valign="center">&nbsp;Status</td>
							  <td valign="center">&nbsp;Calon Pegawai</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">8&nbsp;</td>
							  <td valign="center">&nbsp;Pangkat / Golongan</td>
							  <td valign="center">&nbsp;Staf Muda / C.1</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">9&nbsp;</td>
							  <td valign="center">&nbsp;Masa kerja Golongan</td>
							  <td valign="center">&nbsp;0 Tahun 0 Bulan</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">10&nbsp;</td>
							  <td valign="center">&nbsp;Gaji Pokok</td>
							  <td valign="center">&nbsp;80% x 2.456.700 = Rp. 1.965.360</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">11&nbsp;</td>
							  <td valign="center">&nbsp;Terhitung Mulai tanggal</td>
							  <td valign="center">&nbsp;01 Desember 2022</td>
  </tr>
  <tr>
							  <td valign="center" style="text-align: right">12&nbsp;</td>
							  <td valign="center">&nbsp;Tempat Bekerja</td>
							  <td valign="center">&nbsp;PERUMDA Parkir Makassar Raya</td>
  </tr>
  <tr>
							  <td valign="center" style="text-align: right">13&nbsp;</td>
							  <td valign="center">&nbsp;Keterangan</td>
							  <td valign="center">&nbsp;Masa Kerja Tambahan 15 Tahun</td>
  </tr>
   <tr>
							  <td valign="center" style="text-align: right">&nbsp;</td>
							  <td valign="center">&nbsp;</td>
							  <td valign="center">&nbsp;</td>
  </tr>
						</table>
						<br>
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="24" valign="center" style="text-align: right">&nbsp;</td>
    <td width="331" rowspan="3" align="right" valign="top"><img src="../assets/img/paraf.png" width="50" height="50" /></td>
    <td width="90" valign="center">Ditetapkan di</td>
    <td width="7" valign="center">:</td>
    <td width="126" valign="center">Makassar</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">Pada Tanggal </td>
    <td valign="center">:</td>
    <td valign="center">29 November 2022</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td colspan="3" valign="center">PERUMDA Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td align="right" valign="top">&nbsp;</td>
    <td colspan="3" valign="center"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center"><u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right"><hr /></td>
  </tr>
  <tr>
							  <td colspan="5" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
						</table>
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
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

												<!--end: Form Wizard Form-->
											</div>
										</div>
								

							<!--end:: Portlet-->




							

  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>
							</div>
							</div>
							</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->
<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
