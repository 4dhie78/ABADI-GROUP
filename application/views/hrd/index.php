<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    
<h5 mt-2>data keluar masuk ijazah</h5>

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
                        <a href="<?= base_url('hrd/tambah'); ?>" class="btn btn-primary">Tambah
                            Data</a>
                    </div>


                    <div class="col-sm">
                        <form action="<?= base_url('hrd'); ?>" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari data...." name="keyword" autocomplete="off" autofocus>
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
                        <th scope="col">TglMasukIjazah</th>
                        <th scope="col">NamaKaryawan</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">TanggalMasukKerja</th>
                        <th scope="col">TanggalBerhenti</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">No_Ijazah</th>
                        <th scope="col">Tambahan</th>
                        <th scope="col">YangStor</th>

                        <th scope="col">TanggalKeluar</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ijazah as $ij) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $ij['tgl_msk_ijazah']; ?></td>
                            <td><?= $ij['nama']; ?></td>
                            <td><?= $ij['asal_cabang']; ?></td>
                            <td><?= $ij['tgl_msk_kerja']; ?></td>
                            <td><?= $ij['berhenti']; ?></td>
                            <td><?= $ij['pendidikan']; ?></td>
                            <td><?= $ij['no_ijazah']; ?></td>
                            <td><?= $ij['tambahan']; ?></td>
                            <td><?= $ij['yg_stor']; ?></td>
                           
                            <td><?= $ij['tgl_keluar']; ?></td>
                            <td><?= $ij['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('hrd/ubahIjazah/') . $ij['id']; ?>"><i class="far fa-edit"></i></a>
                                <a href="<?= base_url('hrd/hapusIjazah/') . $ij['id']; ?>" onclick="return confirm ('yakin akan di hapus ?');"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
                <?php if (empty($ijazah)) : ?>
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