<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashData('message'); ?>
            <div class="card">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $ijazah['id']; ?>">
                        <div class="form-group">
                            <label for="tgl_msk_ijazah">Tanggal Masuk Ijazah</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tgl_msk_ijazah" id="tgl_msk_ijazah" value="<?= $ijazah['tgl_msk_ijazah']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" name="nama" class="form-control" id="nama" autocomplete="off" value="<?= $ijazah['nama']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="asal_cabang">Asal Cabang</label>
                            <input type="text" name="asal_cabang" class="form-control" id="asal_cabang" autocomplete="off" value="<?= $ijazah['asal_cabang']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="tgl_msk_kerja">Tanggal Masuk Kerja</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tgl_msk_kerja" id="tgl_msk_kerja" autocomplete="off" value="<?= $ijazah['tgl_msk_kerja']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berhenti">Tanggal berhenti</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="berhenti" id="berhenti" autocomplete="off" value="<?= $ijazah['berhenti']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" id="pendidikan" autocomplete="off" value="<?= $ijazah['pendidikan']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="no_ijazah">No Ijazah</label>
                            <input type="text" name="no_ijazah" class="form-control" id="no_ijazah" autocomplete="off" value="<?= $ijazah['no_ijazah']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="tambahan">Tambahan</label>
                            <input type="text" name="tambahan" class="form-control" id="tambahan" autocomplete="off" value="<?= $ijazah['tambahan']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="yg_stor">yang Stor</label>
                            <input type="text" name="yg_stor" class="form-control" id="yg_stor" autocomplete="off" value="<?= $ijazah['yg_stor']; ?>">
                        </div>



                        <div class="form-group">
                            <label for="tgl_keluar">Tanggal keluar Ijazah</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tgl_keluar" id="tgl_keluar" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" autocomplete="off">

                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>