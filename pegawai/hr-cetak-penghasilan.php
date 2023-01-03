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
<link href="../assets/dist/main/main.css" rel="stylesheet" type="text/css" />
<?php require 'layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Slip Gaji Anda
									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode : Januari 2023 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
										</form>
									</div>
								</div>
<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="pegawai-slip-gaji.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
			</div>
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="fa fa-print"></i> Export Data</button>
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
				<!--begin::Nav-->
				<ul class="kt-nav">
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-file-pdf"></i>
							<span class="kt-nav__link-text">PDF</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-print"></i>
							<span class="kt-nav__link-text">Cetak</span>
						</a>
					</li>
				</ul>
				<!--end::Nav-->
			</div>
		</div>

							</div>
						</div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:600px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px;">
										<tbody>
											<tr>
												<td colspan="3">
													<div align="center">
														<span style="font-family: Roboto; font-size: 12px; margin-bottom:3rem">
															<b>SLIP GAJI PEGAWAI</span>
														<div class="bordered"></div>
														<div class="bordered"></div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

<div style="width:600px; margin-left:auto;margin-right:auto">
									<div class="row">
										<div class="col-lg-6">
											<table class="upah w-100">
												<tr>
													<td colspan="3" height="20px"></td>
												</tr>
												<tr>
													<td width="60">Nama</td>
													<td width="1">:</td>
													<td width="39">Nursiah S.Kom</td>
												</tr>
												<tr>
													<td width="60">Nik</td>
													<td width="1">:</td>
													<td width="39">9130012</td>
												</tr>
												<tr>
													<td width="60">Jabatan</td>
													<td width="1">:</td>
													<td width="39">Front End Developer</td>
												</tr>
												<tr>
													<td width="60">Divisi</td>
													<td width="1">:</td>
													<td width="39">Information Technology</td>
												</tr>
											</table>
											<table class="upah w-100 mt-5">
												<thead>
													<tr style="border-top:1px solid #000">
														<th colspan="4" style="padding:0.1rem"></th>
													</tr>
													<tr style="border-top:2px solid #000;border-bottom:2px solid #000;background:#ffffcc">
														<th height="36" colspan="4">PENDAPATAN</th>
													</tr>
													<tr style="border-bottom:1px solid #000">
														<th colspan="4" style="padding:0.1rem"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="702"><strong>Gaji Pokok</strong></td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">2.941.270,-</td>
													</tr>
													<tr>
													  <td colspan="4"><strong>Tunjangan</strong></td>
												  </tr>
													<tr>
														<td width="702">Jabatan</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">75.000,-</td>
													</tr>
													<tr>
														<td width="702">Keluarga</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">675.000,-</td>
													</tr>
													<tr>
														<td width="702">Komunikasi & Data</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">200.000,-</td>
													</tr>
													<tr>
														<td width="702">Konsumsi & Transport</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">700.000,-</td>
													</tr>
													<tr>
														<td width="702">Kinerja</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">2.500.000,-</td>
													</tr>
													<tr>
														<td width="702">THR</td>
														<td width="16" align="center">:</td>
													  <td width="31">Rp.</td>
														<td width="138" align="center">-</td>
													</tr>
													<tr>
														<td width="702">Lembur</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">1.000.000,-</td>
													</tr>
													<tr>
														<td colspan="4"><strong>Lainnya</strong></td>
												    </tr>
													<tr>
														<td width="702">BPJS Kesehatan 4%</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">127.663,-</td>
													</tr>
													<tr>
														<td width="702">JHT 3,7%</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">108.827,-</td>
													</tr>
													<tr>
														<td width="702">JKK & JKM</td>
														<td width="16" align="center">:</td>
														<td width="31">Rp.</td>
														<td width="138" align="right">15.883,-</td>
													</tr>
													<tr>
														<td colspan="4"></td>
													</tr>
												</tbody>
												<tfoot>
														<tr style="border-top:1px solid #000">
															<th colspan="4" style="padding:0.1rem"></th>
														</tr>
														<tr style="border-top:2px solid #000;border-bottom:2px solid #000;background:#ffffcc">
															<th width="702" height="36">TOTAL PENDAPATAN</th>
															<th width="16" align="center">:</th>
															<th width="31" align="center">Rp</th>
															<th width="138" align="right">8.343.643,-</th>
														
												  </tr>
														<tr style="border-bottom:1px solid #000">
															<th colspan="4" style="padding:0.1rem"></th>
														</tr>
														<tr style="border-top:2px solid #000;border-bottom:2px solid #000;background:#ccecff">
															<th width="702" height="36">TOTAL PENERIMAAN</th>
															<th width="16" align="center">:</th>
															<th width="31" align="center">Rp</th>
															<th width="138" align="right">4.138.643,-</th>
														</tr>
														<tr style="border-bottom:1px solid #000">
															<th height="16" colspan="4" style="padding:0.1rem"></th>
														</tr>
												</tfoot>
											</table>
										</div>
										<div class="col-lg-6">
											<table class="upah w-100">
												<tr>
													<td colspan="3" height="20px"></td>
												</tr>
												<tr>
													<td width="60">Periode</td>
													<td width="1">:</td>
													<td width="39">Januari 2020</td>
												</tr>
												<tr>
													<td width="60">Status</td>
													<td width="1">:</td>
													<td width="39">Pegawai Tetap</td>
												</tr>
												<tr>
													<td width="60">Acc Bank</td>
													<td width="1">:</td>
													<td width="39">Mandiri</td>
												</tr>
												<tr>
													<td width="60">Acc Number</td>
													<td width="1">:</td>
													<td width="39">1740001730332</td>
												</tr>
											</table>
											<table class="upah w-100 mt-5">
												<thead>
													<tr style="border-top:1px solid #000">
														<th colspan="4" style="padding:0.1rem"></th>
													</tr>
													<tr style="border-top:2px solid #000;border-bottom:2px solid #000;background:#ffffcc">
														<th height="36" colspan="4">POTONGAN</th>
													</tr>
													<tr style="border-bottom:1px solid #000">
														<th colspan="4" style="padding:0.1rem"></th>
													</tr>
												</thed>
												<tbody>
													<tr>
														<td width="60">Keterlambatan</td>
														<td width="1">:</td>
														<td width="31">Rp</td>
														<td width="39" align="right">&nbsp;</td>
													</tr>
													<tr>
														<td>Absensi</td>
														<td>:</td>
														<td width="31">Rp </td>
														<td align="right">&nbsp;</td>
													</tr>
													<tr>
														<td>Pinjaman</td>
														<td>:</td>
														<td width="31">Rp </td>
														<td align="right">-</td>
													</tr>
													<tr>
														<td>BPJS Kesehatan 4% ded</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">127.663</td>
													</tr>
													<tr>
														<td>BPJS Kesehatan 1%</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">31.916</td>
													</tr>
													<tr>
														<td>JHT 3,7% ded</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">108.827</td>
													</tr>
													<tr>
														<td>JKK & JKM ded</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">15.883</td>
													</tr>
													<tr>
														<td>JHT 2%</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">58.825</td>
													</tr>
													<tr>
														<td>PPh 21 Terutang</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td align="right">-</td>
													</tr>
													<tr>
														<td>Iuran Wajib</td>
														<td>:</td>
														<td width="31">Rp.</td>
														<td width="38" align="right">100.000</td>
													</tr>
													<tr>
														<td colspan="4" style="padding-top:6.5rem"></td>
													</tr>
												</tbody>
												<tfoot>
														<tr style="border-top:1px solid #000">
															<th colspan="4" style="padding:0.1rem"></th>
														</tr>
														<tr style="border-top:2px solid #000;border-bottom:2px solid #000;background:#ffffcc">
															<th height="36" align="center">Total Potongan</th>
															<th width="16">:</th>
															<th width="31" align="left">Rp.</th>
															<th align="right">443.114</th>
														</tr>
														<tr style="border-bottom:1px solid #000">
															<th colspan="4" style="padding:0.1rem"></th>
														</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<table class="table table-bordered mt-3 text-center">
										<thead>
										<tr>
											<th style="padding:0.5rem 0.5rem !important;">Dibayarkan Oleh</th>
											<th style="padding:0.5rem 0.5rem !important;">Diketahui Oleh</th>
											<th style="padding:0.5rem 0.5rem !important;">Diterima Oleh</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td height="100px"></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td style="padding:0.5rem 0.5rem !important;">Yuni Saslia, SE</td>
											<td style="padding:0.5rem 0.5rem !important;">Sri Widya Ningsih, SE</td>
											<td style="padding:0.5rem 0.5rem !important;">Nursiah , S.Kom</td>
										</tr>
										<tr>
											<td style="padding:0.5rem 0.5rem !important;">Bendahara Pengeluaran</td>
											<td style="padding:0.5rem 0.5rem !important;">Finance Manager</td>
											<td style="padding:0.5rem 0.5rem !important;">Front End Developer</td>
										</tr>
									</tbody>
									</table>
								</div>

									<img src="../assets/img/footer.png" style="width:600px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px"/>
</div>
								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
						</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
