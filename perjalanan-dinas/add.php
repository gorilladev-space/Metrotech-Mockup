<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->


<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">Aside Light</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<span class="kt-subheader__desc">#XRS-45670</span>
									<a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
										Add New
									</a>
									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="#" class="btn kt-subheader__btn-secondary">Today</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Month</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Year</a>
										<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
											<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
											<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Sep 30</span>
											<i class="flaticon2-calendar-1"></i>
										</a>
										<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
											<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
													</g>
												</svg>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Add anything or jump to:
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Order</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">Ticket</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Goal</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support Case</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v3__nav">
												<div class="kt-wizard-v3__nav-items">

													<!--doc: Replace A tag with SPAN tag to disable the step link click -->
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
                            <div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span><i class="flaticon-globe"></i></span>Enter Details <br>Setup Your Account Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span><i class="flaticon-globe"></i></span>Enter Details <br>Setup Your Account Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                            <div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span><i class="flaticon-globe"></i></span>Enter Details <br>Setup Your Account Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                            <div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span><i class="flaticon-globe"></i></span>Enter Details <br>Setup Your Account Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                            <div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span><i class="flaticon-globe"></i></span>Enter Details <br>Setup Your Account Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">

											<!--begin: Form Wizard Form-->
											<form class="kt-form" id="kt_form">

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Setup Your Current Location</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Address Line 1</label>
																<input type="text" class="form-control" name="address1" placeholder="Address Line 1" value="Address Line 1">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="form-group">
																<label>Address Line 2</label>
																<input type="text" class="form-control" name="address2" placeholder="Address Line 2" value="Address Line 2">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Postcode</label>
																		<input type="text" class="form-control" name="postcode" placeholder="Postcode" value="3000">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>City</label>
																		<input type="text" class="form-control" name="city" placeholder="City" value="Melbourne">
																		<span class="form-text text-muted">Please enter your City.</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>State</label>
																		<input type="text" class="form-control" name="state" placeholder="State" value="VIC">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Country:</label>
																		<select name="country" class="form-control">
																			<option value="">Select</option>
																			<option value="AF">Afghanistan</option>
																			<option value="AX">Åland Islands</option>
																			<option value="AL">Albania</option>
																			<option value="DZ">Algeria</option>
																			<option value="AS">American Samoa</option>
																			<option value="AD">Andorra</option>
																			<option value="AO">Angola</option>
																			<option value="AI">Anguilla</option>
																			<option value="AQ">Antarctica</option>
																			<option value="AG">Antigua and Barbuda</option>
																			<option value="AR">Argentina</option>
																			<option value="AM">Armenia</option>
																			<option value="AW">Aruba</option>
																			<option value="AU" selected>Australia</option>
																			<option value="AT">Austria</option>
																			<option value="AZ">Azerbaijan</option>
																			<option value="BS">Bahamas</option>
																			<option value="BH">Bahrain</option>
																			<option value="BD">Bangladesh</option>
																			<option value="BB">Barbados</option>
																			<option value="BY">Belarus</option>
																			<option value="BE">Belgium</option>
																			<option value="BZ">Belize</option>
																			<option value="BJ">Benin</option>
																			<option value="BM">Bermuda</option>
																			<option value="BT">Bhutan</option>
																			<option value="BO">Bolivia, Plurinational State of</option>
																			<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																			<option value="BA">Bosnia and Herzegovina</option>
																			<option value="BW">Botswana</option>
																			<option value="BV">Bouvet Island</option>
																			<option value="BR">Brazil</option>
																			<option value="IO">British Indian Ocean Territory</option>
																			<option value="BN">Brunei Darussalam</option>
																			<option value="BG">Bulgaria</option>
																			<option value="BF">Burkina Faso</option>
																			<option value="BI">Burundi</option>
																			<option value="KH">Cambodia</option>
																			<option value="CM">Cameroon</option>
																			<option value="CA">Canada</option>
																			<option value="CV">Cape Verde</option>
																			<option value="KY">Cayman Islands</option>
																			<option value="CF">Central African Republic</option>
																			<option value="TD">Chad</option>
																			<option value="CL">Chile</option>
																			<option value="CN">China</option>
																			<option value="CX">Christmas Island</option>
																			<option value="CC">Cocos (Keeling) Islands</option>
																			<option value="CO">Colombia</option>
																			<option value="KM">Comoros</option>
																			<option value="CG">Congo</option>
																			<option value="CD">Congo, the Democratic Republic of the</option>
																			<option value="CK">Cook Islands</option>
																			<option value="CR">Costa Rica</option>
																			<option value="CI">Côte d'Ivoire</option>
																			<option value="HR">Croatia</option>
																			<option value="CU">Cuba</option>
																			<option value="CW">Curaçao</option>
																			<option value="CY">Cyprus</option>
																			<option value="CZ">Czech Republic</option>
																			<option value="DK">Denmark</option>
																			<option value="DJ">Djibouti</option>
																			<option value="DM">Dominica</option>
																			<option value="DO">Dominican Republic</option>
																			<option value="EC">Ecuador</option>
																			<option value="EG">Egypt</option>
																			<option value="SV">El Salvador</option>
																			<option value="GQ">Equatorial Guinea</option>
																			<option value="ER">Eritrea</option>
																			<option value="EE">Estonia</option>
																			<option value="ET">Ethiopia</option>
																			<option value="FK">Falkland Islands (Malvinas)</option>
																			<option value="FO">Faroe Islands</option>
																			<option value="FJ">Fiji</option>
																			<option value="FI">Finland</option>
																			<option value="FR">France</option>
																			<option value="GF">French Guiana</option>
																			<option value="PF">French Polynesia</option>
																			<option value="TF">French Southern Territories</option>
																			<option value="GA">Gabon</option>
																			<option value="GM">Gambia</option>
																			<option value="GE">Georgia</option>
																			<option value="DE">Germany</option>
																			<option value="GH">Ghana</option>
																			<option value="GI">Gibraltar</option>
																			<option value="GR">Greece</option>
																			<option value="GL">Greenland</option>
																			<option value="GD">Grenada</option>
																			<option value="GP">Guadeloupe</option>
																			<option value="GU">Guam</option>
																			<option value="GT">Guatemala</option>
																			<option value="GG">Guernsey</option>
																			<option value="GN">Guinea</option>
																			<option value="GW">Guinea-Bissau</option>
																			<option value="GY">Guyana</option>
																			<option value="HT">Haiti</option>
																			<option value="HM">Heard Island and McDonald Islands</option>
																			<option value="VA">Holy See (Vatican City State)</option>
																			<option value="HN">Honduras</option>
																			<option value="HK">Hong Kong</option>
																			<option value="HU">Hungary</option>
																			<option value="IS">Iceland</option>
																			<option value="IN">India</option>
																			<option value="ID">Indonesia</option>
																			<option value="IR">Iran, Islamic Republic of</option>
																			<option value="IQ">Iraq</option>
																			<option value="IE">Ireland</option>
																			<option value="IM">Isle of Man</option>
																			<option value="IL">Israel</option>
																			<option value="IT">Italy</option>
																			<option value="JM">Jamaica</option>
																			<option value="JP">Japan</option>
																			<option value="JE">Jersey</option>
																			<option value="JO">Jordan</option>
																			<option value="KZ">Kazakhstan</option>
																			<option value="KE">Kenya</option>
																			<option value="KI">Kiribati</option>
																			<option value="KP">Korea, Democratic People's Republic of</option>
																			<option value="KR">Korea, Republic of</option>
																			<option value="KW">Kuwait</option>
																			<option value="KG">Kyrgyzstan</option>
																			<option value="LA">Lao People's Democratic Republic</option>
																			<option value="LV">Latvia</option>
																			<option value="LB">Lebanon</option>
																			<option value="LS">Lesotho</option>
																			<option value="LR">Liberia</option>
																			<option value="LY">Libya</option>
																			<option value="LI">Liechtenstein</option>
																			<option value="LT">Lithuania</option>
																			<option value="LU">Luxembourg</option>
																			<option value="MO">Macao</option>
																			<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																			<option value="MG">Madagascar</option>
																			<option value="MW">Malawi</option>
																			<option value="MY">Malaysia</option>
																			<option value="MV">Maldives</option>
																			<option value="ML">Mali</option>
																			<option value="MT">Malta</option>
																			<option value="MH">Marshall Islands</option>
																			<option value="MQ">Martinique</option>
																			<option value="MR">Mauritania</option>
																			<option value="MU">Mauritius</option>
																			<option value="YT">Mayotte</option>
																			<option value="MX">Mexico</option>
																			<option value="FM">Micronesia, Federated States of</option>
																			<option value="MD">Moldova, Republic of</option>
																			<option value="MC">Monaco</option>
																			<option value="MN">Mongolia</option>
																			<option value="ME">Montenegro</option>
																			<option value="MS">Montserrat</option>
																			<option value="MA">Morocco</option>
																			<option value="MZ">Mozambique</option>
																			<option value="MM">Myanmar</option>
																			<option value="NA">Namibia</option>
																			<option value="NR">Nauru</option>
																			<option value="NP">Nepal</option>
																			<option value="NL">Netherlands</option>
																			<option value="NC">New Caledonia</option>
																			<option value="NZ">New Zealand</option>
																			<option value="NI">Nicaragua</option>
																			<option value="NE">Niger</option>
																			<option value="NG">Nigeria</option>
																			<option value="NU">Niue</option>
																			<option value="NF">Norfolk Island</option>
																			<option value="MP">Northern Mariana Islands</option>
																			<option value="NO">Norway</option>
																			<option value="OM">Oman</option>
																			<option value="PK">Pakistan</option>
																			<option value="PW">Palau</option>
																			<option value="PS">Palestinian Territory, Occupied</option>
																			<option value="PA">Panama</option>
																			<option value="PG">Papua New Guinea</option>
																			<option value="PY">Paraguay</option>
																			<option value="PE">Peru</option>
																			<option value="PH">Philippines</option>
																			<option value="PN">Pitcairn</option>
																			<option value="PL">Poland</option>
																			<option value="PT">Portugal</option>
																			<option value="PR">Puerto Rico</option>
																			<option value="QA">Qatar</option>
																			<option value="RE">Réunion</option>
																			<option value="RO">Romania</option>
																			<option value="RU">Russian Federation</option>
																			<option value="RW">Rwanda</option>
																			<option value="BL">Saint Barthélemy</option>
																			<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																			<option value="KN">Saint Kitts and Nevis</option>
																			<option value="LC">Saint Lucia</option>
																			<option value="MF">Saint Martin (French part)</option>
																			<option value="PM">Saint Pierre and Miquelon</option>
																			<option value="VC">Saint Vincent and the Grenadines</option>
																			<option value="WS">Samoa</option>
																			<option value="SM">San Marino</option>
																			<option value="ST">Sao Tome and Principe</option>
																			<option value="SA">Saudi Arabia</option>
																			<option value="SN">Senegal</option>
																			<option value="RS">Serbia</option>
																			<option value="SC">Seychelles</option>
																			<option value="SL">Sierra Leone</option>
																			<option value="SG">Singapore</option>
																			<option value="SX">Sint Maarten (Dutch part)</option>
																			<option value="SK">Slovakia</option>
																			<option value="SI">Slovenia</option>
																			<option value="SB">Solomon Islands</option>
																			<option value="SO">Somalia</option>
																			<option value="ZA">South Africa</option>
																			<option value="GS">South Georgia and the South Sandwich Islands</option>
																			<option value="SS">South Sudan</option>
																			<option value="ES">Spain</option>
																			<option value="LK">Sri Lanka</option>
																			<option value="SD">Sudan</option>
																			<option value="SR">Suriname</option>
																			<option value="SJ">Svalbard and Jan Mayen</option>
																			<option value="SZ">Swaziland</option>
																			<option value="SE">Sweden</option>
																			<option value="CH">Switzerland</option>
																			<option value="SY">Syrian Arab Republic</option>
																			<option value="TW">Taiwan, Province of China</option>
																			<option value="TJ">Tajikistan</option>
																			<option value="TZ">Tanzania, United Republic of</option>
																			<option value="TH">Thailand</option>
																			<option value="TL">Timor-Leste</option>
																			<option value="TG">Togo</option>
																			<option value="TK">Tokelau</option>
																			<option value="TO">Tonga</option>
																			<option value="TT">Trinidad and Tobago</option>
																			<option value="TN">Tunisia</option>
																			<option value="TR">Turkey</option>
																			<option value="TM">Turkmenistan</option>
																			<option value="TC">Turks and Caicos Islands</option>
																			<option value="TV">Tuvalu</option>
																			<option value="UG">Uganda</option>
																			<option value="UA">Ukraine</option>
																			<option value="AE">United Arab Emirates</option>
																			<option value="GB">United Kingdom</option>
																			<option value="US">United States</option>
																			<option value="UM">United States Minor Outlying Islands</option>
																			<option value="UY">Uruguay</option>
																			<option value="UZ">Uzbekistan</option>
																			<option value="VU">Vanuatu</option>
																			<option value="VE">Venezuela, Bolivarian Republic of</option>
																			<option value="VN">Viet Nam</option>
																			<option value="VG">Virgin Islands, British</option>
																			<option value="VI">Virgin Islands, U.S.</option>
																			<option value="WF">Wallis and Futuna</option>
																			<option value="EH">Western Sahara</option>
																			<option value="YE">Yemen</option>
																			<option value="ZM">Zambia</option>
																			<option value="ZW">Zimbabwe</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Package Details</label>
																<input type="text" class="form-control" name="package" placeholder="Package Details" value="Complete Workstation (Monitor, Computer, Keyboard & Mouse)">
																<span class="form-text text-muted">Please enter your Pakcage Details.</span>
															</div>
															<div class="form-group">
																<label>Package Weight in KG</label>
																<input type="text" class="form-control" name="weight" placeholder="Package Weight" value="25">
																<span class="form-text text-muted">Please enter your Package Weight in KG.</span>
															</div>
															<div class="kt-wizard-v3__form-label">Package Dimensions</div>
															<div class="row">
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Width in CM</label>
																		<input type="text" class="form-control" name="width" placeholder="Package Width" value="110">
																		<span class="form-text text-muted">Please enter your Package Width in CM.</span>
																	</div>
																</div>
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Height in CM</label>
																		<input type="text" class="form-control" name="height" placeholder="Package Length" value="90">
																		<span class="form-text text-muted">Please enter your Package Width in CM.</span>
																	</div>
																</div>
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Length in CM</label>
																		<input type="text" class="form-control" name="length" placeholder="Package Length" value="150">
																		<span class="form-text text-muted">Please enter your Package Length in CM.</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Select your Services</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Delivery Type</label>
																<select name="delivery" class="form-control">
																	<option value="">Select a Service Type Option</option>
																	<option value="overnight" selected>Overnight Delivery (within 48 hours)</option>
																	<option value="express">Express Delivery (within 5 working days)</option>
																	<option value="basic">Basic Delivery (within 5 - 10 working days)</option>
																</select>
															</div>
															<div class="form-group">
																<label>Packaging Type</label>
																<select name="packaging" class="form-control">
																	<option value="">Select a Packaging Type Option</option>
																	<option value="regular" selected>Regular Packaging</option>
																	<option value="oversized">Oversized Packaging</option>
																	<option value="fragile">Fragile Packaging</option>
																	<option value="frozen">Frozen Packaging</option>
																</select>
															</div>
															<div class="form-group">
																<label>Preferred Delivery Window</label>
																<select name="preferreddelivery" class="form-control">
																	<option value="">Select a Preferred Delivery Option</option>
																	<option value="morning" selected>Morning Delivery (8:00AM - 11:00AM)</option>
																	<option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
																	<option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
																</select>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Address Line 1</label>
																<input type="text" class="form-control" name="locaddress1" placeholder="Address Line 1" value="Address Line 1">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="form-group">
																<label>Address Line 2</label>
																<input type="text" class="form-control" name="locaddress2" placeholder="Address Line 2" value="Address Line 2">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Postcode</label>
																		<input type="text" class="form-control" name="locpostcode" placeholder="Postcode" value="3072">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>City</label>
																		<input type="text" class="form-control" name="loccity" placeholder="City" value="Preston">
																		<span class="form-text text-muted">Please enter your City.</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>State</label>
																		<input type="text" class="form-control" name="locstate" placeholder="State" value="VIC">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Country:</label>
																		<select name="loccountry" class="form-control">
																			<option value="">Select</option>
																			<option value="AF">Afghanistan</option>
																			<option value="AX">Åland Islands</option>
																			<option value="AL">Albania</option>
																			<option value="DZ">Algeria</option>
																			<option value="AS">American Samoa</option>
																			<option value="AD">Andorra</option>
																			<option value="AO">Angola</option>
																			<option value="AI">Anguilla</option>
																			<option value="AQ">Antarctica</option>
																			<option value="AG">Antigua and Barbuda</option>
																			<option value="AR">Argentina</option>
																			<option value="AM">Armenia</option>
																			<option value="AW">Aruba</option>
																			<option value="AU" selected>Australia</option>
																			<option value="AT">Austria</option>
																			<option value="AZ">Azerbaijan</option>
																			<option value="BS">Bahamas</option>
																			<option value="BH">Bahrain</option>
																			<option value="BD">Bangladesh</option>
																			<option value="BB">Barbados</option>
																			<option value="BY">Belarus</option>
																			<option value="BE">Belgium</option>
																			<option value="BZ">Belize</option>
																			<option value="BJ">Benin</option>
																			<option value="BM">Bermuda</option>
																			<option value="BT">Bhutan</option>
																			<option value="BO">Bolivia, Plurinational State of</option>
																			<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																			<option value="BA">Bosnia and Herzegovina</option>
																			<option value="BW">Botswana</option>
																			<option value="BV">Bouvet Island</option>
																			<option value="BR">Brazil</option>
																			<option value="IO">British Indian Ocean Territory</option>
																			<option value="BN">Brunei Darussalam</option>
																			<option value="BG">Bulgaria</option>
																			<option value="BF">Burkina Faso</option>
																			<option value="BI">Burundi</option>
																			<option value="KH">Cambodia</option>
																			<option value="CM">Cameroon</option>
																			<option value="CA">Canada</option>
																			<option value="CV">Cape Verde</option>
																			<option value="KY">Cayman Islands</option>
																			<option value="CF">Central African Republic</option>
																			<option value="TD">Chad</option>
																			<option value="CL">Chile</option>
																			<option value="CN">China</option>
																			<option value="CX">Christmas Island</option>
																			<option value="CC">Cocos (Keeling) Islands</option>
																			<option value="CO">Colombia</option>
																			<option value="KM">Comoros</option>
																			<option value="CG">Congo</option>
																			<option value="CD">Congo, the Democratic Republic of the</option>
																			<option value="CK">Cook Islands</option>
																			<option value="CR">Costa Rica</option>
																			<option value="CI">Côte d'Ivoire</option>
																			<option value="HR">Croatia</option>
																			<option value="CU">Cuba</option>
																			<option value="CW">Curaçao</option>
																			<option value="CY">Cyprus</option>
																			<option value="CZ">Czech Republic</option>
																			<option value="DK">Denmark</option>
																			<option value="DJ">Djibouti</option>
																			<option value="DM">Dominica</option>
																			<option value="DO">Dominican Republic</option>
																			<option value="EC">Ecuador</option>
																			<option value="EG">Egypt</option>
																			<option value="SV">El Salvador</option>
																			<option value="GQ">Equatorial Guinea</option>
																			<option value="ER">Eritrea</option>
																			<option value="EE">Estonia</option>
																			<option value="ET">Ethiopia</option>
																			<option value="FK">Falkland Islands (Malvinas)</option>
																			<option value="FO">Faroe Islands</option>
																			<option value="FJ">Fiji</option>
																			<option value="FI">Finland</option>
																			<option value="FR">France</option>
																			<option value="GF">French Guiana</option>
																			<option value="PF">French Polynesia</option>
																			<option value="TF">French Southern Territories</option>
																			<option value="GA">Gabon</option>
																			<option value="GM">Gambia</option>
																			<option value="GE">Georgia</option>
																			<option value="DE">Germany</option>
																			<option value="GH">Ghana</option>
																			<option value="GI">Gibraltar</option>
																			<option value="GR">Greece</option>
																			<option value="GL">Greenland</option>
																			<option value="GD">Grenada</option>
																			<option value="GP">Guadeloupe</option>
																			<option value="GU">Guam</option>
																			<option value="GT">Guatemala</option>
																			<option value="GG">Guernsey</option>
																			<option value="GN">Guinea</option>
																			<option value="GW">Guinea-Bissau</option>
																			<option value="GY">Guyana</option>
																			<option value="HT">Haiti</option>
																			<option value="HM">Heard Island and McDonald Islands</option>
																			<option value="VA">Holy See (Vatican City State)</option>
																			<option value="HN">Honduras</option>
																			<option value="HK">Hong Kong</option>
																			<option value="HU">Hungary</option>
																			<option value="IS">Iceland</option>
																			<option value="IN">India</option>
																			<option value="ID">Indonesia</option>
																			<option value="IR">Iran, Islamic Republic of</option>
																			<option value="IQ">Iraq</option>
																			<option value="IE">Ireland</option>
																			<option value="IM">Isle of Man</option>
																			<option value="IL">Israel</option>
																			<option value="IT">Italy</option>
																			<option value="JM">Jamaica</option>
																			<option value="JP">Japan</option>
																			<option value="JE">Jersey</option>
																			<option value="JO">Jordan</option>
																			<option value="KZ">Kazakhstan</option>
																			<option value="KE">Kenya</option>
																			<option value="KI">Kiribati</option>
																			<option value="KP">Korea, Democratic People's Republic of</option>
																			<option value="KR">Korea, Republic of</option>
																			<option value="KW">Kuwait</option>
																			<option value="KG">Kyrgyzstan</option>
																			<option value="LA">Lao People's Democratic Republic</option>
																			<option value="LV">Latvia</option>
																			<option value="LB">Lebanon</option>
																			<option value="LS">Lesotho</option>
																			<option value="LR">Liberia</option>
																			<option value="LY">Libya</option>
																			<option value="LI">Liechtenstein</option>
																			<option value="LT">Lithuania</option>
																			<option value="LU">Luxembourg</option>
																			<option value="MO">Macao</option>
																			<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																			<option value="MG">Madagascar</option>
																			<option value="MW">Malawi</option>
																			<option value="MY">Malaysia</option>
																			<option value="MV">Maldives</option>
																			<option value="ML">Mali</option>
																			<option value="MT">Malta</option>
																			<option value="MH">Marshall Islands</option>
																			<option value="MQ">Martinique</option>
																			<option value="MR">Mauritania</option>
																			<option value="MU">Mauritius</option>
																			<option value="YT">Mayotte</option>
																			<option value="MX">Mexico</option>
																			<option value="FM">Micronesia, Federated States of</option>
																			<option value="MD">Moldova, Republic of</option>
																			<option value="MC">Monaco</option>
																			<option value="MN">Mongolia</option>
																			<option value="ME">Montenegro</option>
																			<option value="MS">Montserrat</option>
																			<option value="MA">Morocco</option>
																			<option value="MZ">Mozambique</option>
																			<option value="MM">Myanmar</option>
																			<option value="NA">Namibia</option>
																			<option value="NR">Nauru</option>
																			<option value="NP">Nepal</option>
																			<option value="NL">Netherlands</option>
																			<option value="NC">New Caledonia</option>
																			<option value="NZ">New Zealand</option>
																			<option value="NI">Nicaragua</option>
																			<option value="NE">Niger</option>
																			<option value="NG">Nigeria</option>
																			<option value="NU">Niue</option>
																			<option value="NF">Norfolk Island</option>
																			<option value="MP">Northern Mariana Islands</option>
																			<option value="NO">Norway</option>
																			<option value="OM">Oman</option>
																			<option value="PK">Pakistan</option>
																			<option value="PW">Palau</option>
																			<option value="PS">Palestinian Territory, Occupied</option>
																			<option value="PA">Panama</option>
																			<option value="PG">Papua New Guinea</option>
																			<option value="PY">Paraguay</option>
																			<option value="PE">Peru</option>
																			<option value="PH">Philippines</option>
																			<option value="PN">Pitcairn</option>
																			<option value="PL">Poland</option>
																			<option value="PT">Portugal</option>
																			<option value="PR">Puerto Rico</option>
																			<option value="QA">Qatar</option>
																			<option value="RE">Réunion</option>
																			<option value="RO">Romania</option>
																			<option value="RU">Russian Federation</option>
																			<option value="RW">Rwanda</option>
																			<option value="BL">Saint Barthélemy</option>
																			<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																			<option value="KN">Saint Kitts and Nevis</option>
																			<option value="LC">Saint Lucia</option>
																			<option value="MF">Saint Martin (French part)</option>
																			<option value="PM">Saint Pierre and Miquelon</option>
																			<option value="VC">Saint Vincent and the Grenadines</option>
																			<option value="WS">Samoa</option>
																			<option value="SM">San Marino</option>
																			<option value="ST">Sao Tome and Principe</option>
																			<option value="SA">Saudi Arabia</option>
																			<option value="SN">Senegal</option>
																			<option value="RS">Serbia</option>
																			<option value="SC">Seychelles</option>
																			<option value="SL">Sierra Leone</option>
																			<option value="SG">Singapore</option>
																			<option value="SX">Sint Maarten (Dutch part)</option>
																			<option value="SK">Slovakia</option>
																			<option value="SI">Slovenia</option>
																			<option value="SB">Solomon Islands</option>
																			<option value="SO">Somalia</option>
																			<option value="ZA">South Africa</option>
																			<option value="GS">South Georgia and the South Sandwich Islands</option>
																			<option value="SS">South Sudan</option>
																			<option value="ES">Spain</option>
																			<option value="LK">Sri Lanka</option>
																			<option value="SD">Sudan</option>
																			<option value="SR">Suriname</option>
																			<option value="SJ">Svalbard and Jan Mayen</option>
																			<option value="SZ">Swaziland</option>
																			<option value="SE">Sweden</option>
																			<option value="CH">Switzerland</option>
																			<option value="SY">Syrian Arab Republic</option>
																			<option value="TW">Taiwan, Province of China</option>
																			<option value="TJ">Tajikistan</option>
																			<option value="TZ">Tanzania, United Republic of</option>
																			<option value="TH">Thailand</option>
																			<option value="TL">Timor-Leste</option>
																			<option value="TG">Togo</option>
																			<option value="TK">Tokelau</option>
																			<option value="TO">Tonga</option>
																			<option value="TT">Trinidad and Tobago</option>
																			<option value="TN">Tunisia</option>
																			<option value="TR">Turkey</option>
																			<option value="TM">Turkmenistan</option>
																			<option value="TC">Turks and Caicos Islands</option>
																			<option value="TV">Tuvalu</option>
																			<option value="UG">Uganda</option>
																			<option value="UA">Ukraine</option>
																			<option value="AE">United Arab Emirates</option>
																			<option value="GB">United Kingdom</option>
																			<option value="US">United States</option>
																			<option value="UM">United States Minor Outlying Islands</option>
																			<option value="UY">Uruguay</option>
																			<option value="UZ">Uzbekistan</option>
																			<option value="VU">Vanuatu</option>
																			<option value="VE">Venezuela, Bolivarian Republic of</option>
																			<option value="VN">Viet Nam</option>
																			<option value="VG">Virgin Islands, British</option>
																			<option value="VI">Virgin Islands, U.S.</option>
																			<option value="WF">Wallis and Futuna</option>
																			<option value="EH">Western Sahara</option>
																			<option value="YE">Yemen</option>
																			<option value="ZM">Zambia</option>
																			<option value="ZW">Zimbabwe</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Review your Details and Submit</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__review">
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Current Address
																</div>
																<div class="kt-wizard-v3__review-content">
																	Address Line 1<br />
																	Address Line 2<br />
																	Melbourne 3000, VIC, Australia
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Details
																</div>
																<div class="kt-wizard-v3__review-content">
																	Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)<br />
																	Weight: 25kg<br />
																	Dimensions: 110cm (w) x 90cm (h) x 150cm (L)
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Service Type
																</div>
																<div class="kt-wizard-v3__review-content">
																	Overnight Delivery with Regular Packaging<br />
																	Preferred Morning (8:00AM - 11:00AM) Delivery
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Address
																</div>
																<div class="kt-wizard-v3__review-content">
																	Address Line 1<br />
																	Address Line 2<br />
																	Preston 3072, VIC, Australia
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 5-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Previous
													</button>
													<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
														Submit
													</button>
													<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Next Step
													</button>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-3.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
