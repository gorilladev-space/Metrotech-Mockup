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
											Mesin Absen
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
										<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mesin</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-6">
                          <label>Nama Mesin :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                       <div class="col-lg-6">
                          <label class="">IP :</label>
                          <div class="form-group">
														<input type="text" class="form-control form-control-sm" placeholder="">
                      </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Lokasi :</label>
                          <div class="form-group">
														<input type="text" class="form-control form-control-sm" placeholder="">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Port :</label>
                          <div class="form-group">
														<input type="text" class="form-control form-control-sm" placeholder="">
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

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
