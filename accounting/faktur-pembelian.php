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
<?php require 'layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
					Faktur Pembelian
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="faktur-pembelian-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Faktur Pembelian</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan kolom
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="height:300px; overflow-x:scroll;">
<label class="dropdown-item"><input type="checkbox" name="nomor" checked>Nomor#</label>
<label class="dropdown-item"><input type="checkbox" name="noFaktur" checked>No. Faktur#</label>
<label class="dropdown-item"><input type="checkbox" name="tanggal" checked>Tanggal</label>
<label class="dropdown-item"><input type="checkbox" name="pelanggan" checked>Pemasok</label>
<label class="dropdown-item"><input type="checkbox" name="mataUang">Mata Uang</label>
<label class="dropdown-item"><input type="checkbox" name="kurs">Kurs</label>
<label class="dropdown-item"><input type="checkbox" name="syaratPembayaran">Syarat Pembayaran</label>
<label class="dropdown-item"><input type="checkbox" name="pengiriman">Pengiriman</label>
<label class="dropdown-item"><input type="checkbox" name="fob">FOB</label>
<label class="dropdown-item"><input type="checkbox" name="tglFaktur">Tgl Faktur Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="keterangan" checked>Keterangan</label>
<label class="dropdown-item"><input type="checkbox" name="status" checked>Status</label>
<label class="dropdown-item"><input type="checkbox" name="pph22">PPh 22</label>
<label class="dropdown-item"><input type="checkbox" name="cabang">Cabang</label>
<label class="dropdown-item"><input type="checkbox" name="pph">PPh</label>
<label class="dropdown-item"><input type="checkbox" name="pembayaran">Pembayaran</label>
<label class="dropdown-item"><input type="checkbox" name="bayarPPN">Bayar PPN</label>
<label class="dropdown-item"><input type="checkbox" name="FakturPajak">No. Faktur Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="tagihanDimuka">Tagihan Dimuka</label>
<label class="dropdown-item"><input type="checkbox" name="jatuhTempo">Jatuh Tempo</label>
<label class="dropdown-item"><input type="checkbox" name="umur" checked>Umur (hr)</label>
<label class="dropdown-item"><input type="checkbox" name="pembuatData">Pembuat Data</label>
<label class="dropdown-item"><input type="checkbox" name="statusTagihanDimuka">Status Tagihan Dimuka</label>
<label class="dropdown-item"><input type="checkbox" name="persenditerima">% Diterima (Tagihan Dimuka)</label>
<label class="dropdown-item"><input type="checkbox" name="diskon">Diskon %</label>
<label class="dropdown-item"><input type="checkbox" name="diskon2">Diskon</label>
<label class="dropdown-item"><input type="checkbox" name="uangMuka">Uang Muka</label>
<label class="dropdown-item"><input type="checkbox" name="nilaiPpn">Nilai PPN</label>
<label class="dropdown-item"><input type="checkbox" name="nilaiPpnbm">Nilai PPNBM</label>
<label class="dropdown-item"><input type="checkbox" name="biayaLainnya">Biaya Lainnya</label>
<label class="dropdown-item"><input type="checkbox" name="total" checked>Total</label>
<label class="dropdown-item"><input type="checkbox" name="retur">Retur</label>
<label class="dropdown-item"><input type="checkbox" name="returppn">Retur PPN</label>
<label class="dropdown-item"><input type="checkbox" name="hutang">Hutang</label>
<label class="dropdown-item"><input type="checkbox" name="hutang">Hutang</label>





</form>
</div>
				</div>
	</div>
</div>

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
																				 <label class="">Nomor:</label>
																				 <input type="text" class="form-control form-control-sm " placeholder="">
																			 </div>
																				<div class="col-lg-3">
																				 <label class="">Tanggal:</label>
																				 <div class="input-group date">
																				 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
																				 <div class="input-group-append">
																				 	<span class="input-group-text">
																				 		<i class="la la-calendar-check-o"></i>
																				 	</span>
																				 </div>
																				 </div>
																			 </div>
																			 <div class="col-lg-3">
																				<label class="">Pemasok:</label>
																				<input type="text" class="form-control form-control-sm " placeholder="">
																			</div>
														<div class="col-lg-3">
								                          <label>Status:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																						<option>Belum Lunas</option>
																						<option>Diajukan</option>
																						<option>Ditolak</option>
																						<option>Draf</option>
																						<option>Lunas</option>
																					</select>
								                        </div>
								                      </div>
								                      </div>
																			<div class="kt-portlet__foot text-center">
																				<div class="kt-form__actions">
																					<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																					<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																				</div>
																			</div>
																		</form>
																	</div>

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-striped table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																						<th bgcolor="#f7fcff" class="nomor">Nomor#</th>
																						<th bgcolor="#f7fcff" class="noFaktur">No Faktur #</th>
																						<th bgcolor="#f7fcff" class="tanggal">Tanggal</th>
																						<th bgcolor="#f7fcff" class="pemasok">Pemasok</th>
																						<th bgcolor="#f7fcff" class="mataUang">Mata Uang</th>
																						<th bgcolor="#f7fcff" class="kurs">Kurs</th>
																						<th bgcolor="#f7fcff" class="syaratPembayaran">Syarat Pembayaran</th>
																						<th bgcolor="#f7fcff" class="pengiriman">Pengiriman</th>
																						<th bgcolor="#f7fcff" class="fob">FOB</th>
																						<th bgcolor="#f7fcff" class="tglFaktur">Tgl Faktur Pajak</th>
																						<th bgcolor="#f7fcff" class="keterangan">Keterangan</th>
																						<th bgcolor="#f7fcff" class="status">Status</th>
																						<th bgcolor="#f7fcff" class="pph22">PPh 22</th>
																						<th bgcolor="#f7fcff" class="cabang">Cabang</th>
																						<th bgcolor="#f7fcff" class="pph">PPh</th>
																						<th bgcolor="#f7fcff" class="pembayaran">Pembayaran</th>
																						<th bgcolor="#f7fcff" class="bayarPPN">Bayar PPN</th>
																						<th bgcolor="#f7fcff" class="fakturPajak">No. Faktur Pajak</th>
																						<th bgcolor="#f7fcff" class="tagihanDimuka">Tagihan Dimuka</th>
																						<th bgcolor="#f7fcff" class="jatuhTempo">Jatuh Tempo</th>
																						<th bgcolor="#f7fcff" class="umur">Umur (hr)</th>
																						<th bgcolor="#f7fcff" class="pembuatData">Pembuat Data</th>
																						<th bgcolor="#f7fcff" class="statusTagihanDimuka">Status Tagihan Dimuka</th>
																						<th bgcolor="#f7fcff" class="persenditerima">% Diterima (Tagihan Dimuka)</th>
																						<th bgcolor="#f7fcff" class="diskon">Diskon %/th>
																						<th bgcolor="#f7fcff" class="diskon2">Diskon</th>
																						<th bgcolor="#f7fcff" class="uangMuka">Uang Muka</th>
																						<th bgcolor="#f7fcff" class="nilaiPpn">Nilai PPN</th>
																						<th bgcolor="#f7fcff" class="nilaiPpnbm">Nilai PPNBM</th>
																						<th bgcolor="#f7fcff" class="total">Total</th>
																						<th bgcolor="#f7fcff" class="retur">Retur</th>
																						<th bgcolor="#f7fcff" class="returppn">Retur PPN</th>
																						<th bgcolor="#f7fcff" class="hutang">Hutang</th>
																						<th bgcolor="#f7fcff" class="hutangPajak">Hutang Pajak</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td class="nomor"></td>
																						<td class="noFaktur"></td>
																						<td class="tanggal"></td>
																						<td class="pemasok"></td>
																						<td class="mataUang"></td>
																						<td class="kurs"></td>
																						<td class="syaratPembayaran"></td>
																						<td class="pengiriman"></td>
																						<td class="fob"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="pembayaran"></td>
																						<td class="bayarPPN"></td>
																						<td class="fakturPajak"></td>
																						<td class="tagihanDimuka"></td>
																						<td class="jatuhTempo"></td>
																						<td class="umur"></td>
																						<td class="pembuatData"></td>
																						<td class="statusTagihanDimuka"></td>
																						<td class="persenditerima"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaiPpn"></td>
																						<td class="nilaiPpnbm"></td>
																						<td class="total"></td>
																						<td class="retur"></td>
																						<td class="returppn"></td>
																						<td class="hutang"></td>
																						<td class="hutangPajak"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="noFaktur"></td>
																						<td class="tanggal"></td>
																						<td class="pemasok"></td>
																						<td class="mataUang"></td>
																						<td class="kurs"></td>
																						<td class="syaratPembayaran"></td>
																						<td class="pengiriman"></td>
																						<td class="fob"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="pembayaran"></td>
																						<td class="bayarPPN"></td>
																						<td class="fakturPajak"></td>
																						<td class="tagihanDimuka"></td>
																						<td class="jatuhTempo"></td>
																						<td class="umur"></td>
																						<td class="pembuatData"></td>
																						<td class="statusTagihanDimuka"></td>
																						<td class="persenditerima"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaiPpn"></td>
																						<td class="nilaiPpnbm"></td>
																						<td class="total"></td>
																						<td class="retur"></td>
																						<td class="returppn"></td>
																						<td class="hutang"></td>
																						<td class="hutangPajak"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="noFaktur"></td>
																						<td class="tanggal"></td>
																						<td class="pemasok"></td>
																						<td class="mataUang"></td>
																						<td class="kurs"></td>
																						<td class="syaratPembayaran"></td>
																						<td class="pengiriman"></td>
																						<td class="fob"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="pembayaran"></td>
																						<td class="bayarPPN"></td>
																						<td class="fakturPajak"></td>
																						<td class="tagihanDimuka"></td>
																						<td class="jatuhTempo"></td>
																						<td class="umur"></td>
																						<td class="pembuatData"></td>
																						<td class="statusTagihanDimuka"></td>
																						<td class="persenditerima"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaiPpn"></td>
																						<td class="nilaiPpnbm"></td>
																						<td class="total"></td>
																						<td class="retur"></td>
																						<td class="returppn"></td>
																						<td class="hutang"></td>
																						<td class="hutangPajak"></td>
																				  </tr>
																</tbody>
																			</table>

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
										  </div>
										  </div>
							</div>

<?php require '../layouts/footer.php' ?>
<script>
$("input:checkbox:not(:checked)").each(function() {
    var column = "table ." + $(this).attr("name");
    $(column).hide();
});

$("input:checkbox").click(function(){
    var column = "table ." + $(this).attr("name");
    $(column).toggle();
});

$(function() {
	var startX,
		 startWidth,
		 $handle,
		 $table,
		 pressed = false;

	$(document).on({
		mousemove: function(event) {
			if (pressed) {
				$handle.width(startWidth + (event.pageX - startX));
			}
		},
		mouseup: function() {
			if (pressed) {
				$table.removeClass('resizing');
				pressed = false;
			}
		}
	}).on('mousedown', '.table-resizable th', function(event) {
		$handle = $(this);
		pressed = true;
		startX = event.pageX;
		startWidth = $handle.width();

		$table = $handle.closest('.table-resizable').addClass('resizing');
	}).on('dblclick', '.table-resizable thead', function() {
		// Reset column sizes on double click
		$(this).find('th[style]').css('width', '');
	});
});
</script>
<?php require '../layouts/foot.php' ?>
