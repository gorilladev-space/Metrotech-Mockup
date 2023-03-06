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
											Form Tambah Pegawai Kontrak
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
																	<span class="kt-nav__link-text">Save & continue</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-power"></i>
																	<span class="kt-nav__link-text">Save & exit</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
																	<span class="kt-nav__link-text">Save & edit</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-add-1"></i>
																	<span class="kt-nav__link-text">Save & add new</span>
																</a>
															</li>
														</ul>
													</div>
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
							<!--Begin::App-->
							
								<!--Begin:: App Content-->
								
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
										<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body">
											
									
													<div class="row">
								
								<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-6">
                          <label>Tanggal Awal Kontrak :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Select date" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
                       <div class="col-lg-6">
                          <label>Tanggal Akhir Kontrak :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Select date" id="kt_datepicker_2">
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
                          <label>Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Maghfirah Sharifuddin Andy Omar">
                        </div>
                       <div class="col-lg-3">
                          <label>Gelar Depan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Ex: Hj">
                        </div>
						<div class="col-lg-3">
                          <label>Gelar Belakang :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Ex: S.Psi.,M.Eng">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label>Jenis Kelamin :</label>
                         <select class="form-control kt-selectpicker">
																<option value="AK">Pria</option>
																<option value="HI">Wanita</option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label>Status :</label>
                         <select class="form-control form-control-sm kt-select2" id="kt_select2_4" name="param">
													<option value="AK" selected>Single</option>
													<option value="HI">Menikah</option>
													<option value="HI">Duda</option>
													<option value="CA">Janda</option>
													
												</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                        
<div class="col-lg-6">
					                           <label class="">Tempat Kelahiran :</label>
					                           <div class="form-group">
					                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_1" name="param">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="CA">Bantaeng</option>
					 																<option value="NV" selected>Makassar</option>
					 																<option value="OR">Pangkep</option>
					 																<option value="WA">Barru</option>
					 															</optgroup>
					 															<optgroup label="Eastern Time Zone">
					 																<option value="CT">Connecticut</option>
					 																<option value="DE">Delaware</option>
					 																<option value="FL">Florida</option>
					 																<option value="GA">Georgia</option>
					 																<option value="IN">Indiana</option>
					 																<option value="ME">Maine</option>
					 																<option value="MD">Maryland</option>
					 																<option value="MA">Massachusetts</option>
					 																<option value="MI">Michigan</option>
					 																<option value="NH">New Hampshire</option>
					 																<option value="NJ">New Jersey</option>
					 																<option value="NY">New York</option>
					 																<option value="NC">North Carolina</option>
					 																<option value="OH">Ohio</option>
					 																<option value="PA">Pennsylvania</option>
					 																<option value="RI">Rhode Island</option>
					 																<option value="SC">South Carolina</option>
					 																<option value="VT">Vermont</option>
					 																<option value="VA">Virginia</option>
					 																<option value="WV">West Virginia</option>
					 															</optgroup>
					 														</select>
					                       </div>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Tanggal Kelahiran :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Select date" id="kt_datepicker_2">
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
					                           <label>Agama :</label>
                         <select class="form-control form-control-sm kt-select2" id="kt_select2_3" name="param">
													<option value="AK" selected>Islam</option>
													<option value="HI">Kristen Protestan</option>
													<option value="HI">Kristen Katholik</option>
													<option value="CA">Hindu</option>
													<option value="NV">Budha</option>
													<option value="NV">Konghucu</option>
													<option value="NV">Lainnya</option>
													
												</select>
					                         </div>
						<div class="col-lg-6">
                          <label class="">No. KTP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" >
                      </div>
                      </div>
										
									</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                       
						
						<div class="col-lg-6">
					                           <label>NPWP :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="028216166805000">
					                         </div>
					                         </div>
						
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
                       
						<div class="col-lg-3">
					                           <label>No. Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="1740001805118">
					                         </div>
						<div class="col-lg-3">
					                           <label class="">Bank :</label>
                          <div class="form-group">
                        <select class="form-control form-control-sm kt-select2" id="kt_select2_8" name="param">
													<option value="AK" selected>Mandiri</option>
													<option value="HI">BNI</option>
													<option value="HI">BRI</option>
													<option value="HI">BCA</option>
													
												</select>
                      </div>
                      </div>
						<div class="col-lg-6">
					                           <label>Nama Pemilik Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="1740001805118">
					                         </div>
										
									</div>
									</div>
									
									

									</div>

									<!--end::Portlet-->
								</div>
								
								<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Korespondensi</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                        
						<div class="col-lg-9">
                          <label>Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Jl. Toddopuli Raya Timur">
						 
                        </div>
						<div class="col-lg-3">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="90233">
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm" placeholder="Kompleks Villa Surya Mas Blok J/9">
						 
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          <label class="">Kota :</label>
                          <div class="form-group">
                       
					                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_7" name="param">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK" selected>Makassar</option>
					 																<option value="HI">Bantaeng</option>
					 															</optgroup>
					 															<optgroup label="Pacific Time Zone">
					 																<option value="CA">California</option>
					 																<option value="NV" >Nevada</option>
					 																<option value="OR">Oregon</option>
					 																<option value="WA">Washington</option>
					 															</optgroup>
					 															
					 														</select>
					                       </div>
                      </div>
						<div class="col-lg-6">
                          <label class="">No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436">
                      </div>
                        </div>
						
                        </div>
						
					  
					  
						
											</div>
											
										</div>
										
									</div>
<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kepegawaian</div><br>
										<div class="kt-portlet__body">
										<div class="form-group row">
                        
						
						<div class="col-lg-8">
                          <label class="">Kantor :</label>
                          <div class="form-group">
                       
					                          <select class="form-control form-control-sm kt-select2" id="kt_select2_2" name="param">
													<option value="AK" selected>Pusat</option>
													<option value="HI">Cabang Sulawesi Barat</option>
													
												</select>
					                       </div>
                      </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       
                        <div class="col-lg-12">
                          <label class="">Department / Jabatan :</label>
                          <div class="form-group">
                       
					                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_9" name="param">
					 															<optgroup label="Department Teknik">
					 																<option value="AK" selected>Electrical Engineering Supervisor</option>
					 																<option value="AK" selected>Electrical Engineering Supervisor Assistant</option>
					 																<option value="AK" selected>Electrical Engineering Staff</option>
					 															</optgroup>
					 															
					 														</select>
					                       </div>
                      </div>
						
						
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
									<div class="col-lg-12">
                          <label class="">Atasan Langsung :</label>
                          <div class="form-group">
                       
					                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_11" name="param">
					 															<optgroup label="Department Infrastructure">
					 																<option value="AK">Infrastructure & Hardware Manager</option>
					 																<option value="AK">Network Engineer Supervisor</option>
					 																<option value="AK" selected>Electrical Engineer Supervisor</option>
					 																<option value="AK"Hardware Engineer Supervisor</option>
					 															</optgroup>
					 															
					 														</select>
					                       </div>
                      </div>
						
						
									</div>
									</div>
									
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Darurat</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                        
						<div class="col-lg-9">
                          <label>Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Jl. Toddopuli Raya Timur">
						 
                        </div>
						<div class="col-lg-3">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="90233">
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm" placeholder="Kompleks Villa Surya Mas Blok J/9">
						 
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          <label class="">Kota :</label>
                          <div class="form-group">
                       
					                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_10" name="param">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK" selected>Makassar</option>
					 																<option value="HI">Bantaeng</option>
					 															</optgroup>
					 															<optgroup label="Pacific Time Zone">
					 																<option value="CA">California</option>
					 																<option value="NV" >Nevada</option>
					 																<option value="OR">Oregon</option>
					 																<option value="WA">Washington</option>
					 															</optgroup>
					 															
					 														</select>
					                       </div>
                      </div>
						<div class="col-lg-6">
                          <label class="">No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436">
                      </div>
                        </div>
						
                        </div>
						
					  
					  
						
											</div>
											
										</div>
										
									</div>
<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Login Account</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       
                        <div class="col-lg-12">
                          
                          <label class="">Email Kantor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                      </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						 <div class="col-lg-12">
                         <label>Password :</label>
											<input type="text" class="form-control form-control-sm" placeholder="******">
										</div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       
                        <div class="col-lg-12">
                          
                          <label class="">Email Lupa Password :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                      </div>
                        </div>
						
						
                        </div>
                        </div>
						
					  
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto & Deskripsi Pegawai</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row" style="text-align:center">
																	<div class="col-lg-12">
														
														<div>&nbsp;</div>
														<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																			<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Ganti Foto">
																				<i class="fa fa-pen"></i>
																				<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																			</label>
																			<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel Foto">
																				<i class="fa fa-times"></i>
																			</span>
																		</div>

												</div>
												<div class="col-lg-12">
														
														<div>&nbsp;</div>
														<label>NIP Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130036">

												</div>
												<div class="col-lg-12">
														
														<div>&nbsp;</div>
														<label>Whatsapp :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="082244444436">

												</div>
												<div class="col-lg-12">
														
														<div>&nbsp;</div>
														<label>Motto :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Saya merupakan pribadi yang baik dan menyenangkan, tetapi tidak untuk dipermainkan!"></textarea>

												</div>
												
												</div>
												
											</div>
										</div>
									</div>

									<!--end::Portlet-->

									<!--begin::Portlet-->
									

									<!--end::Portlet-->
								</div>
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
		<script src="../assets/js/pages/dashboard.js" type="text/javascript"></script>
		<script src="../assets/js/scripts.bundle.js" type="text/javascript"></script>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/portlets/tools.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>

<?php require '../layouts/foot.php' ?>
