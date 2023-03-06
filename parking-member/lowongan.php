<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Lowongan
                </h3>
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
                <a href="lowongan-form.php" class="btn btn-info btn-sm">
                    <i class="flaticon2-plus"></i> Setup Lamaran</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
            </div>
        </div>
    </div>
	<!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

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
                        <div class="col-lg-3">
                            <label>Departemen :</label>
                            <select class="form-control kt-selectpicker">
                                  <option value="2">Creative</option>
                                  <option value="2">IT & Development</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="">Jabatan :</label>
                            <select class="form-control kt-selectpicker">
                                <option value="12">Designer</option>
                                <option value="12">Web Developer</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label>Batas Lowongan :</label>
                            <div class="input-group date">
								<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly placeholder="Select date"  />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
							</div>
                        </div>
                        <div class="col-lg-2">
                            <label>Psikotest & Interview :</label>
                            <div class="input-group date">
								<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly placeholder="Select date"  />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
							</div>
                        </div>
                        <div class="col-lg-2">
                            <label>Tes Kemampuan :</label>
                            <div class="input-group date">
								<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly placeholder="Select date" />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
							</div>
                        </div>
                    </div>
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

        <!--Begin::Section-->
		<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
		<div class="row">

			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
                        <!--begin::status -->
						<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
                        <!--begin::status -->
						<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
                        <!--begin::status -->
						<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
                        <!--begin::status -->
						<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
                        <!--begin::status -->
						<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right  kt-ribbon--secondary">
                        <!--begin::status -->
						<div class="kt-ribbon__target kt-label-bg-color-1" style="top: 70px; right: -2px;">Closed</div>
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<a href="#" class="kt-widget__title">
											Backend Developer
										</a>
										<span class="kt-widget__desc">
											Divisi Information & Technology
										</span>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox"  name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Detail</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">Edit</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-send"></i>
													<span class="kt-nav__link-text">Delete</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-liked"></i>
													<span class="kt-nav__link-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">01-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Batas Lowongan
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">02-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Psikotest & Interview
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time">03-10-2019</span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Tes Kemampuan
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span>Kota</span>
														<span>Makassar</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dibuat Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
													<div class="kt-widget6__item">
														<span>Dipublish Oleh</span>
														<span>Iwan Jeriatno</span>
													</div>
												</div>
											</div>
                                    </div>
                                </div>

							</div>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="flaticon-users-1"></i>
											<a href="#" class="kt-widget__value kt-font-danger">5 Pelamar</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pelamar</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
		</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
		<div class="row">
			<div class="col-xl-12">
				<!--begin:: Components/Pagination/Default-->

                        <!-- begin:: pageline -->
    					<!-- <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div> -->
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
				<!--end:: Components/Pagination/Default-->
			</div>
		</div>

		<!--End::Section-->

	</div>
	</div>
	</div>
	<!-- end:: Content -->

<?php require '../layouts/footer.php' ?>
<<<<<<< HEAD
=======
<script src="../assets/dist/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/dist/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
>>>>>>> 7f100a06720f165973bd59112d4d68c4d75d36e9
<?php require '../layouts/foot.php' ?>
