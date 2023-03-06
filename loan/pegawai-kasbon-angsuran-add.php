<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />
<link href="../assets/dist/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
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
											Kasbon Pegawai

									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Buat Baru </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
										</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<!-- begin:: Content -->
<div class="row">
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
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
                      <div class="row">
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup Kasbon
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Isikan Detail Kasbon
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-coins"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data Pinjaman
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Detail Data Pinjaman
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														2
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-rocket"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form Pembayaran
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Angsuran Pinjaman
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Surat Penawaran
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Preview Surat Penawaran
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>-->

									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">

												<div class="col-lg-5">
														<label>Cari Pegawai :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">9130037 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                                      <option value="3" selected="">9130038 - Maghfirah Sharifudin Andy Omar S.Psi</option>

                                  </select>
													

												</div>
												<div class="col-lg-4">
														<label>Nama Pegawai :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Maghfirah Sharifuddin Andy Omar, S.Psi">

												</div>
												




												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">

												<div class="col-lg-5">
														<label>Department :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Commercial & Business Development">

												</div>

												<div class="col-lg-5">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Maintenance">
													</div>
													<div class="col-lg-2">
														<label>Kantor :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sulawesi Barat">
													</div>




												</div>


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasbon</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Sumber Kas :</label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                              <option value="AK">Kas Koperasi</option>
                              
                              <option value="HI"></option>
                            </select>
													</div>
											<div class="col-lg-4">
														<label>Tanggal Permohonan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Date">

												</div>

												<div class="col-lg-4">
														<label>Tanggal Kebutuhan :</label>
														<div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
													</div>
												
												</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
											<div class="col-lg-4">
														<label>Jumlah Pinjaman :</label>
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>

												</div>
												<div class="col-lg-2">
														<label>Suku Bunga :</label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                              <option value="AK">1%</option>
                              <option value="HI">2%</option>
                              <option value="HI"></option>
                            </select>

												</div>
												<div class="col-lg-2">
														<label>Tenor :</label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                              <option value="AK">1 Bulan</option>
                              <option value="AK">3 Bulan</option>
                              <option value="AK">6 Bulan</option>
                              <option value="AK">9 Bulan</option>
                              <option value="AK">12 Bulan</option>
                              <option value="AK">24 Bulan</option>
                              
                              <option value="HI"></option>
                            </select>
													</div>
												<div class="col-lg-4">
														<label>Total Pinjaman :</label>
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" disabled="disabled" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>

												</div>
												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
											<div class="col-lg-4">
														<label>Jaminan diberikan :</label>
														<input type="text" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="">

												</div>
												<div class="col-lg-8">
														<label>Tujuan Kasbon :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>
												
												
												</div>
												</div>
									</div>

									<!--end::Portlet-->



								</div>
								</div>
								</div>
								</div>



												<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content"><br>
														
													

</div>



												<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content"><br>
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" rowspan="3" bgcolor="#f7fcff" >NO</td>
    <td colspan="2" rowspan="3" bgcolor="#f7fcff">URAIAN </td>
    <td width="4%" rowspan="3" bgcolor="#f7fcff">VOL</td>
    <td width="4%" rowspan="3" bgcolor="#f7fcff">SATUAN</td>
    <td colspan="4" bgcolor="#f7fcff">HARGA PENAWARAN</td>
    <td colspan="4" bgcolor="#f7fcff">BUDGET PRODUKSI</td>
    <td width="5%" rowspan="3" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr style="text-align:center">
    <td colspan="2" bgcolor="#f7fcff">HARGA SATUAN</td>
    <td colspan="2" bgcolor="#f7fcff">JUMLAH</td>
    <td colspan="2" bgcolor="#f7fcff">HARGA SATUAN</td>
    <td colspan="2" bgcolor="#f7fcff">JUMLAH</td>
  </tr>
  <tr style="text-align:center">
    <td width="7%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="7%" bgcolor="#f7fcff">JASA</td>
    <td width="7%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="7%" bgcolor="#f7fcff">JASA</td>
    <td width="7%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="7%" bgcolor="#f7fcff">JASA</td>
    <td width="7%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="7%" bgcolor="#f7fcff">JASA</td>
  </tr>
  <tr>
    <td width="1%" style="text-align:center">A</td>
    <td colspan="12">Gate 2 - Jalur In Mobil</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td width="1%" style="text-align:center">1</td>
    <td colspan="12">Material Dispenser</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td width="1%" style="text-align:center">&nbsp;</td>
    <td width="1%">a</td>
    <td width="23%">Cashing Ticket Dispenser Ticket - Single</td>
    <td width="4%"><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
	</div></td>
    <td width="5%"><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>Unit</option>
														<option>Ls</option>
														<option>Pieces</option>
														<option>Roll</option>
														<option>Box</option>
													</select>
	</div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td width="7%" style="text-align:left">Rp.</td>
    <td width="7%" style="text-align:left">Rp.</td>
    <td width="7%" style="text-align:left">Rp.</td>
    <td width="7%" style="text-align:left">Rp.</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%">b</td>
    <td>Monitor Display 20 Inch</td>
    <td width="4%"><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
	</div></td>
    <td><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>Unit</option>
														<option>Ls</option>
														<option>Pieces</option>
														<option>Roll</option>
														<option>Box</option>
													</select>
	</div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="2">IP Camera</td>
    <td width="4%"><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
	</div></td>
    <td><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>Unit</option>
														<option>Ls</option>
														<option>Pieces</option>
														<option>Roll</option>
														<option>Box</option>
													</select>
	</div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td colspan="14" style="text-align:center" bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; font-weight: bold;" bgcolor="#feffed">Sub Total I</td>
    <td bgcolor="#feffed"><strong></strong></td>
    <td bgcolor="#feffed"><strong></strong></td>
    <td bgcolor="#feffed"><strong>Rp.</strong></td>
    <td bgcolor="#feffed"><strong>Rp.</strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong></strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong></strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong>Rp.</strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong>Rp.</strong></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="14" style="text-align:center" bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center">B</td>
    <td colspan="12">Gate 2 - Jalur Out Mobil</td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="12">Pos Pelayanan</td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%">a</td>
    <td width="23%">Cashing Ticket Dispenser Ticket - Single</td>
    <td width="4%"><div class="form-group">
      <select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div></td>
    <td width="5%"><div class="form-group">
      <select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
        <option>Unit</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
    </div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td>b</td>
    <td>Monitor Display 20 Inch</td>
    <td width="4%"><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
	</div></td>
    <td><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>Unit</option>
														<option>Ls</option>
														<option>Pieces</option>
														<option>Roll</option>
														<option>Box</option>
													</select>
	</div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td width="5%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="2">IP Camera</td>
    <td><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
	</div></td>
    <td><div class="form-group">
													<select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
														<option>Unit</option>
														<option>Ls</option>
														<option>Pieces</option>
														<option>Roll</option>
														<option>Box</option>
													</select>
	</div></td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:left">Rp.</td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td colspan="14" style="text-align:center" bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; font-weight: bold;" bgcolor="#feffed">Sub Total II</td>
    <td bgcolor="#feffed"><strong></strong></td>
    <td bgcolor="#feffed"><strong></strong></td>
    <td bgcolor="#feffed"><strong>Rp.</strong></td>
    <td bgcolor="#feffed"><strong>Rp.</strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong></strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong></strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong>Rp.</strong></td>
    <td bgcolor="#feffed" style="text-align:left"><strong>Rp.</strong></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="14" style="text-align:center" bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; font-weight: bold;" bgcolor="#f7fcff">Selisih</td>
    <td bgcolor="#f7fcff"><strong></strong></td>
    <td bgcolor="#f7fcff"><strong></strong></td>
    <td bgcolor="#f7fcff"><strong>Rp.</strong></td>
    <td bgcolor="#f7fcff"><strong>Rp.</strong></td>
    <td bgcolor="#f7fcff" style="text-align:left"><strong></strong></td>
    <td bgcolor="#f7fcff" style="text-align:left"><strong></strong></td>
    <td bgcolor="#f7fcff" style="text-align:left"><strong>Rp.</strong></td>
    <td bgcolor="#f7fcff" style="text-align:left"><strong>Rp.</strong></td>
    <td style="text-align:center" bgcolor="#f7fcff">&nbsp;</td>
  </tr>
</table>
<div class="row">
<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--right kt-ribbon kt-ribbon--danger">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">Catatan Produksi</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div>&nbsp;</div>

												<div class="form-group row">
													<div class="col-lg-12">

														<textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
													</div>


												</div>
												</div>


										</div>
									</div>

									<!--end::Portlet-->
								</div>
								</div>
</div>
</div>

												<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-invoice-2">
										<div class="kt-invoice__head">
											<div class="kt-invoice__container">
												<div class="kt-invoice__brand">
													<h1 class="kt-invoice__title">INVOICE</h1>
													<div href="#" class="kt-invoice__logo">
														<a href="#"><img src="../assets/media/company-logos/logo_client_color.png"></a>
														<span class="kt-invoice__desc">
															<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
															<span>Mississippi 96522</span>
														</span>
													</div>
												</div>
												<div class="kt-invoice__items">
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">DATA</span>
														<span class="kt-invoice__text">Dec 12, 2017</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">INVOICE NO.</span>
														<span class="kt-invoice__text">GS 000014</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">INVOICE TO.</span>
														<span class="kt-invoice__text">Iris Watson, P.O. Box 283 8562 Fusce RD.<br>Fredrick Nebraska 20620</span>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-invoice__body">
											<div class="kt-invoice__container">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>DESCRIPTION</th>
																<th>HOURS</th>
																<th>RATE</th>
																<th>AMOUNT</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Creative Design</td>
																<td>80</td>
																<td>$40.00</td>
																<td class="kt-font-danger kt-font-lg">$3200.00</td>
															</tr>
															<tr>
																<td>Front-End Development</td>
																<td>120</td>
																<td>$40.00</td>
																<td class="kt-font-danger kt-font-lg">$4800.00</td>
															</tr>
															<tr>
																<td>Back-End Development</td>
																<td>210</td>
																<td>$60.00</td>
																<td class="kt-font-danger kt-font-lg">$12600.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="kt-invoice__footer">
											<div class="kt-invoice__container">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>BANK</th>
																<th>ACC.NO.</th>
																<th>DUE DATE</th>
																<th>TOTAL AMOUNT</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>BARCLAYS UK</td>
																<td>12345678909</td>
																<td>Jan 07, 2018</td>
																<td class="kt-font-danger kt-font-xl kt-font-boldest">20,600.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="kt-invoice__actions">
											<div class="kt-invoice__container">
												<button type="button" class="btn btn-label-brand btn-bold" onclick="window.print();">Download Penawaran</button>
												<button type="button" class="btn btn-brand btn-bold" onclick="window.print();">Print Penawaran</button>
											</div>
										</div>
									</div>

</div>



												<!--end: Form Wizard Step 4-->
													<div>&nbsp;</div>
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
						</div>


                    </div>

									</div>
									</div>

							<!--end:: Portlet-->


          </div>
        </div>
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

						<!-- end:: Content -->
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
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<script src="../assets/dist/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/dist/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>
>>>>>>> 7f100a06720f165973bd59112d4d68c4d75d36e9
<script src="../assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="../assets/plugins/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
