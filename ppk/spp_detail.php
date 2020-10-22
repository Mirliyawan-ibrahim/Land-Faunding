<div class="container mt-5">
    <div class="alert-text">
        <label class="font-weight-boldest text-success h2"> Permohonan Pembayaran Lahan PSN </label>
    </div>
    <br>
    <br>
    <button href="#" class="btn btn-success font-weight-bold btn-pill btn-lg" data-toggle="modal" id="btnAddSpp"><i class="fas fa-plus-circle"></i>INPUT SPP</button>
    <div class="mt-5">
        <p class="font-weight-boldest">
            Anda belum Memiliki SPP, silahkan menginput untuk memulai permohonan pembyaran
        </p>
    </div>
</div>


<!--begin::Content-->
<div class="flex-row-fluid ml-lg-12 mt-5">
    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <!--<div class="card-header border-0 pt-5">-->
        <!--    <h3 class="card-title align-items-start flex-column">-->
        <!--        <span class="card-label font-weight-bolder text-dark">New Arrivals</span>-->
        <!--        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>-->
        <!--    </h3>-->
        <!--    <div class="card-toolbar">-->
        <!--        <ul class="nav nav-pills nav-pills-sm nav-dark-75">-->
        <!--            <li class="nav-item">-->
        <!--                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_12_1">Month</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_12_2">Week</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_12_3">Day</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2 pb-0 mt-n3">
            <div class="tab-content mt-5" id="myTabTables12">

                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_tab_pane_12_3" role="tabpanel" aria-labelledby="kt_tab_pane_12_3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                                <tr>
                                    <!--<th class="p-0 w-50px"></th>-->
                                    <!--<th class="p-0 min-w-200px"></th>-->
                                    <th class="p-0 min-w-160px"></th>
                                    <th class="p-0 min-w-250px"></th>
                                    <th class="p-0 min-w-120px"></th>
                                    <th class="p-0 min-w-120px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--<td class="p-0 py-4">-->
                                    <!--    <div class="symbol symbol-50 symbol-light">-->
                                    <!--        <span class="symbol-label">-->
                                    <!--            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />-->
                                    <!--        </span>-->
                                    <!--    </div>-->
                                    <!--</td>-->
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">No. SPP</a>
                                        <div>
                                            <span class="text-muted font-weight-bold text-hover-primary" id="spp_no">Nomor SPP</span>
                                            <!--<a class="text-muted font-weight-bold text-hover-primary" href="#"></a>-->
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Nama PSN</a>
                                        <div>
                                            <span class="text-muted font-weight-bold text-hover-primary" id="psn_name">Nama PSN</span>
                                            <!--<a class="text-muted font-weight-bold text-hover-primary" href="#"></a>-->
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Status</a>
                                        <div>
                                            <!--<span class="text-muted font-weight-bold text-hover-primary" id="psn_name">Nama PSN</span>-->
                                            <span class="label label-lg label-light-primary label-inline">Approved</span>
                                            <!--<a class="text-muted font-weight-bold text-hover-primary" href="#"></a>-->
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <button href="#" class="btn btn-success font-weight-bold btn-pill btn-lg" data-toggle="modal">
                                            <i class="fas fa-plus-circle"></i>Lengkapi Bidang
                                        </button>

                                    </td>
                                </tr>
                                <tr class="min-w-420px bg-light-success">
                                    <td class="pl-0" colspan="4">
                                        <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg h3">Nilai Saldo Tabungan PSN : Rp. 100.000.000,00</span>
                                        <!--<span class="text-muted font-weight-bold d-block">-->
                                        <!--    <span class="font-weight-bolder text-dark-75">FTP:</span>bprow@bnc.cc</span>-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Tap pane-->
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 7-->
</div>
<!--end::Content-->



<!-- Modal -->
<div class="modal fade" id="modalInputSpp" tabindex="-1" data-backdrop="static" aria-labelledby="modalSppTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSppTitle">Input Dokumen Surat Pengajuan Pembayaran (SPP)</h5>
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--    <span aria-hidden="true">&times;</span>-->
                <!--</button>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="psn_name" class="col-sm-6 col-form-label">Nama PSN</label>
                        <div class="col-sm-12">
                            <!--<input type="text" class="form-control data-spp" id="psn_name" name="psn_name">-->
                            <select class="form-control data-spp select2" id="psn_sector" name="psn_sector" required></select>
                        </div>
                    </div>
                    <div class="form-group" id="div-psn-name" style="display:none">
                        <label for="psn_name_data" class="col-sm-6 col-form-label">Nama PSN</label>
                        <div class="col-sm-12">
                            <select class="form-control data-spp select2" id="psn_name_data" name="psn_name_data" required></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="spp_num" class="col-sm-6 col-form-label">Nomor SPP</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control data-spp" id="spp_num" name="spp_num">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="spp_date" class="col-sm-6 col-form-label">Tanggal</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control data-spp" id="spp_date" name="spp_date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="value" class="col-sm-6 col-form-label">Nilai Nominal</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control data-spp" id="value" name="value">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field_count" class="col-sm-6 col-form-label">Jumlah Bidang</label>
                        <div class="col-sm-12">
                            <input type="number" min="0" class="form-control data-spp" id="field_count" name="field_count">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-6 col-form-label">Upload Dokumen</label>
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control data-spp" id="id_doc_spp" name="id_doc_spp" readonly>
                            <label for="doc_spp" class="btn btn-outline-success btn-sm mr-3" id="choose-file-label">UPLOAD DOKUMEN</label>
                            <input type="file" class="form-control" id="doc_spp" name="doc_spp" accept="application/pdf" style="display:none">
                            <!--<input class="form-control" type="file" id="file_document" ref="file_document" v-on:change="handleFileDocumentChange()" accept="application/pdf" required/>-->

                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" id="btnSaveSpp" class="btn btn-success">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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