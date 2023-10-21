<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Role
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $pejabat['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nama Pejabat</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $pejabat['name']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role_id</label>
                            <input type="text" name="role_id" class="form-control" id="role_id" value="<?= $pejabat['role_id']; ?>">
                            <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                        </div>


                        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>