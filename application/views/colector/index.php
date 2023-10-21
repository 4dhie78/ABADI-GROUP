<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">


            <div class="container">

                <div class="row">
                    <div class="col-sm">
                        <a href="<?= base_url('nasabah/tambah'); ?>" class="btn btn-primary" hidden>Tambah
                            Data Nasabah</a>
                    </div>


                    <div class="col-sm">
                        <form action="<?= base_url('colector'); ?>" method="post">
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
            <h5 class="mt-2">Result : <?= $total_rows; ?></h5>
            <div class="table table-responsive">
                <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Nasabah</th>
                        <th scope="col">No Identitas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal Cabang</th>
                        <th scope="col">Resort</th>
			<th scope="col">Simpanan</th>
                        <th scope="col">Keterangan</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($nasabah as $ns) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $ns['name']; ?></td>
                            <td><?= $ns['ktp']; ?></td>
                            <td><?= $ns['alamatktp']; ?></td>
                            <td><?= $ns['cabang']; ?></td>
                            <td><?= $ns['resort']; ?></td>
			    <td><?= $ns['simpanan']; ?></td>
                            <td><?= $ns['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('nasabah/ubahNasabah/') . $ns['id']; ?>"><i class="far fa-edit" hidden></i></a>
                                <a href="<?= base_url('nasabah/hapusNasabah/') . $ns['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt" hidden></i></a>
                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
                <?php if (empty($nasabah)) : ?>
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