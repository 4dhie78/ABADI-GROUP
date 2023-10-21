<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


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
                        <a href="<?= base_url('nasabah/tambah'); ?>" class="btn btn-primary" hidden>Tambah
                            Data Nasabah</a>
                    </div>


                    <div class="col-sm">
                        <form action="<?= base_url('pejabat'); ?>" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari data nasabah.." name="keyword" autocomplete="off" autofocus>
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="submit"></input>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Asal Cabang</th>

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
                                <td><?= $p['jabatan']; ?></td>
                                <td><?= $p['cabang']; ?></td>




                            </tr>

                        <?php endforeach; ?>
                    </tbody>

                    <?php if (empty($pejabat)) : ?>
                        <tr>
                            <td colspan="4">

                                <div class="alert alert-danger" role="alert">
                                    data yang di cari tidak ada!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                </table>
            </div>
            <?= $this->pagination->create_links(); ?>



        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->