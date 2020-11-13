<div class="container mt-5">
    <div class="alert-text">
        <label class="font-weight-boldest text-success h2">Penelitian Administrasi</label>
    </div>
    <br><br>
</div>

<div class="container">
    <div class="card card-custom">
        <!--begin::Table-->
        <div class="table-responsive text-nowarp">
            <table class="table table-borderless table-vertical-center text-center">
                <thead>
                    <tr>
                        <th class="p-0 min-w-160px"></th>
                        <th class="p-0 min-w-200px"></th>
                        <th class="p-0 min-w-150px"></th>
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
                                <span class="label label-lg label-light-danger label-inline"><span class="font-weight-boldest">Belum Di Teliti</span>
                                </span>
                            </div>
                        </td>
                        <td class="pr-0 text-right">
                            <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm mr-5" data-toggle="modal">
                                <i class="fas fa-info-circle"></i>CEK DETAIL BIDANG
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
</div>
<br>

<div class="container">
    <div class="card card-custom">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center text-center">
                <thead>
                    <tr>
                        <th class="p-0 min-w-160px"></th>
                        <th class="p-0 min-w-200px"></th>
                        <th class="p-0 min-w-150px"></th>
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
                                <span class="label label-lg label-light-warning label-inline"><span class="font-weight-boldest">Dalam Tahap Penelitian</span>
                                </span>
                            </div>
                        </td>
                        <td class="pr-0 text-right">
                            <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm mr-5" data-toggle="modal">
                                <i class="fas fa-info-circle"></i>CEK DETAIL BIDANG
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
</div>
<br>








<?php if (isset($js)) {
    foreach ($js as $js) {
?>
        <script type="text/javascript" src="<?php echo $this->config->item('static_file_url') . PLATFORM_PATH . $js;
                                            ?>"></script>
<?php
    }
}
?>