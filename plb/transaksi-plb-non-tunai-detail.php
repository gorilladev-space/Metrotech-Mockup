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
											Detail Transaksi PLB - Non Tunai
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
					<span class="kt-hidden-mobile">Simpan</span>
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
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
                      <div class="row">
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Transaksi</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="001NMT823">
                        </div>

                        <div class="col-lg-4">
                          <label>Tanggal :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="17 Agustus 2023">
                        </div>
						 <div class="col-lg-4">
                          <label>Waktu :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="17:00:00 WITA">
                        </div>
						
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                       <div class="col-lg-4">
                          <label class="">Tipe Transaksi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Non Tunai">
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Tarif / Bulan :</label>
                          <div class="form-group">
                        <div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Nominal Transaksi :</label>
                          <div class="form-group">
                        <div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
                      </div>
                        </div>
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                       <div class="col-lg-4">
                          <label class="">ID Pembayaran :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000001PLB823">
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Metode Pembayaran :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kartu Kredit">
                      </div>
                        </div>
                        
                      </div>
					  
                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>


								<div class="col-xl-4">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-5">
                          <label>ID Kolektor :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00001MJPTJUVIII23">
                        </div>
						<div class="col-lg-7">
                          <label>Nama Kolektor:</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Haris Dg Pawa">
                        </div>
                        </div>
						 

					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-5">
                          <label>Zona :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ujung Pandang">
                        </div>
						<div class="col-lg-7">
                          <label>Wilayah :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pattingalloang Baru">
                        </div>
						
						
                      </div>
					 
                     
                      </div>
                        

									<!--end::Portlet-->
								</div>
								</div>
								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Customer</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-5">
                          <label>ID Customer :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00001PLBVIII23">
                        </div>
						<div class="col-lg-7">
                          <label>Nama Customer:</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="CV. AMANDA BROWNIES">
                        </div>
                        </div>
						 

					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Alamat :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ujung Pandang">
                        </div>
						
						
						
                      </div>
					 
                     
                      </div>

									<!--end::Portlet-->
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
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
