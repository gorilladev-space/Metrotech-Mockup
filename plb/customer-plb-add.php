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
											Form Tambah Customer - PLB
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
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Customer PLB
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
													<i class="flaticon-list-2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Atribut Surat 
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kesepakatan Bersama
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
													<i class="flaticon-file-2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kesepakatan Bersama
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

									<div class="row">		
									<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Customer</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						 <div class="col-lg-6">
                          <label>ID Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						<div class="col-lg-6">
                          <label>ID Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Badan Usaha :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Badan Usaha :</label>
                           <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>PT</option>
														<option>CV</option>
														<option>Koperasi</option>
														<option>Firma</option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Customer :</label>
                           <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Silver</option>
														<option>Gold</option>
														<option>Platinum</option>
														</select>
                        </div>
                        </div>
						
						
						
					 
                    
									 
                      </div>	
					  
					   

<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-4">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
					                         </div>
						<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-4">
                          <label class="">Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
                      </div>
					   <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
					  

									
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> NPWP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Logo Badan Usaha :</label>
                         <div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div>
                        </div>

									</div>
									</div>
									</div>
									
                    </div>
					<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Badan Usaha</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <button type="button" class="btn btn-sm btn-brand" data-toggle="modal" data-target="#modal_peta">Lihat Peta</button>
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Latitude :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="">
					                         </div>
						<div class="col-lg-6">
                          <label class="">Longitude :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  
					  
                      </div>
					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Titik Parkir</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <button type="button" class="btn btn-sm btn-brand" data-toggle="modal" data-target="#modal_peta">Lihat Peta</button>
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Latitude :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="">
					                         </div>
						<div class="col-lg-6">
                          <label class="">Longitude :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  
					  
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Zona :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Wilayah :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                       <option value="1" selected="">I</option>
                                      <option value="2">II</option>
                                      <option value="3">III</option>
                                      <option value="4">IV</option>
                                      <option value="5">V</option>
                                      <option value="6">VI</option>
                                      <option value="7">VII</option>
                                      <option value="8">VIII</option>
                                      <option value="9">IX</option>
                                      <option value="10">X</option>
                                      <option value="11">XI</option>
                                      <option value="12">XII</option>
                                      <option value="13">XIII</option>
                                      <option value="14">XIV</option>
                                      <option value="15">XV</option>
                                  </select>
                      </div>
					  
					  
                      </div>
						
						
					 
                    
									 
					  

					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Penanggung Jawab</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> No. Identitas KTP :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                            <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pimpinan</option>
                              <option value="3">Direktur Utama</option>
                              <option value="3">Direktur</option>
                              <option value="3">Lainnya</option>

                          </select>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-4">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
					                         </div>
						<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-4">
                          <label class="">Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  
                      </div>
					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					
					<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Badan Usaha</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-12">
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>
						
						
                        </div>
                        </div>
						
						
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									
					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					
					
					
					
								
					
                    </div>
					
							<!--end:: Portlet-->
							
					
					
							<!--end:: Portlet-->


										</div>
										</div>
										
										
									
									<!--begin::Portlet-->
										
					
							<!--end:: Portlet-->


									<!--begin::Portlet-->		
									



													<!--end: Form Wizard Step 1-->

													

													<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

									<div class="row">		
									<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail SKB</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						 <div class="col-lg-12">
                          <label>Nomor SKB :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="001/30.SKB-PPLB/PB/I/2023" disabled>
                        </div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                      
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Berlaku Sejak :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
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
                      
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Dibuat di :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						
                        </div>
						
						
					 
                    
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">

<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Tanggal Surat :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						

					 
						


                      </div>	
                      </div>	
					   
					   
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									
									</div>
									</div>
									
                    </div>
					<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kesepakatan</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="3%" bgcolor="#f7fcff">Jenis<br>Kendaraan</td>
																									<td width="1%" bgcolor="#f7fcff">Daya<br>Tampung</td>
																									<td width="11%" bgcolor="#f7fcff">Satuan Tarif</td>
																									<td width="5%" bgcolor="#f7fcff">Durasi</td>
																									<td width="12%" bgcolor="#f7fcff">Nominal</td>
																									<td width="5%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Roda 2</option>
                              <option value="AK">Roda 4</option>
                            </select></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Roda 2</option>
                              <option value="AK" selected>Roda 4</option>
                            </select></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								

																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="7">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													<table class="table table-responsive  table-hover table-checkable" id="kt_table_2">
  <tr>
    <td width="24%" style="text-align:right" bgcolor="#f7fcff"><b>TOTAL KEWAJIBAN PERBULAN</b></td>
    <td width="12%" bgcolor="#f7fcff" colspan="-4" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  
 
</table>
									</div>
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Yth, Bapak Walikota Makassar"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Yth, Dewan  Pengawas PERUMDA. Parkir Makassar Raya"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Pertinggal"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
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
					
							<!--end:: Portlet-->
							
					
					
									
									<!--begin::Portlet-->
										
					
							<!--end:: Portlet-->


									<!--begin::Portlet-->		
									



													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
															
														<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td colspan="12" style="text-align: center"><u><b>SURAT KESEPAKATAN BERSAMA</b></u></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center">Nomor : 001/30.SKB-PLB/I/2023</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center"><strong>TENTANG</strong></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center"><strong>PEMBAYARAN PARKIR LANGGANAN BULANAN (PLB)</strong></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center"><strong>DALAM WILAYAH KOTA MAKASSAR</strong></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: justify">Pada hari ini, SENIN tanggal TIGA bulan JANUARI tahun DUA RIBU DUA PULUH DUA masing-masing tersebut dibawah ini :</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: justify">&nbsp;</td>
  </tr>
  <tr>
    <td width="1" align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td width="13" align="right" valign="top" style="text-align: right">A.</td>
    <td width="1" align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" style="text-align: justify"><strong>YULIANTI TOMU, SE</strong> selaku Direktur Utama Perusahaan Umum Daerah Parkir Makassar Raya, yang beralamat kantor Jl. Hati Mulia No. 7 Makassar, yang bertindak untuk atas nama Perusahaan Umum Daerah Parkir Makassar Raya di Kota Makassar, berdasarkan Peraturan Daerah Kota Makassar No. 2 Tahun 2021, tentang pendirian perusahaan umum daerah Parkir Makassar Raya. Surat Walikota Makassar No : 973/85/B.Huk/I/2019 Tanggal 17 Januari 2019, Perihal : Pemungutan Pajak Parkir atas Parkir Langganan Bulanan (PLB) Badan Usaha / Perorangan, selanjutnya disebut <strong>Pihak Pertama</strong></td>
  </tr>
  <tr>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td align="right" valign="top" style="text-align: right">B.</td>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" style="text-align: justify"><strong>HENDRA</strong> beralamat di Jl. Gunung Latimojong Bertindak untuk dan adatas nama RUSLIM JAYA INDAH selanjutnya disebut sebagai <strong>Pihak Kedua</strong></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: justify">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: justify">Pihak Pertama dan Pihak Kedua sepakat untuk membuat SKB tentang pembayaran Parkir Langganan Bulanan (PLB) untuk tahun 2022 yang berbunyi sebagai berikut :</td>
  </tr>
  <tr>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td align="right" valign="top" style="text-align: right">1.</td>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" style="text-align: left">Pihak Pertama, berdasarkan surat penetapan yang diterima menetapkan Parkir Langganan Bulanan (PLB) Pihak Kedua yang terletak di Jl. Gunung Latimojong dengan kriteria sebagai berikut :</td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td width="34" style="text-align: left">&nbsp;</td>
    <td width="28" style="text-align: left">A.</td>
    <td colspan="4" style="text-align: left">Daya Tampung Kendaraan Roda Dua (R2)</td>
    <td width="17" style="text-align: left">=</td>
    <td width="8" style="text-align: left"><strong>0</strong></td>
    <td width="142" style="text-align: left"><strong>Unit</strong></td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">B.</td>
    <td colspan="4" style="text-align: left">Daya Tampung Kendaraan Roda Empat (R4)</td>
    <td style="text-align: left">=</td>
    <td style="text-align: left"><strong>2</strong></td>
    <td style="text-align: left"><strong>Unit</strong></td>
  </tr>
  <tr>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td align="right" valign="top" style="text-align: right">2.</td>
    <td align="right" valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" style="text-align: justify">Pihak Pertama dan Pihak Kedua sepakat / menyetujui penetapan PLB Sebesar <em><strong>Rp. 300.000,- ( Tiga Ratus Ribu Rupiah )</strong></em><strong></strong></td>
  </tr>
  <tr>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td valign="top" style="text-align: right">3.<span style="text-align: center"></span><span style="text-align: right"></span></td>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" style="text-align: justify">Pembayaran dimaksud pada Poin 2 diatas sudah termasuk pembayaran pajak parkir sebesar 30% (tiga puluh persen) untuk kepentingan pihak kedua.<span style="text-align: justify"></span></td>
  </tr>
  <tr>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td valign="top" style="text-align: right">4.</td>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" valign="top" style="text-align: justify">Pihak Kedua sepakat dan menyetujui membayar <em><strong>Rp. 300.000,- ( Tiga Ratus Ribu Rupiah )</strong></em> setiap bulan berjalan kepada Pihak Pertama, berdsarkan invoice resmi dari Perusahaan Umum Daerah Parkir Makassar Raya.</td>
  </tr>
  <tr>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td valign="top" style="text-align: right">5.</td>
    <td valign="top" style="text-align: right">&nbsp;</td>
    <td colspan="9" valign="top" style="text-align: justify">Kesepakatan Pembayaran Parkir Langganan Bulanan (PLB) ini mulai berlaku sejak tanggal diterbitkannya yakni 03 Januari 2022 dan dapat dievaluasi kembali setip akhir tahun bila dianggap perlu oleh Pihak Pertama, jika tidak ada perubahan maka SKB ini dinyatakan diperpanjang secara otomatis.</td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td align="right" valign="top" style="text-align: left">6.</td>
    <td style="text-align: left">&nbsp;</td>
    <td colspan="9" style="text-align: left">Pembayaran Parkir Langganan Bulanan (PLB) ini dapat dilakukan dengan cara di Transfer melalui Rekening Resmi Perumda Parkir Makassar Raya : </td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td colspan="3" style="text-align: left"><strong>Nama Bank</strong></td>
    <td width="16" style="text-align: left"><strong>:</strong></td>
    <td colspan="5" style="text-align: left"><strong>Bank Tabungan Negara</strong></td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td colspan="3" style="text-align: left"><strong>No. Rek</strong></td>
    <td style="text-align: left"><strong>:</strong></td>
    <td colspan="5" style="text-align: left"><strong>9018 11 0000 01 3759</strong></td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td colspan="2" style="text-align: left">&nbsp;</td>
    <td width="29" style="text-align: left">&nbsp;</td>
    <td colspan="3" style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: justify">Demikian Surat Kesepakatan Bersama (SKB) ini dibuat dan ditanda tangani oleh kedua belah pihak untuk dipergunakan sebagaimana mestinya.</td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td colspan="2" style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td style="text-align: left">&nbsp;</td>
    <td width="173" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td width="88" style="text-align: left">Dibuat di</td>
    <td style="text-align: center"> : </td>
    <td colspan="2" style="text-align: left">Makassar</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td style="text-align: left">Pada Tanggal </td>
    <td style="text-align: center">:</td>
    <td colspan="2" style="text-align: left">03 Januari 2022</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left"><strong>Pihak Kedua</strong></td>
    <td colspan="4" style="text-align: left"><strong>Pihak Pertama</strong></td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left"><strong>RUSLIM JAYA INDAH</strong></td>
    <td colspan="4" style="text-align: left"><strong>PERUMDA PARKIR MAKASSAR RAYA</strong></td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">&nbsp;</td>
    <td colspan="4" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left"><strong>HENDRA</strong></td>
    <td colspan="4" style="text-align: left"><strong>YULIANTI TOMU, SE</strong></td>
  </tr>
  <tr>
    <td colspan="8" style="text-align: left">Pimpinan</td>
    <td colspan="4" style="text-align: left">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: left"><hr /></td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: left"><img src="../assets/img/qrcode.jpg" width="75" height="75"></td>
    <td colspan="7" valign="middle" style="text-align: justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: left">&nbsp;</td>
  </tr>
  
 
</table>
<div>&nbsp;</div>
				
</div>
								</div>
								<div><span>&nbsp;</span>
   
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Kembali
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Simpan
														</button>
														
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Selanjutnya
														</button>
													</div>

													<!--end: Form Actions -->
												</form>

												<!--end: Form Wizard Form-->
											</div>
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

</table>

												</div>
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
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
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
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>


												</div>
												</div>
												</div>
									</div>
									</div>

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_pelunasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM BAYAR ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Kasbon :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Pengajuan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nilai Pinjaman :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                              1.000.000,-">
												</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                                100.000,-">
												</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" disabled="disabled" placeholder="Rp.                                                200.000,-">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" placeholder="Rp.                                                200.000,-">
												</div>
													</div>
												<div class="col-lg-8">
														<label>Upload Bukti Pembayaran :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->

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
<?php require '../layouts/foot.php' ?>
