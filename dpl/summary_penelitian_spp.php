<div class="container mt-5">
    <div class="alert-text">
        <label class="font-weight-boldest text-success h2">Summary Penerlitan SPP</label>
    </div>
    <br>
</div>


<form class="form">
    <div class="card card-custom gutter-b mt-5">
        <div class="card-header">
            <div class="card-body">
                <h5 class="card-title"><span class="font-weight-bolder">No. SPP :</span> <span class="ml-2">TN 124</span></h5>
                <h5 class="card-text text-right mb-5"> <span class="font-weight-bolder">JENIS PEMBAYARAN :</span> <span class="ml-2">LANGSUNG (Ke Warga)</span></h5>
                <h5 class="card-text mt-5"><span class="font-weight-bolder">Nama PSN :</span> <span class="ml-2 text-wrap">Jalan Tol Citarem</span></h5>
            </div>
        </div>
        <div class="card-body">
            <!-- Table  -->
            <div class="table-responsive text-center text-nowrap">
                <table class="table table-bordered table-hover table-fixed">
                    <!-- Table head -->
                    <thead class="btn-lman">
                        <tr>
                            <th>No</th>
                            <th>Jenis Bidang</th>
                            <th>Harga / Nilai Tanah</th>
                            <th>Hasil Verifikasi Dokumen</th>
                            <th>Catatan Tertolak</th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Non Bidang</td>
                            <td>Rp. 123.678.900</td>
                            <td> <span class="label label-lg label-light-success label-inline"><span class="font-weight-boldest">Diterima</span>
                                </span>
                            </td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Non Bidang</td>
                            <td>Rp. 123.678.900</td>
                            <td> <span class="label label-lg label-light-success label-inline"><span class="font-weight-boldest">Diterima</span>
                                </span>
                            </td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Non Bidang</td>
                            <td>Rp. 123.678.900</td>
                            <td> <span class="label label-lg label-light-danger label-inline"><span class="font-weight-boldest">Ditolak</span>
                                </span>
                            </td>
                            <td>Fotokopi Identitas</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Non Bidang</td>
                            <td>Rp. 123.678.900</td>
                            <td> <span class="label label-lg label-light-danger label-inline"><span class="font-weight-boldest">Ditolak</span>
                                </span>
                            </td>
                            <td>SPTJM</td>
                        </tr>
                    </tbody>
                    <!-- Table body -->
                </table>
            </div>
            <div class="form-group mt-5 ml-3">
                <label class="font-weight-bolder h5" for="exampleTextarea">Keterangan Tambahan :</label>
                <textarea class="form-control form-control-solid mt-1" rows="3"></textarea>
            </div>

        </div>
        <div class="card-footer d-flex justify-content-end">
            <button type="reset" class="btn btn-outline-success font-weight-bolder mr-5">KEMBALI</button>
            <button type="reset" class="btn btn-lman font-weight-bolder">KIRIM PENGAJUAN</button>
        </div>
    </div>
</form>






<?php if (isset($js)) {
    foreach ($js as $js) {
?>
        <script type="text/javascript" src="<?php echo $this->config->item('static_file_url') . PLATFORM_PATH . $js;
                                            ?>"></script>
<?php
    }
}
?>