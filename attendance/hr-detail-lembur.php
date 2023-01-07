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
											Detail Lembur
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="hr-lembur.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
									<div class="kt-portlet">
										<div class="kt-portlet__body">
													<div class="row">
<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemberi Tugas</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-9">
                          <label>Nama Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE">
                        </div>
                       <div class="col-lg-3">
                          <label class="">NIP Pegawai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                      </div>
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-5">
                          <label class="">Department :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                      </div>
                        </div>
						<div class="col-lg-7">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Lembur</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Tanggal Lembur :</label>
						                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="07/01/2023">
						                        </div>


                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Waktu Mulai Lembur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="17:30:00 WITA">
                        </div>
						<div class="col-lg-6">
                          <label class="">Waktu Selesai Lembur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="22:30:00 WITA">
                        </div>

                        </div>

                        </div>

                        </div>
                        </div>






									<!--end::Portlet-->
								</div>




								<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label>Keterangan Lembur :</label>
                         <textarea class="form-control" id="exampleTextarea" rows="6" disabled="disabled" placeholder="Isikan Keterangan Lembur Anda"></textarea>

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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label>Upload Lampiran (Jika Ada) :</label>
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>
                        </div>
                        </div>






											</div>

										</div>

									</div>

									<!--end::Portlet-->
									
								</div>

							</div>
							<div class="row">
<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-8">
						<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="5%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="5%" bgcolor="#f7fcff">Department</td>
																									<td width="7%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="2%" bgcolor="#f7fcff">Tipe Pegawai</td>
																									<td width="2%" bgcolor="#f7fcff">Kantor</td>
																									<td width="5%" bgcolor="#f7fcff">Keterangan</td>
																									<td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjadad"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								
																								
																								
																								
																								

																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="8">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
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
