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
											Penilaian Kinerja
									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Viana Lamuda - Periode : Januari 2023 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
								<div class="kt-subheader__toolbar">
								<a href="#" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div>&nbsp;</div>
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

							<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
															<div class="kt-wizard-v4__form">
										<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<div>&nbsp;</div>
						<table width="650" align="center" cellspacing="1" id="kt_table_1">
										<tbody>
											<tr>
											  <td width="10%" rowspan="5" style="text-align:center"><img src="../assets/media/users/100_16.jpg" alt="image"></td>
											  <td width="2%" rowspan="5" style="text-align:left">&nbsp;</td>
											  <td width="17%" style="text-align:left">Nama Pegawai</td>
											  <td width="1%" nowrap="nowrap" style="text-align:center">:</td>
											  <td nowrap="nowrap" style="text-align:left">Sri Suhartini, SE</td>
										  </tr>
											<tr>
											  <td id="kt_table_14" style="text-align:left">NIP</td>
											  <td nowrap="nowrap" style="text-align:center">:</td>
											  <td nowrap="nowrap" style="text-align:left">238 004 032</td>
										  </tr>
											<tr>
											  <td id="kt_table_12" style="text-align:left">Jabatan</td>
											  <td nowrap="nowrap" style="text-align:center">:</td>
											  <td nowrap="nowrap" style="text-align:left">Kepala Seksi Administrasi Kepegawaian</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Kantor</td>
											  <td nowrap="nowrap" style="text-align:center">:</td>
											  <td nowrap="nowrap" style="text-align:left">Pusat</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Periode Penilaian</td>
											  <td nowrap="nowrap" style="text-align:center">:</td>
											  <td nowrap="nowrap" style="text-align:left">1/12/2022 - 31/12/2022</td>
										  </tr>

										</tbody>
									</table>
									<div>&nbsp;</div>
						<table width="650" align="center" cellspacing="2" class="table-bordered table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="15%" colspan="2" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">ELEMENT INDIKATOR PENILAIAN</th>
											  <th width="4%" colspan="2" bgcolor="#f7fcff">RENTANG SKOR</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">NILAI<br>HASIL</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">% SKOR</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">ATRIBUT PENGUKUR</th>
											  <th width="2%" bgcolor="#f7fcff"><span style="text-align:left">SKOR</span></th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td height="30" colspan="6" bgcolor="#feffed" id="kt_table_1" style="text-align:left">Tingkat Kehadiran</td>
										  </tr>
											<tr>
											  <td width="3%" rowspan="4" id="kt_table_1" style="text-align:center">1</td>
											  <td rowspan="4" nowrap="nowrap" style="text-align:left">Jumlah Kehadiran</td>
											  <td style="text-align:center" nowrap>&gt;90%</td>
											  <td style="text-align:center" nowrap>3</td>
											  <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
										  </tr>
											<tr>
												<td style="text-align:center" nowrap>70% - 90%</td>
												<td style="text-align:center" nowrap>2</td>
										  </tr>
										  <tr>
												<td style="text-align:center" nowrap>50% - 69%</td>
												<td style="text-align: center" nowrap>1</td>
										  </tr>
										  <tr>
										    <td style="text-align:center" nowrap>&lt;50%</td>
										    <td style="text-align:center" nowrap>0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_6" style="text-align:center">2</td>
										    <td rowspan="4" nowrap style="text-align:left">Jumlah Keterlambatan</td>
										    <td nowrap="nowrap" style="text-align:center">&lt;15%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										   <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">15% - 30%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">31% - 50%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
												<td nowrap="nowrap" style="text-align:center">&gt;50%</td>
												<td nowrap="nowrap" style="text-align:center">0</td>
										  </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_13" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:left">Meninggalkan Tugas Selama Jam Kerja Tanpa Ijin</td>
										    <td style="text-align:center" nowrap>Tidak Pernah</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Kadang - Kadang</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Seringkali</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Sangat Sering</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_9" style="text-align:center">4</td>
										    <td rowspan="4" nowrap style="text-align:left">Tidak Mengikuti Kegiatan yang ditentukan</td>
										    <td nowrap="nowrap" style="text-align:center">Tidak Pernah</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Kadang - Kadang</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Seringkali</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Sangat Sering</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_27" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_26" style="text-align:left">TOTAL SKOR</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">12</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_25" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="6" bgcolor="#feffed" id="kt_table_24" style="text-align:left"><strong>Efektifitas &amp; Efisiensi Kerja</strong><span style="text-align: left"></span></td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_23" style="text-align:center">1</td>
										    <td rowspan="4" nowrap style="text-align:left">Jumlah Pekerjaan yang Diselesaikan Tepat Waktu</td>
										    <td nowrap="nowrap" style="text-align:center">&gt;90%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">70% - 90%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">50% - 69%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">&lt;50%</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_19" style="text-align:center">2</td>
										    <td rowspan="4" nowrap style="text-align:left">Keakuratan Pengerjaan Tugas</td>
										    <td nowrap="nowrap" style="text-align:center">&gt;90%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">70% - 90%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">50% - 69%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">&lt;50%</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_15" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:left">Inovasi Kerja</td>
										    <td nowrap="nowrap" style="text-align:center">Sangat Inovatif</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Cukup Inovatif</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Biasa Saja</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Ada Inovasi</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_17" style="text-align:center">4</td>
										    <td rowspan="4" nowrap style="text-align:left">Kerjasama</td>
										    <td nowrap="nowrap" style="text-align:center">Sangat Baik</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Baik</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Biasa Saja</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Baik</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_10" style="text-align:center">5</td>
										    <td rowspan="4" nowrap style="text-align:left">Efisiensi Sumber Data ( Penggunaan Anggaran Ops )</td>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi &gt;25%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi 11-25%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi 0-10%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Ada Efisiensi</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_11" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_5" style="text-align:left">TOTAL SKOR</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">15</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_4" style="text-align:left">GRAND TOTAL SKOR PENILAIAN KINERJA</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">27</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_7" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="2" bgcolor="#f7fcff" id="kt_table_3" style="text-align:left">TUNJANGAN KINERJA YANG DITERIMA</td>
										    <td colspan="2" nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center">Rp. 5.000.000,-</td>
										    <td colspan="2" nowrap bgcolor="#f7fcff" style="text-align:center">Rp. 5.000.000,-</td>
									      </tr>

										</tbody>
									</table>
									<div>&nbsp;</div>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					</div>
						<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table width="650" align="center" cellspacing="2" class="table-bordered table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="15%" colspan="2" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">ELEMENT INDIKATOR PENILAIAN</th>
											  <th width="4%" colspan="2" bgcolor="#f7fcff">RENTANG SKOR</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">NILAI<br>HASIL</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">% SKOR</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">ATRIBUT PENGUKUR</th>
											  <th width="2%" bgcolor="#f7fcff"><span style="text-align:left">SKOR</span></th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td height="30" colspan="6" bgcolor="#feffed" id="kt_table_1" style="text-align:left">Tingkat Kehadiran</td>
										  </tr>
											<tr>
											  <td width="1%" rowspan="4" id="kt_table_1" style="text-align:center">1</td>
											  <td rowspan="4" nowrap="nowrap" style="text-align:left">Jumlah Kehadiran</td>
											  <td style="text-align:center" nowrap>&gt;90%</td>
											  <td style="text-align:center" nowrap>3</td>
											  <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
										  </tr>
											<tr>
												<td style="text-align:center" nowrap>70% - 90%</td>
												<td style="text-align:center" nowrap>2</td>
										  </tr>
										  <tr>
												<td style="text-align:center" nowrap>50% - 69%</td>
												<td style="text-align: center" nowrap>1</td>
										  </tr>
										  <tr>
										    <td style="text-align:center" nowrap>&lt;50%</td>
										    <td style="text-align:center" nowrap>0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_6" style="text-align:center">2</td>
										    <td rowspan="4" nowrap style="text-align:left">Jumlah Keterlambatan</td>
										    <td nowrap="nowrap" style="text-align:center">&lt;15%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										   <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">15% - 30%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">31% - 50%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
												<td nowrap="nowrap" style="text-align:center">&gt;50%</td>
												<td nowrap="nowrap" style="text-align:center">0</td>
										  </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_13" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:left">Meninggalkan Tugas <br />Selama Jam Kerja Tanpa Ijin</td>
										    <td style="text-align:center" nowrap>Tidak Pernah</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Kadang - Kadang</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Seringkali</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td style="text-align:center" nowrap>Sangat Sering</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_9" style="text-align:center">4</td>
										    <td rowspan="4" nowrap style="text-align:left">Tidak Mengikuti Kegiatan <br />yang ditentukan</td>
										    <td nowrap="nowrap" style="text-align:center">Tidak Pernah</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Kadang - Kadang</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Seringkali</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Sangat Sering</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_27" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_26" style="text-align:left">TOTAL SKOR</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">12</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_25" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="6" bgcolor="#feffed" id="kt_table_24" style="text-align:left"><strong>Efektifitas &amp; Efisiensi Kerja</strong><span style="text-align: left"></span></td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_23" style="text-align:center">1</td>
										    <td rowspan="4" nowrap style="text-align:left">Jumlah Pekerjaan yang<br />Diselesaikan Tepat Waktu</td>
										    <td nowrap="nowrap" style="text-align:center">&gt;90%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">70% - 90%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">50% - 69%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">&lt;50%</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_19" style="text-align:center">2</td>
										    <td rowspan="4" nowrap style="text-align:left">Keakuratan Pengerjaan Tugas</td>
										    <td nowrap="nowrap" style="text-align:center">&gt;90%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">70% - 90%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">50% - 69%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">&lt;50%</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_15" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:left">Inovasi Kerja</td>
										    <td nowrap="nowrap" style="text-align:center">Sangat Inovatif</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Cukup Inovatif</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Biasa Saja</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Ada Inovasi</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_17" style="text-align:center">4</td>
										    <td rowspan="4" nowrap style="text-align:left">Kerjasama</td>
										    <td nowrap="nowrap" style="text-align:center">Sangat Baik</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Baik</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Biasa Saja</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Baik</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td rowspan="4" id="kt_table_10" style="text-align:center">5</td>
										    <td rowspan="4" nowrap style="text-align:left">Efisiensi Sumber Data<br />( Penggunaan Anggaran Ops )</td>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi &gt;25%</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td rowspan="4" nowrap style="text-align:center">3</td>
											  <td rowspan="4" nowrap style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi 11-25%</td>
										    <td nowrap="nowrap" style="text-align:center">2</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Efisiensi 0-10%</td>
										    <td nowrap="nowrap" style="text-align: center">1</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:center">Tidak Ada Efisiensi</td>
										    <td nowrap="nowrap" style="text-align:center">0</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_11" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_5" style="text-align:left">TOTAL SKOR</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">15</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="4" bgcolor="#f7fcff" id="kt_table_4" style="text-align:left">GRAND TOTAL SKOR PENILAIAN KINERJA</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">27</td>
										    <td nowrap bgcolor="#f7fcff" style="text-align:center">100</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_7" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td height="30" colspan="2" bgcolor="#f7fcff" id="kt_table_3" style="text-align:left">TUNJANGAN KINERJA YANG DITERIMA</td>
										    <td colspan="2" nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center">Rp. 5.000.000,-</td>
										    <td colspan="2" nowrap bgcolor="#f7fcff" style="text-align:center">Rp. 5.000.000,-</td>
									      </tr>

										</tbody>
									</table>
									<div>&nbsp;</div>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					</div>
					

								<!--End:: App Content-->
							</div>
									</div>
						</div>
						</div>

					
				</div>
								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
						</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
