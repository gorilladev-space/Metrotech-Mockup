<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Terima Setoran Jukir
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											YUNUS TULAK, S.IP [ Nama Kolektor ]</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
                            <div class="col-lg-1">
                                <label>ID Mitra :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Nama Mitra :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label class="">Periode Target :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
                            
							
                            
							
							<div class="col-lg-2">
                                <label>Zona Kerja :</label>
								
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
							<div class="col-lg-2">
                                <label>Wilayah :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Titik Parkir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah Setor</option>
                                      <option value="2">Belum Setor</option>
                                      <option value="2">Kurang Setor</option>
                                      
                                  </select>
                            </div>
							
							
                            </div>
							
							
							<br>
							
							
						
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">No</th>
											  
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Nama Mitra</th>
											 
											  <th colspan="3" bgcolor="#f7fcff">Area Bertugas</th>
											  
											  <th width="2%" colspan="2" bgcolor="#f7fcff">Jam Kerja</th>
											 
											  <th colspan="3" bgcolor="#feffed">Senin</th>
											  <th colspan="3" bgcolor="#feffed">Selasa</th>
											  <th colspan="3" bgcolor="#feffed">Rabu</th>
											  <th colspan="3" bgcolor="#feffed">Kamis</th>
											  <th colspan="3" bgcolor="#feffed">Jumat</th>
											  <th colspan="3" bgcolor="#feffed">Sabtu</th>
											  <th colspan="3" bgcolor="#feffed">Minggu</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Zona</th>
											  <th width="2%" bgcolor="#f7fcff">Wilayah</th>
											  <th width="2%" bgcolor="#f7fcff">Titik Parkir</th>
											  <th bgcolor="#f7fcff">Awal</th>
											  <th bgcolor="#f7fcff">Akhir</th>
											 
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%"colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Target</th>
											  <th width="1%" bgcolor="#feffed">#</th>
								          </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>I</td>
												<td style="text-align:center" nowrap>Coto Nusantara</td>
												
												<td nowrap style="text-align:center">06:00:00</td>
												<td nowrap style="text-align:center">12:00:00</td>
												
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td width="1%" nowrap style="text-align:left; border-right: 1px solid #fff">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Jukir</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>ARMAN</td>
											
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>II</td>
												<td style="text-align:center" nowrap>Coto Nusantara</td>
													
												<td nowrap style="text-align:center">06:00:00</td>
												<td nowrap style="text-align:center">12:00:00</td>
												
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Sudah Disetor<hr>Nama Kolektor<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa fa-check"></i>
														</span></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left;" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Sudah Disetor - Kurang<hr>Nama Kolektor<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa fa-check"></i>
														</span></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Jukir</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">3</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>KASIM DG. BONTO</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>III</td>
												<td style="text-align:center" nowrap>Coto Nusantara</td>
												
												<td nowrap style="text-align:center">06:00:00</td>
												<td nowrap style="text-align:center">12:00:00</td>
												
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Sudah Disetor<hr>Nama Kolektor<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa fa-check"></i>
														</span></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Jukir</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>A. LUTFIA AGUSTINAPUTRI</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>IV</td>
												<td style="text-align:center" nowrap>Coto Nusantara</td>
												
												<td nowrap style="text-align:center">06:00:00</td>
												<td nowrap style="text-align:center">12:00:00</td>
												
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Sudah Disetor<hr>Nama Kolektor<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa fa-check"></i>
														</span></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Jukir</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">5</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>BANI</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>V</td>
												<td style="text-align:center" nowrap>Coto Nusantara</td>
												
												<td nowrap style="text-align:center">06:00:00</td>
												<td nowrap style="text-align:center">12:00:00</td>
												
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Sudah Disetor<hr>Nama Kolektor<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa fa-check"></i>
														</span></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left;" nowrap><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_setoran_jukir" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Jukir"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Jukir</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr bgcolor="#feffed";>
										    <td colspan="8" id="kt_table_3" style="text-align:center" bgcolor="#feffed"><strong>Total Target</strong></td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										    <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										   <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										   <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										   <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										   <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										  <td style="text-align:left;" nowrap>&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left; border-right: 1px solid #fff"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right"><strong>125.000,-</strong></td>
										    <td style="text-align:center" nowrap>&nbsp;</td>
										    <td style="text-align:center" nowrap>&nbsp;</td>
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
			<!--begin::Modal 1-->
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ID CARD</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
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

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									
												
													<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
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
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
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

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									
												
													<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
							<!--End::Modal 2-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_setoran_jukir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">FORM SETORAN MITRA JUKIR</h3>
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
														<label>ID Setoran :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000001SJTJU823">

												</div>
												<div class="col-lg-4">
														<label>ID Mitra Jukir :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000000001">

												</div>

												<div class="col-lg-4">
														<label>Nama Mitra Jukir :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="A. LUTFIA AGUSTINAPUTRI">
												</div>
												</div>
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												
												<div class="col-lg-4">
														<label>Zona :</label>
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
											
													</div>
													<div class="col-lg-4">
														<label>Wilayah :</label>
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="II">
											
													</div>
													<div class="col-lg-4">
														<label>Titik :</label>
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
											
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												
												<div class="col-lg-4">
														<label>Tanggal Tagihan :</label>
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="28/01/2023">
											
													</div>
													
													<div class="col-lg-4">
														<label>Tanggal Setoran :</label>
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="28/01/2023">
											
													</div>
													
													</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												

												<div class="col-lg-4">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
														<label>Selisih Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Fingerprint Mitra Jukir :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<span class="dropzone-msg-desc">&nbsp;</span>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
														<label>Fingerprint Kolektor :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<span class="dropzone-msg-desc">&nbsp;</span>
													</div>
												</div>

												</div>
												<div class="col-lg-4">
														<label>Keterangan Tambahan :</label>
														<textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Belum Normal"></textarea>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm" id="kt_sweetalert_demo_8" >Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
