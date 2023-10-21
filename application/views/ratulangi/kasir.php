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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/19zzExSYXzPKCVBixEwbAjMB2wcxODUGoPNC7Q7chgCE/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ixsTcMYIag6llvTwCy9SUArjNXRyzKKbPdAzri92wIQ/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1_MIMxb0ZCO_YW6nY0R-hu1xi_j8g7OWC4bjmhSj5GjM/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Z4ONWStb9rhD6wNyjwrukjCrETKoZUi_YdzZArIiW0I/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/198A_Q0mYdP_ergFhC193RbXanytOVmTWRB_xAXDicxQ/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1lexq_SdbPGKwtYcsZDC1bX4Xx5Ew9hbXIxj5kVWVuno/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/19pqhNERSQ0wdBkLWTs9jUztVCIqtMhVjQ8Bnldq6gw8/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQLTGSi8pDDOvRWa4tPlJLgvBNIemiFd80aAiX6BEp5Xlf6A87QLEdAq1Bl-IyShqrSsMLutaPVDeIm/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQZ62acgw39oVAWHJ2VrBvG49rKE7JugqU1mNf6hwqdiFf8FMczVKMqm2N9loFsI_qq1x-sc3WzvxVs/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSO59YVblVgjk4dI5w57jg7RX454PXTVd4kt4AV0t8LoJ5M5TDvPnRHBPEGTr3Yb3Udxzub6ZcHam-q/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQMrT9VnOxqSPiLBEQVbjTt0OxziLspD12qNDeF0K5L2X_WUK42alAPcTA42SbthfI1w2tqNgjsE4gE/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="900" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRmNA29pQsqUpweZ6gLaEjyC1NEW2GbaznpkYgf2uIUcTIjV53f9GjLSIbMFVDeHuI04O7Qydl_cGWu/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTJGCrZ1V3joUwXT7ySWzzhQEhydCunBBYPiRPRwl0YMZgQ-IvNg8eQ6Aghy69wxEEGnutl1sLrytqv/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRU2jSq8AoF4aH8EWWqC2nqXuOaZgq7NaX0okXyoPDoNHTVYVtHZ2czFlpA6YLyuvCUVhQV64pUScnE/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->