<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>'); ?>
            <?= $this->session->flashData('message'); ?>

            <a href="" class="btn btn-primary mb-3 tambahRole" data-toggle="modal" data-target="#newRoleModal">Tambah Role</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['id']; ?></td>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>"><i class="fas fa-user-check"></i></a>
                                <a href="<?= base_url('admin/ubahrole/') . $r['id']; ?>" data-toggle="modal" data-target="#newRoleModal"><i class="far fa-edit tampilModelEdit" data-id="<?= $r['id']; ?>"></i></a>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>





        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Tambah Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="role" name="role" placeholder="role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>