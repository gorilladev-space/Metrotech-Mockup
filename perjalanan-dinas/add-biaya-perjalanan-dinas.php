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
											Tambah Biaya Perjalanan Dinas Luar Kota
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
										<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Save</span>
				</button>
				
				
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
			  <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">DEPARTMENT</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">JABATAN</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">GOLONGAN</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">KANTOR</th>
											  <th colspan="4" bgcolor="#f7fcff">SATUAN BIAYA PERHARI</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">AKSI</th>
										  </tr>
											<tr style="text-align:center">
											  <th bgcolor="#f7fcff">UANG SAKU</th>
											  <th width="7%" bgcolor="#f7fcff">UANG MAKAN</th>
											  <th width="7%" bgcolor="#f7fcff">ANGKUTAN SETEMPAT</th>
											  <th width="7%" bgcolor="#f7fcff">BERANGKAT DAN KEPULANGAN</th>
							              </tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%">1</td>
												<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Direksi</option>
                              <option value="HI">Dewan Pengawas</option>
                              <option value="HI">Umum</option>
                             
                              
                            </select></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Direktur Utama</option>
                              <option value="HI">Direktur Umum</option>
                              <option value="HI">Direktur Operasional</option>
                              <option value="HI">Direktur Keuangan dan Asset</option>
                              <option value="HI">Direktur Pengembangan Usaha dan Kerjasama</option>
                              <option value="HI">Dewan Pengawas</option>
                              <option value="HI">Kepala Bagian</option>
                              <option value="HI">Kepala Seksi</option>
                              <option value="HI">Bendahara</option>
                              <option value="HI">Staff</option>
                              
                            </select></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><input type="text" class="form-control form-control-sm" value="Auto Complete" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Pusat</option>
                              <option value="HI">Cabang</option>
                            </select></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td width="1%">2</td>
												<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="HI">Dewan Pengawas</option>
							  <option value="AK">Direksi</option>
                              <option value="HI">Umum</option>
                             
                              
                            </select></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Dewan Pengawas Umum</option>
                             
                              
                            </select></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><input type="text" class="form-control form-control-sm" value="Auto Complete" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled></td>
							<td width="1%" align="left" valign="left" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Pusat</option>
                              <option value="HI">Cabang</option>
                            </select></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td width="7%" align="left" valign="left" style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  
										  
										</tbody>
									</table>	
											
                        
                      </div>

                      </div>
                    </div>
                    </div>
                
    

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
						
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
