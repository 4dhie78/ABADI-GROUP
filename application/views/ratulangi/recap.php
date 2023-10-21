<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/purnama.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Tnrmf-EbJ3LBtIs47iP9vd_S1Ir_pT_ROto8vT8snUQ/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1bTGWcOZy4fdsgd2lAD3_Otq9E3aSEhruuR-C0dOB5W8/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/10MilpDbMyEyrn7tJ4Hq4JX1914mxSphrItXHnEi1QFo/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZRw-QPCwH2pPpgOK9FuABJWPdD1ZImTT2X_pE_wDeEQ/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1e8C0cwhXDFr7mavFjUNk59pRNCpTgMY5LMOKVgA2J7Q/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap" data-spay="scroll">

                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSgZ59W-ZiZ1LqXlhLPdsiZpkLYxlYCuDiWt8cC6PvZ4aih6nq8IdfwWf-603avAiZZPHYGh2x5Jcph/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR72IpOC1LHiy2F4o2qvZvFs8evnM94vvZXdFc8O9qn-GB--rJxQ24Z1_Ule_Mt1o_fUbBdln7Rl9om/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTxXMT_xRnRr6fIRuPfReBtU7FY8XKFtd3qQVefRG_FbjoIDoOElPDGthgYwPQ887NKYyTRVC6Y1Ov6/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->