<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/pinrang.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Recapitulasi</h5>

            </div>
        </div>
    </div>
    <!-- Page Heading -->
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
                        <button class="btn btn-primary dropdown-toggle md" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Tb2Ljb82rwKCckDRDQKNcTGMEqy2y1cLHqhKHoupDp4/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1AK8LBtXB-bQtrcU8dRckkgWrSb_mr0LpwQ1Ya4i6LCs/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1dd8zoHOC25D8RrHCVYaj7LO1Gqudkwkw5knouHjrQ_A/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/14_0vneuUoW1V20dmUJ-5ItjT-bFLQpLE5y7dQqcOAPU/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1TzbEP3Y3xe2aN_UUMETDi5vHFIs0MIGHkcRwTlcVT8M/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap" data-spay="scroll">

                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR-sRnONUNh2fRU8ZpTJXIaoPD_fG-CVTsA5QJ0cebXcEV3d180EfjecvinVLjJZgF_ffti7MlM4tZt/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSayX2QnPL6z2717OuiXZAQLag91EmU-HtyHMczQ6pXmMICMvVcn30d1cZTIIcYzHXtzz11QA5SSLwI/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1060" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vST7a43mmyDve__5gIW6DqWxmVBxnSmzriNFVxLrAFXEjh_bVSYE6GcZuFsyiA1Ne23UbfFClmJQv6k/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->