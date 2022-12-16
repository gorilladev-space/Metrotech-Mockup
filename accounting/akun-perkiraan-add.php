<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



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
				Form Akun Perkiraan
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
	<div class="kt-portlet kt-portlet--height-full">
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-xl-8">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Tipe Akun :</label>
										<select id="select" name="cd-dropdown" class="form-control kt-selectpicker">
												<option value="1" selected>Kas & Bank</option>
												<option value="2">Piutang Usaha</option>
												<option value="3">Persediaan</option>
												<option value="1">Aset Lancar Lainnya</option>
												<option value="1">Aset Tetap</option>
												<option value="1">Akumulasi Penyusutan</option>
												<option value="1">Aset Lainnya</option>
												<option value="1">Hutang Usaha</option>
												<option value="1">Kewajiaban Jangka Pendek</option>
												<option value="1">Kewajiban Jangka Panjang</option>
												<option value="1">Modal</option>
												<option value="1">Pendapatan</option>
												<option value="1">Beban Pokok Penjualan</option>
												<option value="1">Beban</option>
												<option value="1">Beban Lainnya</option>
												<option value="1">Pendapatan Lainnya</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label class="kt-checkbox kt-checkbox--brand kt-checkbox-sm">
											<input type="checkbox" id="myCheck" onclick="myFunction()"> Sub
											<span></span>
										</label>
										<div class="form-group" id="text" style="display:none">
											<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Kode Perkiraan : <code>*</code></label>
										<div class="form-group">
											<input type="text" id="text1" class="form-control form-control-sm" placeholder="">
											<label class="kt-checkbox kt-checkbox--brand" id="text2" style="display:none">
												<input type="checkbox" checked> Semua Pengguna
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="">Nama : <code>*</code></label>
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6 tipe-akun 2" id="2">
										<label class="">Mata Uang : </label>
										<div class="form-group">
											<input id="kt_tagify_5" name='tags3' placeholder="Pilih Syarat Berkas" value="Indonsian Rupiah">
										</div>
									</div>
									<div class="tipe-akun 1" style="display:contents" id="1">
									<div class="col-lg-3">
										<label class="">Saldo Awal:</label>
										<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" id="kt_inputmask_7" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
									</div>
									<div class="col-lg-3">
										<label class="">Per Tgl:</label>
										<div class="form-group">
											<div class="input-group date">
																									 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																									 <div class="input-group-append">
																											 <span class="input-group-text">
																													 <i class="la la-calendar-check-o"></i>
																											 </span>
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
				<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lain - Lain</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<h4>Akses Pengguna : </h4>
									<label class="kt-checkbox kt-checkbox--brand">
										<input type="checkbox" checked> Semua Pengguna
										<span></span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<!--end::Portlet-->
				</div>

			</div>


		</div>
	</div>

</div>

<?php require '../layouts/footer.php' ?>
<script>
$(function() {
  $('#select').change(function(){
    $('.tipe-akun').hide();
    $('#' + $(this).val()).show();
  });
});

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

	var text1 = document.getElementById("text1");

		var text2 = document.getElementById("text2");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
		text1.style.display = "none";
		text2.style.display = "block";
  } else {
    text.style.display = "none";
		text1.style.display = "block";
		text2.style.display = "none";
  }

}
</script>
<?php require '../layouts/foot.php' ?>
