<?php require 'layouts-index/head.php' ?>
<!--begin:: Style tambahan -->

<!--end:: Style tambahan -->
<?php require 'layouts-index/header.php' ?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Section-->
							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-xl">
										<div class="col-xl-4">

											<!--begin:: Widgets/Daily Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header kt-margin-b-30">
														<h3 class="kt-widget14__title">
															Daily Sales
														</h3>
														<span class="kt-widget14__desc">
															Check out each collumn for more details
														</span>
													</div>
													<div class="kt-widget14__chart" style="height:120px;">
														<canvas id="kt_chart_daily_sales"></canvas>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Daily Sales-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Profit Share-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Profit Share
														</h3>
														<span class="kt-widget14__desc">
															Profit Share between customers
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div class="kt-widget14__stat">45</div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">37% Sport Tickets</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">47% Business Events</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">19% Others</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Profit Share-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Revenue Change-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Revenue Change
														</h3>
														<span class="kt-widget14__desc">
															Revenue change breakdown by cities
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">+10% New York</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">-7% London</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">+20% California</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Revenue Change-->
										</div>
									</div>
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-8">

									<!--begin:: Widgets/Application Sales-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Application Sales
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
															Last Month
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
															All Time
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget11_tab1_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style=" width: 1%;"></td>
																		<td style=" width: 20%;">Application</td>
																		<td style=" width: 10%;">Sales</td>
																		<td style=" width: 20%;">Change</td>
																		<td style=" width: 10%;">Status</td>
																		<td style=" width: 10%;" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Vertex 2.0</span>
																			<span class="kt-widget11__sub">Vertex To By Again</span>
																		</td>
																		<td>19,200</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Metronic</span>
																			<span class="kt-widget11__sub">Powerful Admin Theme</span>
																		</td>
																		<td>24,310</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Apex</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Cascades</span>
																			<span class="kt-widget11__sub">Design Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>
												<div class="tab-pane" id="kt_widget11_tab2_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style=" width: 1%;"></td>
																		<td style=" width: 20%;">Application</td>
																		<td style=" width: 10%;">Sales</td>
																		<td style=" width: 20%;">Change</td>
																		<td style=" width: 10%;">Status</td>
																		<td style=" width: 10%;" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Loop</span>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																		<td class="kt-align-right kt-font-brand">$34,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Selto</span>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
																		<td class="kt-align-right kt-font-brand">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Jippo</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
																		<td class="kt-align-right kt-font-brand">$67,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Verto</span>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
																		<td class="kt-align-right kt-font-brand">$18,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Application Sales-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Latest Updates-->
									<div class="kt-portlet kt-portlet--height-fluid ">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Updates
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Today
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>

										<!--full height portlet body-->
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-graphic  kt-font-brand"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Metronic Admin Theme
														</a>
														<span class="kt-widget4__number kt-font-brand">+500</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-analytics-2  kt-font-success"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Green Maker Team
														</a>
														<span class="kt-widget4__number kt-font-success">-64</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-drop  kt-font-danger"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Make Apex Development
														</a>
														<span class="kt-widget4__number kt-font-danger">+1080</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															A Programming Language
														</a>
														<span class="kt-widget4__number kt-font-warning">+19</span>
													</div>
												</div>
												<div class="kt-widget4__chart kt-margin-t-15">
													<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Latest Updates-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-4">

									<!--begin:: Widgets/Trends-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Trends
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
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
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__chart">
													<canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
												</div>
												<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="assets/media/client-logos/logo3.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Phyton
															</a>
															<span class="kt-widget4__sub">
																A Programming Language
															</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$17</span>
														</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="assets/media/client-logos/logo1.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																FlyThemes
															</a>
															<span class="kt-widget4__sub">
																A Let's Fly Fast Again Language
															</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$300</span>
														</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="assets/media/client-logos/logo2.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																AirApp
															</a>
															<span class="kt-widget4__sub">
																Awesome App For Project Management
															</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$6700</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Trends-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Sales Stats-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Sales Stats
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Finance</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																	<span class="kt-nav__link-text">Statistics</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Events</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__section">
																<span class="kt-nav__section-text">Customers</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Notifications</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-file-1"></i>
																	<span class="kt-nav__link-text">Files</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::Widget 6-->
											<div class="kt-widget15">
												<div class="kt-widget15__chart">
													<canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
												</div>
												<div class="kt-widget15__items kt-margin-t-40">
													<div class="row">
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	63%
																</span>
																<span class="kt-widget15__text">
																	Sales Grow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-widget15__chart-progress--sm">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	54%
																</span>
																<span class="kt-widget15__text">
																	Orders Grow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	41%
																</span>
																<span class="kt-widget15__text">
																	Profit Grow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	79%
																</span>
																<span class="kt-widget15__text">
																	Member Grow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="kt-widget15__desc">
																* lorem ipsum dolor sit amet consectetuer sediat elit
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget 6-->
										</div>
									</div>

									<!--end:: Widgets/Sales Stats-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Top Locations-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Top Locations
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Finance</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																	<span class="kt-nav__link-text">Statistics</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Events</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__section">
																<span class="kt-nav__section-text">Customers</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Notifications</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-file-1"></i>
																	<span class="kt-nav__link-text">Files</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget15">
												<div class="kt-widget15__map">
													<div id="kt_chart_latest_trends_map" style="height:320px;"></div>
												</div>
												<div class="kt-widget15__items kt-margin-t-30">
													<div class="row">
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	63%
																</span>
																<span class="kt-widget15__text">
																	London
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	54%
																</span>
																<span class="kt-widget15__text">
																	Glasgow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
													</div>
													<div class="row">
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	41%
																</span>
																<span class="kt-widget15__text">
																	Dublin
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
																	79%
																</span>
																<span class="kt-widget15__text">
																	Edinburgh
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>

																<!--end::widget item-->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Top Locations-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Support Cases-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Support Cases <small>premium clients</small>
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Show All
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget16">
												<div class="kt-widget16__items">
													<div class="kt-widget16__item">
														<span class="kt-widget16__sceduled">
															Type
														</span>
														<span class="kt-widget16__amount">
															Amount
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															EPS
														</span>
														<span class="kt-widget16__price  kt-font-brand">
															+78,05%
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															PDO
														</span>
														<span class="kt-widget16__price  kt-font-success">
															21,700
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															OPL Status
														</span>
														<span class="kt-widget16__price  kt-font-danger">
															Negative
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Priority
														</span>
														<span class="kt-widget16__price  kt-font-brand">
															+500,200
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Net Prifit
														</span>
														<span class="kt-widget16__price  kt-font-warning">
															$18,540,60
														</span>
													</div>
												</div>
												<div class="kt-widget16__stats">
													<div class="kt-widget16__visual">
														<div id="kt_chart_support_tickets" style="height: 160px; width: 160px;">
														</div>
													</div>
													<div class="kt-widget16__legends">
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-info"></span>
															<span class="kt-widget16__stat">20% Margins</span>
														</div>
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-success"></span>
															<span class="kt-widget16__stat">80% Profit</span>
														</div>
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-danger"></span>
															<span class="kt-widget16__stat">10% Lost</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Support Stats-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Support Requests-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Support Requests <small>for agents</small>
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-success btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Export
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget16">
												<div class="kt-widget16__items">
													<div class="kt-widget16__item">
														<span class="kt-widget16__sceduled">
															Type
														</span>
														<span class="kt-widget16__amount">
															Amount
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															EPS
														</span>
														<span class="kt-widget16__price  kt-font-brand">
															+78,05%
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															PDO
														</span>
														<span class="kt-widget16__price  kt-font-success">
															21,700
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															OPL Status
														</span>
														<span class="kt-widget16__price  kt-font-danger">
															Negative
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Priority
														</span>
														<span class="kt-widget16__price  kt-font-brand">
															+500,200
														</span>
													</div>
													<div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Net Prifit
														</span>
														<span class="kt-widget16__price  kt-font-brand">
															$18,540,60
														</span>
													</div>
												</div>
												<div class="kt-widget16__stats">
													<div class="kt-widget16__visual">
														<div class="kt-widget16__chart">
															<div class="kt-widget16__stat">32</div>
															<canvas id="kt_chart_support_requests" style="height: 140px; width: 140px;"></canvas>
														</div>
													</div>
													<div class="kt-widget16__legends">
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-success"></span>
															<span class="kt-widget16__stat">20% Margins</span>
														</div>
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-brand"></span>
															<span class="kt-widget16__stat">80% Profit</span>
														</div>
														<div class="kt-widget16__legend">
															<span class="kt-widget16__bullet kt-bg-danger"></span>
															<span class="kt-widget16__stat">10% Lost</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Support Requests-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-4">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Activity
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
													Export
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__section kt-nav__section--first">
															<span class="kt-nav__section-text">Finance</span>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																<span class="kt-nav__link-text">Statistics</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																<span class="kt-nav__link-text">Events</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																<span class="kt-nav__link-text">Reports</span>
															</a>
														</li>
														<li class="kt-nav__section">
															<span class="kt-nav__section-text">Customers</span>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																<span class="kt-nav__link-text">Notifications</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-file-1"></i>
																<span class="kt-nav__link-text">Files</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
													<div class="kt-widget17__chart" style="height:320px;">
														<canvas id="kt_chart_activities"></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg> </span>
															<span class="kt-widget17__subtitle">
																Delivered
															</span>
															<span class="kt-widget17__desc">
																15 New Paskages
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg> </span>
															<span class="kt-widget17__subtitle">
																Ordered
															</span>
															<span class="kt-widget17__desc">
																72 New Items
															</span>
														</div>
													</div>
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg> </span>
															<span class="kt-widget17__subtitle">
																Reported
															</span>
															<span class="kt-widget17__desc">
																72 Support Cases
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
																		<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
																	</g>
																</svg> </span>
															<span class="kt-widget17__subtitle">
																Arrived
															</span>
															<span class="kt-widget17__desc">
																34 Upgraded Boxes
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Inbound Bandwidth-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Inbound Bandwidth
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-success btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
													Export
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
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget20">
												<div class="kt-widget20__content kt-portlet__space-x">
													<span class="kt-widget20__number kt-font-brand">670+</span>
													<span class="kt-widget20__desc">Successful transactions</span>
												</div>
												<div class="kt-widget20__chart" style="height:130px;">
													<canvas id="kt_chart_bandwidth1"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Inbound Bandwidth-->
									<div class="kt-space-20"></div>

									<!--begin:: Widgets/Outbound Bandwidth-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Outbound Bandwidth
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-warning btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
													Download
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
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget20">
												<div class="kt-widget20__content kt-portlet__space-x">
													<span class="kt-widget20__number kt-font-danger">1340+</span>
													<span class="kt-widget20__desc">Completed orders</span>
												</div>
												<div class="kt-widget20__chart" style="height:130px;">
													<canvas id="kt_chart_bandwidth2"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Outbound Bandwidth-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Top Products-->
									<div class="kt-portlet kt-portlet--head-noborder kt-portlet--height-fluid ">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Top Products
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													All
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>

										<!--full height portlet body-->
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
													<div class="kt-widget4__item">
														<div class="kt-widget4__pic kt-widget4__pic--logo">
															<img src="assets/media/client-logos/logo3.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Phyton
															</a>
															<p class="kt-widget4__text">
																A Programming Language
															</p>
														</div>
														<span class="kt-widget4__number kt-font-brand kt-font-bold">+$17</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__pic kt-widget4__pic--logo">
															<img src="assets/media/client-logos/logo1.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																FlyThemes
															</a>
															<p class="kt-widget4__text">
																A Let's Fly Fast Again Language
															</p>
														</div>
														<span class="kt-widget4__number kt-font-success kt-font-bold">+$300</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__pic kt-widget4__pic--logo">
															<img src="assets/media/client-logos/logo4.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																Starbucks
															</a>
															<p class="kt-widget4__text">
																Good Coffee & Snacks
															</p>
														</div>
														<span class="kt-widget4__number kt-font-danger kt-font-bold">+$300</span>
													</div>
												</div>
												<div class="kt-widget4__chart kt-margin-t-15">
													<canvas id="kt_chart_trends_stats_2" style="height: 275px;"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Top Products-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Adwords Stats-->
									<div class="kt-portlet kt-portlet--head-noborder kt-portlet--fit kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													AdWords Stats
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Export
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget21">
												<div class="kt-widget21__content kt-portlet__space-x">
													<div class="kt-widget21__item">
														<div href="#" class="kt-widget21__icon kt-bg-fill-brand">
															<i class="flaticon2-bell-alarm-symbol"></i>
														</div>
														<div class="kt-widget21__info">
															<span class="kt-widget21__title">
																Sales
															</span>
															<span class="kt-widget21__sub">
																IPO, Margins, Transactions
															</span>
														</div>
													</div>
													<div class="kt-widget21__item">
														<div href="#" class="kt-widget21__icon kt-bg-fill-success">
															<i class="flaticon2-pie-chart-4"></i>
														</div>
														<div class="kt-widget21__info">
															<span class="kt-widget21__title">
																Profit
															</span>
															<span class="kt-widget21__sub">
																Expenses, Loses, Profits
															</span>
														</div>
													</div>
												</div>
												<div class="kt-widget21__chart">
													<canvas id="kt_chart_adwords_stats" style="height:310px;"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Adwords Stats-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Quick Stats-->
									<div class="row row-full-height">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">570</span>
															<span class="kt-widget26__desc">Total Sales</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_1"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">640</span>
															<span class="kt-widget26__desc">Completed Transactions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_2"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">234+</span>
															<span class="kt-widget26__desc">Transactions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_3"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">4.4M$</span>
															<span class="kt-widget26__desc">Paid Comissions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_4"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Quick Stats-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Finance Summary-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Finance Summary
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Finance</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																	<span class="kt-nav__link-text">Statistics</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Events</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__section">
																<span class="kt-nav__section-text">Customers</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Notifications</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-file-1"></i>
																	<span class="kt-nav__link-text">Files</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget12">
												<div class="kt-widget12__content kt-portlet__space-x kt-portlet__space-y">
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Annual Companies Taxes EMS</span>
															<span class="kt-widget12__value">$500,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Next Tax Review Date</span>
															<span class="kt-widget12__value">July 24,2017</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Avarage Product Price</span>
															<span class="kt-widget12__value">$60,70</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Satisfication Rate</span>
															<div class="kt-widget12__progress">
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<span class="kt-widget12__stat">
																	63%
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget12__chart" style="height:290px;">
													<canvas id="kt_chart_finance_summary"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Finance Summary-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Order Statistics-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Order Statistics
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Export
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																	</g>
																</svg> </span>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget12">
												<div class="kt-widget12__content">
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Annual Taxes EMS</span>
															<span class="kt-widget12__value">$400,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Finance Review Date</span>
															<span class="kt-widget12__value">July 24,2019</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Avarage Revenue</span>
															<span class="kt-widget12__value">$60M</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Revenue Margin</span>
															<div class="kt-widget12__progress">
																<div class="progress kt-progress--sm">
																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<span class="kt-widget12__stat">
																	40%
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget12__chart" style="height:250px;">
													<canvas id="kt_chart_order_statistics"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Order Statistics-->
								</div>
							</div>

							<!--End::Section-->
						</div>

<?php require 'layouts-index/footer.php' ?>
<!--begin:: Script tambahan -->
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
<!--end:: Script tambahan -->
<?php require 'layouts-index/foot.php' ?>
