<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?php echo form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $user['jabatan']; ?>">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                </div>
                
                <div class="form-group row">
                <label for="cabang" class="col-sm-3 col-form-label">Cabang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cabang" name="cabang" value="<?= $user['cabang']; ?>">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Gambar</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-3">
                            <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </div>
            </form>
        </div>
    </div>