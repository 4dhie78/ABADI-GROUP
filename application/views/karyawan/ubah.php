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
                    Form Ubah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $karyawan['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $karyawan['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tanggal_masuk" id="tanggal_masuk" value="<?= $karyawan['tanggal_masuk']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik">No induk</label>
                            <input type="text" name="nik" class="form-control" id="alamatktp" value="<?= $karyawan['nik']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $karyawan['jabatan']; ?>">
                            <small class="form-text text-danger"><?= form_error('cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="cabang">Resort</label>
                            <input type="text" name="cabang" class="form-control" id="cabang" value="<?= $karyawan['cabang']; ?>">
                            <small class="form-text text-danger"><?= form_error('resort'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keteranan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $karyawan['keterangan']; ?>">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>