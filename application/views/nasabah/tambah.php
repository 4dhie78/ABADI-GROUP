<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Nasabah
                </div>
<div class="row mt-2">
        <div class="col-md ml-3">

	</div>
</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" autocomplete="off" >
                             <small class="form-text text-danger"><?=form_error('name');?></small>
                        </div>
                        <div class="form-group">
                            <label for="ktp">No Identitas</label>
                            <input type="text" name="ktp" class="form-control" id="ktp" autocomplete="off">
                            <small class="form-text text-danger"><?=form_error('ktp');?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamatktp">Alamat</label>
                            <input type="text" name="alamatktp" class="form-control" id="alamatktp" autocomplete="off" >
                            <small class="form-text text-danger"><?=form_error('alamatktp');?></small>
                        </div>
                        <div class="form-group">
                            <label for="cabang">Asal Cabang</label>
                            <input type="text" name="cabang" class="form-control" id="cabang" autocomplete="off" >
                            <small class="form-text text-danger"><?=form_error('cabang');?></small>
                        </div>
                        <div class="form-group">
                            <label for="resort">Resort</label>
                            <input type="text" name="resort" class="form-control" id="resort" autocomplete="off">
                            <small class="form-text text-danger"><?=form_error('resort');?></small>
                        </div>
			<div class="form-group">
                            <label for="simpanan">Simpanan</label>
                            <input type="text" name="simpanan" class="form-control" id="simpanan" autocomplete="off">
                            <small class="form-text text-danger"><?=form_error('simpanan');?></small>
                        </div>
                        <div class="form-group">
                            <label for="keteranan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" autocomplete="off" >
                            
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>