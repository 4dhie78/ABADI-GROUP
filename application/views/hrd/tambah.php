<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">

                    <form action="" method="post">

                        <div class="form-group">
                            <label for="tgl_msk_ijazah">Tanggal Masuk Ijazah</label>
                            <div class="date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tgl_msk_ijazah" id="tgl_msk_ijazah" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('tgl_msk_ijazah'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
			<small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="asal_cabang">Asal Cabang</label>
                            <input type="text" name="asal_cabang" class="form-control" id="asal_cabang" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('asal_cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_msk_kerja">Tanggal Masuk Kerja</label>
                            <div class="text" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="tgl_msk_kerja" id="tgl_msk_kerja" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('tgl_msk_kerja'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berhenti">Tanggal Berhenti kerja</label>
                            <div class="text" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                                <input class="form-control datepicker" data-date-format="dd-mm-yyyy" type="text" name="berhenti" id="berhenti" autocomplete="off">
				<small class="form-text text-danger"><?= form_error('berhenti'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" id="pendidikan" autocomplete="off">
			<small class="form-text text-danger"><?= form_error('pendidikan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_ijazah">No Ijazah</label>
                            <input type="text" name="no_ijazah" class="form-control" id="no_ijazah" autocomplete="off">
			<small class="form-text text-danger"><?= form_error('no_ijazah'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tambahan">Tambahan</label>
                            <input type="text" name="tambahan" class="form-control" id="tambahan" autocomplete="off">
			
                        </div>
                        <div class="form-group">
                            <label for="yg_stor">yang stor</label>
                            <input type="text" name="yg_stor" class="form-control" id="yg_stor" autocomplete="off">
			<small class="form-text text-danger"><?= form_error('yg_stor'); ?></small>
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

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>