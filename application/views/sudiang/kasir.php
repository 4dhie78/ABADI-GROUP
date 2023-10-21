<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/purnama.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Kasir</h5>

            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#setor" data-toggle="tab">Setor Pusat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bon" data-toggle="tab">Bon Bon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gaji" data-toggle="tab">Daftar gaji</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#transport" data-toggle="tab">Transport</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#biaya" data-toggle="tab">Biaya Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kas" data-toggle="tab">Laporan Kas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#expedisi" data-toggle="tab">Expedisi Karyawan</a>
                </li>




                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1vzRJNtwslcwVYpVus7KNxqqS2g_sQl0eKgjvG2C_7r8/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1vtMrTq7hvosPPK2R_I4EFDJtz0lPmwit1UQfm9Qvqas/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1niV-7raruarTQq0VXgQQrImx7DVGUdbSFPWRAFFopL0/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1RmkEvMTv3V7K-LbX5bYJj0XojRekgkB2AU3Pu8KO3l0/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/12pvFh7-aOrtSBxnEMvJYmodOQoei-oQoFuNrB-rh3mg/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZW42OzlHMc08w7xwmmQYRoTqSsOFgj5dg7fWbwOi0iw/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1cmw7o6939aOkltAJxprFQ8HqGCkyP3Sxfo3UH_HHh5Q/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRHnCHwiPn747eiBewb3lGM5jZvSr3EmhxnOR6zC4gSswVrcxBBmdzi0kB7snPQez8JQOkRscWHLABY/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQYH6jo7bzQcxKpVaTVcahYudpKo6x43Dgftkpl442GidIFMfhubAar79kd4wxtbh6dEToOhg23lwsz/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRQ2iCIfVG5YWnTTKiD30pyo0NFFphPX1UeTWVrIYspEHpdYVJ1B41ynU8D4slOCp8ledkh_4zRYcpb/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRoRPHvqHgCLFxewvbOMl4Ey0s2bbWWgrq4PmrYQxm3kQRZSP7TB4uiTpe5Z7767C9tb-mXEKzvju4c/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="900" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ9GVJ5KjZx3Yux-ZhZIxYc4DiZ-HmbZ6rZUpMaJH4PB8QianZIRM_Cq0rICybdbKT7XaMZ7oLqNoB0/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTGL5V5usiqnkUBUBYipc0nDVI_mdA_rfKLb9uLrHHGu7GUmAHalembHFLkvqniPPpG-9U2K3frqExU/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ55hxqrYr6iftr-TOYFKiXEM0N5382Qp8p8_GUzItvaXy3wYm8k2nwORYMCx1nIISXZZCYkOTbzA59/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->