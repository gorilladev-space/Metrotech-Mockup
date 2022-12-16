<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
  <div class="kt-container  kt-container--fluid ">
          <div class="kt-subheader__main">
           <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Pengaturan
                </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
              <span class="kt-subheader__desc" id="kt_subheader_total">
              Cuti </span>

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
				<a href="setup-cuti-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-plus"></i> Tambah Data</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
              </div>
          </div>
        </div>
      </div>

						<!-- begin:: Content -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
              <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                  
                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
                    <div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
              <div class="card">
                <div class="card-header" id="headingOne7">
                  <div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Tahunan
                  </div>
                </div>
                <div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-lg-9 col-md-12 xol-sm-12">
                    <div class="edit-item clearfix">
        
          <div class="edit-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
            </div>
            <div class="d-inline-flex">
                <span class="mr-2">Saldo cuti</span>
                  <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12">
          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
        </div>
      </div>
        <span class="ml-head"><span class="kt-badge kt-badge--info kt-badge--inline">Berlaku untuk</span></span>
        <div class="row mt-4 mb-4">
          <div class="col-lg-3 col-md-12 col-sm-12">
      <span class="ml-head"><b>General</b></span>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                  CEO
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Corporate Secretary
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
      <span class="ml-head"><b>Finance Department</b></span>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    General Affair Officer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    HRD Assistant
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    HRD Manager
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Maintenance Officer
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
		   <span class="ml-head"><b>HR & GA Department</b></span>
     
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Accountant
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Bookkeeper
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Finance-Accounting Manager
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Treasure
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
		   <span class="ml-head"><b>Infrastructure Department</b></span>
     
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Back-end Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Front-end Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Lead Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Project Manager
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

          <div class="row mt-4 mb-4">
            <div class="col-lg-3 col-md-12 col-sm-12">
			<span class="ml-head"><b>Information Technology Department</b></span>
       
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Marketing Junior Intern
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Marketing Manager
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
        <span class="ml-head"><b>Creative Department</b></span>
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                      Sales
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Sales Leader
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-brand"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text kt-padding-top-5">
                      Telemarketing
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
       <span class="ml-head"><b>Commercial & Business Development</b></span>
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                      PR Executive
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Promotion Team
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Alasan Penting
                  </div>
                </div>
                <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Bersalin
                  </div>
                </div>
                <div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingfour7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Besar
                  </div>
                </div>
                <div id="collapsefour7" class="collapse" aria-labelledby="headingfour7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingfive7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefive7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Khusus
                  </div>
                </div>
                <div id="collapsefive7" class="collapse" aria-labelledby="headingfive7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingsix7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsesix7" aria-expanded="false" aria-controls="collapsThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Sakit
                  </div>
                </div>
                <div id="collapsesix7" class="collapse" aria-labelledby="headingsix7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingeight7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseeight7" aria-expanded="false" aria-controls="collapsThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Menikah
                  </div>
                </div>
                <div id="collapseeight7" class="collapse" aria-labelledby="headingeight7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <b>Standar perusahaan</b>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="kt-badge kt-badge--danger kt-badge--inline">12 Hari</span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
            </div>
                    </div>

                  </form>
                  </div>
							<!--end:: Portlet-->
							</div>
              <div class="modal fade" id="edit-saldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  									<div class="modal-content">
  										<div class="modal-header">
  											<span ><b>Saldo Cuti tahunan - Standar perusahaan</b></span>
  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  											</button>
  										</div>
  										<div class="modal-body">
										<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="1%" bgcolor="#f7fcff">Pegawai</th>
												
												<th width="15%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Standar</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Saat ini</th>
												<th width="1%" bgcolor="#f7fcff">Terpakai</th>
												<th width="1%" bgcolor="#f7fcff">Saldo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <td colspan="7" bgcolor="#fdfdec">Keuangan</td>
										  </tr>
											<tr>
												<td>1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">Accounting Supervisor</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
											<tr>
												<td>2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">Treasurer of Expenditures</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  <tr>
												<td>3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">&nbsp;</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  <tr>
										    <td colspan="7" bgcolor="#fdfdec">HR &amp; GA</td>
									      </tr>
										  <tr>
												<td>1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
											<tr>
												<td>2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  
										  
										</tbody>
									</table>
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                        

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
														
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li >
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li>
															<a href="#">4</a>
														</li>
														<li>
															<a href="#">5</a>
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
  										<div class="modal-footer">
  											<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Reset</button>
  											<button type="button" class="btn btn-sm btn-primary">Simpan</button>
  										</div>
  									</div>
  								</div>
  							</div>

              <!--<div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    									<div class="modal-content">
    										<div class="modal-header">
    											<h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Cuti tahunan - Standar perusahaan</h5>
    											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    											</button>
    										</div>
    										<div class="modal-body">
                          <div class="form-group">
													<label>Nama kebijakan cuti</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                        	</div>
                          <div class="form-group">
													<label>saldo setiap staf adalah</label>
                          <div class="input-group">
														<input type="text" class="form-control" placeholder="12" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
													</div>
                        	</div>
                          <div class="form-group">
													<label>Saldo akan diperbaharui setiap</label>
                          <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide1">1 Januari</button>&nbsp;
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                          <button type="button" class="btn btn-secondary btn-square col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
												</div>
                        	</div>
                          <div class="form-group tampil">
													<label>Tanggal</label>
                          <div class="input-group date">
													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
                        	</div>
    										</div>
                        <div class="form-group">
                        <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                        <div class="kt-section__content kt-section__content--solid">
                        <button type="button" class="btn btn-secondary btn-square ">Tanggal Bergabung Staff</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">3 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">6 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Tahun Bergabung</button>&nbsp;
                      </div>
                        </div>
                        <div class="form-group">
                        <label>Hak cuti ini diberikan kepada</label>
                        <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	CEO
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Corporate Secretary
																</a>
															</div>
														</div>
													</div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Human Resource
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General Affair Officer
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	 HRD Assistant
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--success">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	HRD Manager
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Maintenance Officer
																</a>
															</div>
														</div>
													</div>
                        </div>
                      </div>
                      </div>
    										<div class="modal-footer">
    											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    											<button type="button" class="btn btn-primary">Save changes</button>
    										</div>
    									</div>
    								</div>
    							</div>
                </div>-->

                <div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									<div class="modal-header">
  											<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 0px; left: -2px; width: 250px;">
												Pengaturan Cuti tahunan - Standar perusahaan
											</div>
										</div>
  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  											</button>
  										</div>
                   
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-12">
                          <div class="form-group">
                          <label>Nama kebijakan cuti</label>
                          <input type="text" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                          </div>
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                        <div class="form-group row">
  												<div class="col-lg-12">
                            <div class="form-group">
  													<label>saldo setiap staf adalah</label>
                            <div class="input-group input-group-sm">
  														<input type="text" class="form-control" placeholder="12" aria-describedby="basic-addon2">
  														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
  													</div>
                          	</div>
  												</div>
  												</div>
  												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                          <div class="form-group row">
                            <div class="col-lg-12">
                              <div class="form-group">
                              <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                              <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tanggal Bergabung Staff</option>
                              <option value="HI">1 Bulan Bergabung</option>
                              <option value="CA">3 Bulan Bergabung</option>
                              <option value="NV">6 Bulan Bergabung</option>
                              <option value="NV">1 Tahun Bergabung</option>
                            </select>
                        </div>
                            </div>
                              </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                            <div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Saldo akan diperbaharui setiap</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="hide1">1 Januari</button>&nbsp;
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
                                  <div class="form-group">
    													<label>Tanggal</label>
                              <div class="input-group date">
    													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
    													<div class="input-group-append">
    														<span class="input-group-text">
    															<i class="la la-calendar-check-o"></i>
    														</span>
    													</div>
                            	</div>
                            </div>
                          </div>
        										</div>
                  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <label>Hak cuti ini diberikan kepada</label>
                    </div>
                    <div class="col-lg-12">
                      <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
															<optgroup label="General">
																<option value="AK" selected>CEO</option>
																<option value="HI">Corporate Secretary</option>
															</optgroup>
															<optgroup label="Human Resource">
																<option value="CA">General Affair Officer</option>
																<option value="NV" selected>HRD Assistant</option>
																<option value="OR">HRD Manager</option>
																<option value="WA">Maintenance Officer</option>
															</optgroup>
															<optgroup label="Finance and Accounting">
																<option value="AZ">Accountant</option>
																<option value="CO">Bookkeeper</option>
																<option value="ID">Finance-Accounting Manager</option>
																<option value="MT" selected>Treasure</option>
															</optgroup>
															<optgroup label="Engineer">
																<option value="SD">Back-end Engineer</option>
																<option value="TX">Front-end Engineer</option>
																<option value="TN">Lead Engineer</option>
																<option value="WI">Project Manager</option>
															</optgroup>
															<optgroup label="Marketing">
																<option value="CT">Marketing Junior Intern</option>
																<option value="DE">Marketing Manager</option>
															</optgroup>
														</select>
                    </div>
                      </div>
      </div>
    </div>
</div>
<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Reset</button>
											<button type="button" class="btn btn-sm btn-primary">Simpan</button>
										</div>
												</div>
										</div>
									</div>
								</div>
							</div>


<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
