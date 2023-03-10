<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
          <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
              Project Administrasi
            </h3>
            <div class="kt-subheader__breadcrumbs">
                      <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                      <span class="kt-subheader__breadcrumbs-separator"></span>
                      <a href="" class="kt-subheader__breadcrumbs-link">
                          Nama Menu
                      </a>
                      <span class="kt-subheader__breadcrumbs-separator"></span>
                      <a href="" class="kt-subheader__breadcrumbs-link">
                          Nama Submenu
                      </a>
                  </div>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
              <div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span> Selected:</div>
              <div class="btn-toolbar kt-margin-l-20">
                <div class="dropdown" id="kt_subheader_group_actions_status_change">
                  <button type="button" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                    Update Status
                  </button>
                  <div class="dropdown-menu">
                    <ul class="kt-nav">
                      <li class="kt-nav__section kt-nav__section--first">
                        <span class="kt-nav__section-text">Change status to:</span>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
                  Fetch Selected
                </button>
                <button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
                  Delete All
                </button>
              </div>
            </div>
          </div>
          <div class="kt-subheader__toolbar">
            <a href="#" class="">
            </a>
              <a href="custom/apps/user/add-user.html" class="btn btn-bold">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"/>
                  <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                  <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
              </g>
          </svg>
          </a>
            <a href="custom/apps/user/add-user.html" class="btn btn-label-brand btn-bold">
              Add Project </a>
            <div class="kt-subheader__wrapper">
              <div class="dropdown dropdown-inline" data-toggle="kt-tooltip-" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24" />
                      <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                    </g>
                  </svg>

                  <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                  <!--begin::Nav-->
                  <ul class="kt-nav">
                    <li class="kt-nav__head">
                      Add New:
                      <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                        <span class="kt-nav__link-text">Orders</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                        <span class="kt-nav__link-text">Members</span>
                        <span class="kt-nav__link-badge">
                          <span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>
                        </span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                        <span class="kt-nav__link-text">Reports</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-link"></i>
                        <span class="kt-nav__link-text">Finance</span>
                      </a>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__foot">
                      <a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>
                      <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                    </li>
                  </ul>

                  <!--end::Nav-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Projects
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											54 Total </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
											<div class="kt-input-icon kt-input-icon--right kt-subheader__search">
												<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>

														<!--<i class="flaticon2-search-1"></i>-->
													</span>
												</span>
											</div>
										</form>
									</div>
									<div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
										<div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span> Selected:</div>
										<div class="btn-toolbar kt-margin-l-20">
											<div class="dropdown" id="kt_subheader_group_actions_status_change">
												<button type="button" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Update Status
												</button>
												<div class="dropdown-menu">
													<ul class="kt-nav">
														<li class="kt-nav__section kt-nav__section--first">
															<span class="kt-nav__section-text">Change status to:</span>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
												Fetch Selected
											</button>
											<button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
												Delete All
											</button>
										</div>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									
										<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>
									<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="project-add.php" class="btn btn-label-info btn-sm">
												<i class="fa fa-file-alt"></i> Buat Project</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
										</div>
										</div>
										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Penawaran</div>
											
											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
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
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Administrasi</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
								

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--warning">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Pelaksanaan</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--info">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Proses Pembayaran</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Selesai</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Penawaran</div>
											
											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
								

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--warning">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Pelaksanaan</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--info">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Proses Pembayaran</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
								<div class="col-xl-3">

									<!--begin:: Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
										
											<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Selesai</div>

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--project-1">
												<div class="kt-widget__head d-flex">
													<div class="kt-widget__label">
														<div class="kt-widget__media kt-widget__media--m">
															<span class="kt-media kt-media--md kt-media--circle kt-hidden-">
																<img src="../assets/media/project-logos/3.png" alt="image">
															</span>
															<span class="kt-media kt-media--md kt-media--circle kt-hidden">
																<img src="../assets/media/users/100_12.jpg" alt="image">
															</span>
														</div>
														<div class="kt-widget__info kt-padding-0 kt-margin-l-15">
															<a href="#" class="kt-widget__title">
																Epass Management System
															</a>
															<span class="kt-widget__desc">
																Cabang Ambon - Slamet Riyadi
															</span>
														</div>
													</div>
													<div class="kt-widget__toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Type</strong></span>
														<div class="kt-widget__label kt-margin-l-25">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">Tender</span>
															</div>
													</div>
												
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel kt-margin-t-15"><strong>Penawaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-t-15 kt-margin-l-30">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
															</div>
															<span class="kt-widget__stat">
																40%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pelaksanaan</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
															</div>
															<span class="kt-widget__stat">
																58%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Pembayaran</strong></span>
														<div class="kt-widget__progress d-flex align-items-center flex-fill kt-margin-l-20">
															<div class="progress" style="height: 5px;width: 100%;">
																<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<span class="kt-widget__stat">
																75%
															</span>
														</div>
													</div>
													<div class="kt-widget__container">
														<span class="kt-widget__subtitel"><strong>Project Team</strong></span>
														<div class="kt-widget__details">
																<div class="kt-media-group kt-margin-l-15 kt-widget__data">
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																	<img src="../assets/media/users/100_7.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																	<img src="../assets/media/users/100_3.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																	<img src="../assets/media/users/100_2.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																	<img src="../assets/media/users/100_13.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<img src="../assets/media/users/100_4.jpg" alt="image">
																</a>
																<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																	<span>+3</span>
																</a>
															</div>
														</div>
													</div>
													<div class="kt-widget__stats ">
														<div class="kt-widget__item d-flex align-items-center kt-margin-r-10">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10">
																Mulai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
															</div>
														</div>
														<div class="kt-widget__item d-flex align-items-center">
															<span class="kt-widget__date kt-padding-0 kt-margin-r-10 ">
																Estimasi Selesai
															</span>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
															</div>
														</div>

													</div>
													
												</div>
												<div class="kt-widget__footer">
													<div class="kt-widget__wrapper">
														<div class="kt-widget__section">
															<div class="kt-widget__blog">
																<i class="flaticon2-list-1"></i>
																<a href="#" class="kt-widget__value kt-font-brand">56 dari 100 Tasks</a>
															</div>
															<div class="kt-widget__blog">
																
															</div>
														</div>
														<div class="kt-widget__section">
															<a href="project-detail.php"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Project</button></a>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									

									<!--end:: Portlet-->
								</div>
							</div>


							<!--End::Section-->
							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">

									<!--begin:: Components/Pagination/Default-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">

											<!--begin: Pagination-->
											<div class="kt-pagination kt-pagination--brand">
												<ul class="kt-pagination__links">
													<li class="kt-pagination__link--first">
														<a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
													</li>
													<li class="kt-pagination__link--next">
														<a href="#"><i class="fa fa-angle-left kt-font-brand"></i></a>
													</li>
													<li>
														<a href="#">...</a>
													</li>
													<li>
														<a href="#">29</a>
													</li>
													<li>
														<a href="#">30</a>
													</li>
													<li class="kt-pagination__link--active">
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
														<a href="#"><i class="fa fa-angle-right kt-font-brand"></i></a>
													</li>
													<li class="kt-pagination__link--last">
														<a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
													</li>
												</ul>
												<div class="kt-pagination__toolbar">
													<select class="form-control kt-font-brand" style="width: 60px">
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													<span class="pagination__desc">
														Displaying 10 of 230 records
													</span>
												</div>
											</div>

											<!--end: Pagination-->
										</div>
									</div>

									<!--end:: Components/Pagination/Default-->
								</div>
							</div>

							<!--End::Section-->

						</div>

						<!-- end:: Content -->
					</div>
                
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
