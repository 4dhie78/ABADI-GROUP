<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Nasabah
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $nasabah['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $nasabah['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ktp">No Identitas</label>
                            <input type="text" name="ktp" class="form-control" id="ktp" value="<?= $nasabah['ktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('No identitas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamatktp">Alamat</label>
                            <input type="text" name="alamatktp" class="form-control" id="alamatktp" value="<?= $nasabah['alamatktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="cabang">Asal Cabang</label>
                            <input type="text" name="cabang" class="form-control" id="cabang" value="<?= $nasabah['cabang']; ?>">
                            <small class="form-text text-danger"><?= form_error('cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="resort">Resort</label>
                            <input type="text" name="resort" class="form-control" id="resort" value="<?= $nasabah['resort']; ?>">
                            <small class="form-text text-danger"><?= form_error('resort'); ?></small>
                        </div>
			<div class="form-group">
                            <label for="simpanan">Simpanan</label>
                            <input type="text" name="simpanan" class="form-control" id="simpanan" value="<?= $nasabah['simpanan']; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="keteranan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $nasabah['keterangan']; ?>">
                            
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>