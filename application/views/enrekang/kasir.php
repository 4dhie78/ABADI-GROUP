<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/enrekang.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1iAqB4Dgji1RAR4lCGxMwNsqaj2w-b5-u3cu-3ojzegI/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1EEa3uH7IJ7K0BPFibr39npfpGUTLkTaqkp-BG5_MPtw/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1QfIH5gcYiLgeabNwr1Psvco59DEOe7r3GCZ51PhUqjs/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1l0qTOC0Um96AwuCPjqdfp3Td-Qw29oSSDQnu8Xc0TCM/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ra0OYz2PqBwTk9ZVCs40psMBfXhi2Z64kZHSRjOvqwg/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1F6uugAOLK5N7GkHOehKS7WgJf2uzZNp8r93qtF2gGgE/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1BsF8m5PFRmlJd_weOpbwl3E4ncrZzjv-hDfmOX6dAZo/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTpMFSMTSWGivYg3GrZwM9AIqHNfQBs8FKYzRkdlrseOgw8DWhCOHctrVe_3-a1o7vKc6i7Jrzv7AS6/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRoWWM2Gi3jqihcWarlUUGLfrqc1U5e8CxLMvc8oU7JajmyjKYLKnyFBo3vw4z3JzAHpIoDgCVXYy-I/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSxoMmATKZw3n_C4zwcogbJ77EHZEP3np7iDZWRyTMwTsmAunvXTo-udUoSkmgZn9DqPtM-wmMtlcCY/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQWQQ7JTruMVp7XhoNwJchCmed6AF3Dte68FAeu9jaG2I9HEmfhabYAzOb_F6BofvbVuKWRxCFdFhY8/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="900" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTaXVMU1Jrl6PkInMPiq6jmzH0cdru2fcuMxF6XW-9GqRgtyNPIkrtZTbWDTVffGIh_hi26Q4xz8e7s/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRTxKr0WxiZdONzQgilZ1qdvMDclrcl5ydDm4OQZMpvCYRWPZPrX-9EoJY97E7RMmLdwPROV_0s0fqe/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSizzDg53_82QjDKDwXo7R_X1ZZ-hALPcQkybWVgcVqehtCPUq_4sHlX84YjUQwDmJOAmTdmMg3rSkv/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->