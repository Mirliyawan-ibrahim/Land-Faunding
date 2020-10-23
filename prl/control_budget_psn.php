<div class="container mt-5 mb-5">
    <div class="row">
        <div class="alert-text">
            <label class="font-weight-boldest text-success h2">Control Budget PSN</label>
        </div>
    </div>
    <div class="row justify-content-between mt-5 mb-5">
        <div class="col-4-md">
        </div>
        <button href="#" class="btn btn-light-success font-weight-bold btn-lg text-white active" data-toggle="modal" data-target="#exampleModalLong">
            <i class="fas fa-plus-circle"></i> INPUT DATA PSN
        </button>
    </div>
    <br>
</div>



<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label mr-5">Nama PSN : <span>Jalan Tol Bakauheni</span></h3>
        </div>
        <div class="card-title">
            <h3 class="card-label">Tahun Anggaran : <span>2020</span></h3>
        </div>

        <div class="card-title">
            <button type="button" class="btn btn-outline-success btn-lg font-weight-bolder mr-5">EDIT CONTROL BUDGET</button>
        </div>
    </div>
    <div class="card-title">
        <div class="card-body bg-warning-o-10">
            <h5 class="card-label mr-5 mt-5">Nama K/L : <span> PT.SSN ABADI</span></h5>
            <h5 class="card-label mr-5 mt-5">Luasan : <span>100.000 m2</span></h5>
            <h5 class="card-label font-weight-bolder mr-5 mt-5">Nilai Saldo Tabungan PSN : <span class="font-weight-bolder">Rp. 1000.000.000,00</span></h5>
        </div>
    </div>
</div>

<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label mr-5">Nama PSN : <span>Jalan Tol Bakauheni</span></h3>
        </div>
        <div class="card-title">
            <h3 class="card-label">Tahun Anggaran : <span>2020</span></h3>
        </div>

        <div class="card-title">
            <button type="button" class="btn btn-outline-success btn-lg font-weight-bolder mr-5">EDIT CONTROL BUDGET</button>
        </div>
    </div>
    <div class="card-title">
        <div class="card-body bg-warning-o-10">
            <h5 class="card-label mr-5 mt-5">Nama K/L : <span> PT.SSN ABADI</span></h5>
            <h5 class="card-label mr-5 mt-5">Luasan : <span>100.000 m2</span></h5>
            <h5 class="card-label font-weight-bolder mr-5 mt-5">Nilai Saldo Tabungan PSN : <span class="font-weight-bolder">Rp. 1000.000.000,00</span></h5>
        </div>
    </div>
</div>
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label mr-5">Nama PSN : <span>Jalan Tol Bakauheni</span></h3>
        </div>
        <div class="card-title">
            <h3 class="card-label">Tahun Anggaran : <span>2020</span></h3>
        </div>

        <div class="card-title">
            <button type="button" class="btn btn-outline-success btn-lg font-weight-bolder mr-5">EDIT CONTROL BUDGET</button>
        </div>
    </div>
    <div class="card-title">
        <div class="card-body bg-warning-o-10">
            <h5 class="card-label mr-5 mt-5">Nama K/L : <span> PT.SSN ABADI</span></h5>
            <h5 class="card-label mr-5 mt-5">Luasan : <span>100.000 m2</span></h5>
            <h5 class="card-label font-weight-bolder mr-5 mt-5">Nilai Saldo Tabungan PSN : <span class="font-weight-bolder">Rp. 1000.000.000,00</span></h5>
        </div>
    </div>
</div>
















<!-- Modal-->
<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"" role=" document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Control Budget PSN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="card card-custom">
                <!--begin::Form-->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama PSN</label>
                            <input type="email" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Tahun Anggaran</label>
                            <input type="email" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Nilai Nominal (Rp)</label>
                            <input type="email" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Nama K/L</label>
                            <input type="email" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Luasan (m2)</label>
                            <input type="email" class="form-control" placeholder="" />
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-lman btn-lg mr-2">SIMPAN</button>
                        </div>
                </form>
                <!--end::Form-->
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