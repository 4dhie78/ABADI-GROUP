<div class="container-fluid">

    <!-- Page Heading -->
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/sinjai.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Recap</h5>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#recap" data-toggle="tab">Recapitulasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pinjaman" data-toggle="tab">Pinjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#simpanan" data-toggle="tab">Simpanan</a>
                </li>





                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/19HsE2877CMIPDtsFvghzp0sqP0OzjsjMjZeR5OMvrk4/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1kKlvlxZEeRAvF10M-89TmriLfmbJ5mPHPU10LpS7Mm8/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1kKkmtTnDp0njRC9FOQh8hgTnMhUgPAMGffMHHWeFoDI/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1AXRazbKoYfwJPPOBpsIeJxpdGtJz75nYzNG2GKSxcdE/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1CqdnzP5fHFRj11kS-aHtqbBgaA3IoT-4THQRh8iAgas/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSFMO8TiAELepufD9c76ZxRDD-fE97YjLjLBZBUZx69JkHqNp6D4bGuS8yb0XKhp2isuwMUL2pBvsrb/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTm3Z0g3XLQmmra5RPgMZC_SUWxYsczZc3l7Hq5UpqyVO3_GcZFX0rEuJM3OMe5Z9nPEpCIz2P7td2U/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSeeBZOw6AHgjn0VPOVg_m29EtFN3VY6OULyzS91AUITCUuL0MZA_xEyQtPvy-DViDr8lP651EK1diJ/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->