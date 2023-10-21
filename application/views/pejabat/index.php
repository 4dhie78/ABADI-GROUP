<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>

            <?php endif; ?>

            <?= $this->session->flashData('message'); ?>

            <div class="container">

                <div class="row">
                    <div class="col-sm">
                        <a href="<?= base_url('pejabat'); ?>" class="btn btn-primary" hidden>Tambah
                            Data Nasabah</a>

                    </div>
                    <div class="col-sm">
                        <form action="<?= base_url('pejabat'); ?>" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari data nasabah.." name="keyword" hidden>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" hidden>Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pejabat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pejabat as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['role_id']; ?></td>

                            <td>
                                <a href="<?= base_url('admin/editPejabat/') . $p['id']; ?>"><i class="far fa-edit"></i></a>
                                <a href="<?= base_url('admin/hapusPejabat/') . $p['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt"></i></a>
                            </td>
                            <!-- Ntr Ya sy ubah sebagian coding yg keliru -->
                        </tr>
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