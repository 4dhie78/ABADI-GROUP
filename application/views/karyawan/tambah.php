<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">
                    Form tambah data karyawan
                </div>
<div class="row mt-3">
        <div class="col-md ml-3">

		</div>
	</div>

                <div class="card-body mt-0">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" autocomplete="off" ">
				<small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tanggal_masuk" id="tanggal_masuk" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('tanggal_masuk'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik">No induk</label>
                            <input type="text" name="nik" class="form-control" id="nik" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan" autocomplete="off" >
				<small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="cabang">Cabang</label>
                            <input type="text" name="cabang" class="form-control" id="cabang" autocomplete="off" >
				<small class="form-text text-danger"><?= form_error('cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" autocomplete="off" >
				<small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>