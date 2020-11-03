<div class="container mt-5">
    <div class="alert-text">
        <label class="font-weight-boldest text-success h2">Pembayaran SPP yang Telah Disetujui</label>
    </div>
    <br><br>
</div>

<div class="container">
    <div class="card card-custom">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center text-center">
                <thead>
                    <tr>
                        <th class="p-0 min-w-160px"></th>
                        <th class="p-0 min-w-200px"></th>
                        <th class="p-0 min-w-50px"></th>
                        <th class="p-0 min-w-120px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">No. SPP</a>
                            <div class="mt-3">
                                <span class="text-black text-hover-primary" id="spp_no">TN. 124</span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Nama PSN</a>
                            <div class=mt-2>
                                <span class="text-black text-hover-primary" id="psn_name">Jalan Tol Citarem</span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Status</a>
                            <div class="mt-3">
                                <span class="label label-lg label-light-warning label-inline">Menunggu Pembayaran SPP</span>
                            </div>
                        </td>
                        <td class="pr-0 text-right">
                            <button href="#" class="btn btn-success font-weight-bold btn-pill btn-lg mr-5" data-toggle="modal">
                                <i class="fas fa-info-circle"></i>LIHAT DETAIL SPP
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <br><br>



    <!--end::Tap pane-->
    <div class="card card-custom">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center text-center">
                <thead>
                    <tr>
                        <th class="p-0 min-w-160px"></th>
                        <th class="p-0 min-w-200px"></th>
                        <th class="p-0 min-w-50px"></th>
                        <th class="p-0 min-w-120px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">No. SPP</a>
                            <div class="mt-3">
                                <span class="text-black text-hover-primary" id="spp_no">TN. 125</span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Nama PSN</a>
                            <div class=mt-2>
                                <span class="text-black text-hover-primary" id="psn_name">Jalan Tol Citarem</span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Status</a>
                            <div class="mt-3">
                                <span class="label label-lg label-light-primary label-inline">Sudah Terbayar ke Rekening PPK <span class="font-weight-boldest ml-1">Pada anggal</span><span class="font-weight-boldest ml-1">20/10/20</span>
                            </div>
                        </td>
                        <td class="pr-0 text-right">
                            <button href="#" class="btn btn-success font-weight-bold btn-pill btn-lg mr-5" data-toggle="modal">
                                <i class="fas fa-info-circle"></i>LIHAT DETAIL SPP
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Tap pane-->
</div>
<!--end::Body-->




<?php if (isset($js)) {
    foreach ($js as $js) {
?>
        <script type="text/javascript" src="<?php echo $this->config->item('static_file_url') . PLATFORM_PATH . $js;
                                            ?>"></script>
<?php
    }
}
?>