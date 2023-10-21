<div class="container-fluid">

    <!-- Page Heading -->
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/sinjai.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Kasir</h5>

            </div>
        </div>
    </div>
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
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1fUgs-N4EGjrT78BZpWkJ0xxU98bl5WigoBRCQ8Lk7io/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1jjDrPc6jNaxWi7tF3HvZK9eexxcWmakIKctgHSS3p_s/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ckDsZhS4lFQfZzYmuc1QRA4l6x9DiHUsiF5CJ2P6Klg/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1j6UtGfbRRFfqhxZZvwlKDU213tuwflfaVaTKgX0OQmU/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Z6UhCcDiNqw9T1fttSR59-fcYO1kCV2errcYTOGHdyI/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1vFl2MJTA8Kvqu6ZXYQisJw2LGexYYcualjWWsdY22ds/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1LeT3ghxRnGM8n0c1CLwAZV_zlinqYpMdBkhtqbGEWMw/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRm_qb5VrBXPD0lqk-5anxKds1IesOQicNKBZ87wCbXGKrcode23Z_cW9shhL7bHT5Pv41SSlCmAT9Z/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ4u8F5nKxmyZhnGKCbjB2CO8oecnl3RElIhZni18bCQc9ZOyxeMyWcwmUaIVa-00iy_lsNvEbVgeoz/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRXyHLjT6HVvllnFS5i-cZjpTvIV7a6_2mkEQ9IwnKB6CtmN0z-0pFQkYZyeVesQ1n3z_kXcs2t5KN9/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQLH3POcIPWrEBYLlmqj-q35BKFnVfghhDqZSNY4GZTC1DVtQNtngCaBZlCV2vaLStrrm7smZ79gMZr/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTo2tIn8OXKcl8O8EOMdhWC6JqfR6df_fgjrzTKvFDOwjQS_VouzejMi--WBRTEG1xog-jCGxR3jvEG/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQU6BcRiC4oxYf_aT0v0UjxYpjhoPj4W-Pb3tEWYDPh_AdV14vLkIgfHhLXca_CpBw4DTrjb30xGY-n/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRxOfvGwk_u-2PMciaLmy_NRTg9gQ3PSdcOAop4ZN7p5wObOG6mIombIrXhrfny4Y3cq9axBeKMdYu8/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->