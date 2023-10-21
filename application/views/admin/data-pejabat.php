<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>'); ?>
            <?= $this->session->flashData('message'); ?>

            <a href="" class="btn btn-primary mb-3 tambahPejabat" data-toggle="modal" data-target="#newPejabatModal">tambah</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>

                        <th scope="col">Role</th>

                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($pejabat as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['role_id']; ?></td>

                            <td>
                                <a href="<?= base_url('admin/editpejabat/') . $p['id']; ?>" data-toggle="modal" data-target="#newPejabatModal" data-id="<?= $p['id']; ?>"><i class="far fa-edit tampilModalEdit"></i></a>
                                <a href="<?= base_url('admin/datapejabat/') . $p['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt"></i></a>
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
<div class="modal fade" id="newPejabatModal" tabindex="-1" role="dialog" aria-labelledby="newPejabatLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPejabatModalLabel">tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/datapejabat'); ?>" method="post">
                <input type="hidden" name="id" id="id">

                <div class="modal-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="name" name="name" placeholder=" name">
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" id="role_id" name="role_id" placeholder="role">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>