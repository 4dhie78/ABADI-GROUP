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
                        <a href="<?= base_url('karyawan/tambah'); ?>" class="btn btn-primary">Tambah
                            Data Karyawan</a>

                    </div>
                    <div class="col-sm">
                        <form action="<?= base_url('karyawan'); ?>" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari data karyawan.." name="keyword" autocomplete="off" autofocus>
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
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">No induk</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">cabang</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($karyawan as $k) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['tanggal_masuk']; ?></td>
                            <td><?= $k['nik']; ?></td>
                            <td><?= $k['jabatan']; ?></td>
                            <td><?= $k['cabang']; ?></td>
                            <td><?= $k['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('karyawan/ubahKaryawan/') . $k['id']; ?>"><i class="far fa-edit"></i></a>
                                <a href="<?= base_url('karyawan/hapusKaryawan/') . $k['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
 			<?php if (empty($karyawan)) : ?>
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