<div class="container mt-5">
    <div class="alert-text">
        <label class="font-weight-boldest text-success h2 ml-5">Penelitian Administrasi</label>
    </div>
    <br><br>
</div>



<!--begin::Content-->
<div class="flex-row-fluid ml-lg-12 mt-5 text-center">

    <div class="d-flex justify-content-between mb-5">
        <h5 class="ml-1">No. SPP : <span class="">TN.124</span></h5>
        <h5 class="mr-5">Nama PSN : <span class="">Jalan Tol Citarem</span></h5>
        <h5 class="text-warning font-weight-bolder">Status : <span class="text-warning font-weight-bolder"> Dalam Tahap Penelitian</span></h5>
    </div>
    <!-- Table  -->
    <div class="table-responsive text-nowrap">

        <table class="table table-bordered table-hover table-fixed">
            <!-- Table head -->
            <thead class="btn-lman">
                <tr>
                    <th>No.</th>
                    <th>Nama yang Berhak</th>
                    <th>Jenis Bidang</th>
                    <th>NIK</th>
                    <th>Nomor Urut Nominatif</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Kabupaten</th>
                    <th>Jenis Bukti Kepemilikan</th>
                    <th>Luas</th>
                    <th>Harga/Nilai Tanah</th>
                    <th>Status Bidang</th>
                    <th>Teliti/Cek Ulang Bidang</th>
                </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Siti Fatimah</td>
                    <td>Non Bidang</td>
                    <td>123456</td>
                    <td>123456</td>
                    <td>Cileduk</td>
                    <td>Sukalayu</td>
                    <td>Kab Jabar</td>
                    <td>Surat</td>
                    <td>6000 m2</td>
                    <td>Rp. 123.678.900,00</td>
                    <td class="text-center">
                        <span class="label label-lg label-light-warning label-inline">Belum Di Teliti</span>
                    </td>
                    <td> <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm">Teliti Bidang</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Siti Fatimah</td>
                    <td>Non Bidang</td>
                    <td>123456</td>
                    <td>123456</td>
                    <td>Cileduk</td>
                    <td>Sukalayu</td>
                    <td>Kab Jabar</td>
                    <td>Surat</td>
                    <td>6000 m2</td>
                    <td>Rp. 123.678.900,00</td>
                    <td class="text-center">
                        <span class="label label-lg label-light-success label-inline">Di Terima</span>
                    </td>
                    <td> <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm">Teliti Bidang</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Siti Fatimah</td>
                    <td>Non Bidang</td>
                    <td>123456</td>
                    <td>123456</td>
                    <td>Cileduk</td>
                    <td>Sukalayu</td>
                    <td>Kab Jabar</td>
                    <td>Surat</td>
                    <td>6000 m2</td>
                    <td>Rp. 123.678.900,00</td>
                    <td class="text-center">
                        <span class="label label-lg label-light-danger label-inline">Di Tolak</span>
                    </td>
                    <td> <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm">Teliti Bidang</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Siti Fatimah</td>
                    <td>Non Bidang</td>
                    <td>123456</td>
                    <td>123456</td>
                    <td>Cileduk</td>
                    <td>Sukalayu</td>
                    <td>Kab Jabar</td>
                    <td>Surat</td>
                    <td>6000 m2</td>
                    <td>Rp. 123.678.900,00</td>
                    <td class="text-center">
                        <span class="label label-lg label-light-danger label-inline">Di Tolak</span>
                    </td>
                    <td> <button href="#" class="btn btn-success font-weight-bold btn-pill btn-sm">Teliti Bidang</td>
                </tr>
            </tbody>
            <!-- Table body -->
        </table>
        <!-- Table  -->
    </div>
    <br>
    <div>
        <button href="#" class="btn btn-lman font-weight-boldest btn-md float-right">SPP SELESAI DITELITI</button>
    </div>
</div>
<!--end::Content-->







<?php if (isset($js)) {
    foreach ($js as $js) {
?>
        <script type="text/javascript" src="<?php echo $this->config->item('static_file_url') . PLATFORM_PATH . $js;
                                            ?>"></script>
<?php
    }
}
?>