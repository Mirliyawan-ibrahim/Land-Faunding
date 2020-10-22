<div class="row">
    <div class="col-lg-6">
        <div class="card card-custom card-stretch">
            <!--<div class="card-header">-->
            <!--	<div class="card-title">-->
            <!--		<h3 class="card-label">Card Title-->
            <!--		<small>full height card</small></h3>-->
            <!--	</div>-->
            <!--</div>-->
            <div class="card-body">
                <div class="d-flex flex-column flex-center py-30">
                    <!--end::Symbol-->
                    <!--begin::Username-->
                    <span class="card-title font-weight-bolder text-dark-85 text-hover-dark font-size-h4 m-5 pt-7 pb-5 h1 display-4">Permohonan Pembayaran</span>
                    <!--end::Username-->
                    <!--begin::Info-->
                    <div class="font-weight-bold text-dark-850 font-size-sm pb-6 display-5 text-success">
                        Silakan pilih jenis pembayaran yang akan anda lakukan
                    </div>
                    <!--end::Info-->
                </div>


            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-custom card-stretch card-stretch-third gutter-b">
            <!--<div class="card-header">-->
            <!--	<div class="card-title">-->
            <!--		<h3 class="card-label">Card Title-->
            <!--		<small>third height card</small></h3>-->
            <!--	</div>-->
            <!--</div>-->
            <!--<div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum.</div>-->
            <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-info">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <!--begin::Content-->
                        <div class="d-flex flex-column mr-5">
                            <a href="#" class="h4 text-dark text-hover-primary mb-5">Pembayaran Talangan</a>
                        </div>
                        <!--end::Content-->
                        <!--begin::Button-->
                        <div class="ml-6 flex-shrink-0">
                            <button data-toggle="modal" data-target="#kt_chat_modal" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-10 btn-byr-tlg">PILIH</button>
                        </div>
                        <!--end::Button-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-custom card-stretch card-stretch-third gutter-b">
            <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-success">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <div class="d-flex flex-column mr-5">
                            <a class="h4 text-dark text-hover-primary mb-5">Pembayaran Langsung</a>
                        </div>
                        <div class="ml-6 flex-shrink-0">
                            <button data-toggle="modal" data-target="#kt_chat_modal" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-10 btn-byr-lsg">PILIH</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-custom card-stretch card-stretch-third">
            <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <!--begin::Content-->
                        <div class="d-flex flex-column mr-5">
                            <a href="#" class="h4 text-dark text-hover-primary mb-5">Cost Of Fund</a>
                        </div>
                        <!--end::Content-->
                        <!--begin::Button-->
                        <div class="ml-6 flex-shrink-0">
                            <a href="#" data-toggle="modal" data-target="#kt_chat_modal" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-10 btn-byr-cof">PILIH</a>
                        </div>
                        <!--end::Button-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="requestPaymentModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<h5 class="modal-title" id="requestPaymentModalTitle">Permohonan Pembayaran</h5>-->
                <div class="d-flex flex-column flex-center py-2 pb-0">
                    <span class="card-title font-weight-bolder text-dark-20 text-hover-dark font-size-h4 m-5 pt-2 pb-0 h1 display-5">Permohonan Pembayaran</span>
                    <div class="font-weight-bold text-dark-850 font-size-sm pb-0 display-5 text-success">
                        Silakan pilih jenis pembayaran yang akan anda lakukan
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                            <!--begin::Nav Panel Widget 2-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                        <!--begin::Container-->
                                        <div class="pb-2">
                                            <!--begin::Header-->
                                            <div class="d-flex flex-column flex-center">
                                                <center class="mb-5">
                                                    <!--begin::Username-->
                                                    <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h5 m-0 pt-7 pb-5">Pembayaran langsung ke Warga</a>
                                                </center>
                                                <!--end::Username-->
                                                <!--begin::Info-->
                                                <!--<div class="font-weight-bold text-dark-60 font-size-sm pb-6">Melakukan Permohonan Pembayaran Lahan PSN ke LMAN</div>-->
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--eng::Container-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                            <button class="btn btn-lman font-weight-bolder font-size-lg py-6 px-6 btn-add-1">PILIH</button>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Nav Panel Widget 2-->

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                            <!--begin::Nav Panel Widget 2-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                        <!--begin::Container-->
                                        <div class="pb-5">
                                            <!--begin::Header-->
                                            <div class="d-flex flex-column flex-center">
                                                <center class="mb-5">
                                                    <!--begin::Username-->
                                                    <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h5 m-0 pt-7 pb-5">Pembayaran langsung ke Pengadilan</a>
                                                </center>
                                                <!--end::Username-->
                                                <!--begin::Info-->
                                                <!--<div class="font-weight-bold text-dark-60 font-size-sm pb-6">Melakukan Permohonan Pembayaran Lahan PSN ke LMAN</div>-->
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--eng::Container-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                            <button class="btn btn-lman font-weight-bolder font-size-lg py-6 px-6 btn-add-2">PILIH</button>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Nav Panel Widget 2-->

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                            <!--begin::Nav Panel Widget 2-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                        <!--begin::Container-->
                                        <div class="pb-5">
                                            <!--begin::Header-->
                                            <div class="d-flex flex-column flex-center">
                                                <center class="mb-5">
                                                    <!--begin::Username-->
                                                    <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h5 m-0 pt-7 pb-5">Pembayaran via Rekening KL</a>
                                                </center>
                                                <!--end::Username-->
                                                <!--begin::Info-->
                                                <!--<div class="font-weight-bold text-dark-60 font-size-sm pb-6">Melakukan Permohonan Pembayaran Lahan PSN ke LMAN</div>-->
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--eng::Container-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                            <button class="btn btn-lman font-weight-bolder font-size-lg py-6 px-6 btn-add-3">PILIH</button>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Nav Panel Widget 2-->

                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="modal-footer">-->
            <!--	<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>-->
            <!--	<button type="button" class="btn btn-primary font-weight-bold">Save changes</button>-->
            <!--</div>-->
        </div>
    </div>
</div>

<div class="modal fade" id="requestPaymentModalCof" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<h5 class="modal-title" id="requestPaymentModalTitle">Permohonan Pembayaran</h5>-->
                <div class="d-flex flex-column py-2 pb-0">
                    <span class="card-title font-weight-bolder text-dark-20 text-hover-dark font-size-h4 m-5 pt-2 pb-0 h1 display-5">Cost of Founding</span>
                    <div class="font-weight-bold text-dark-850 font-size-sm pb-0 display-5 text-success">
                        Silahkan cetak bidang yang telah disetujui untuk melanjutkan pembayaran cost of founding
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Table  -->
                <table class="table table-bordered">
                    <!-- Table head -->
                    <thead class="btn-lman">
                        <tr>
                            <th>No.</th>
                            <th>Jenis Bidang</th>
                            <th>No. SPP</th>
                            <th>Nama PSN</th>
                            <th>
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1" checked>
                                    <label class="custom-control-label" for="tableDefaultCheck1">Centang Semua</label>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Non Bidang</td>
                            <td>TN. 120</td>
                            <td>Jalan Tol Bakauheni</td>
                            <th scope="row">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2" checked>
                                    <label class="custom-control-label" for="tableDefaultCheck2">Checked</label>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Bidang</td>
                            <td>TN. 120</td>
                            <td>Jalan Tol Bakauheni</td>
                            <th scope="row">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3" checked>
                                    <label class="custom-control-label" for="tableDefaultCheck3">Checked</label>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table  -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lman" id="nextCof">Selanjutnya</button>
            </div>
            <!--end::Advance Table Widget 7-->
        </div>
        <!--end::Content-->
    </div>
    <!--<div class="modal-footer">-->
    <!--	<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>-->
    <!--	<button type="button" class="btn btn-primary font-weight-bold">Save changes</button>-->
    <!--</div>-->
</div>





<?php if (isset($js)) {
    foreach ($js as $js) {
?>
        <script type="text/javascript" src="<?php echo $this->config->item('static_file_url') . PLATFORM_PATH . $js;
                                            ?>"></script>
<?php
    }
}
?>