<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <h5>laporan laba</h5>
    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">peredisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laba" data-toggle="tab">kepala divisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prestasi" data-toggle="tab">koordinator 1</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#lepas" data-toggle="tab">koordinator 2</a>
                </li>




                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Q3ovs4IAwP36EZn84dHV4KULOcutvl4SAK2HuMxoMrI/edit#gid=2094125099" target="_blank">data peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1togkOsEDPr5RTww8YI2fvcihcxTB16PFeRMJThK6Wwk/edit#gid=1697745861" target="_blank">global kepala divisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1xjQa7u9u_Cn7HH1sdVDlug8qMXeagEqNaboq2KPeoWA/edit#gid=1697745861" target="_blank">globa koordinator 1</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1c1eaEtFl98jo5I8gIDq5s8QnuraVhWFumECVntC81_E/edit#gid=1697745861" target="_blank">global koordinator 2</a>



                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRxls6ZmgTrwkEGSDtEmrkQgV2dT8ykb6uPKVZ2wLxu0GEy5vTWSgTYGnT5vEEW76zhgjtDGDS__cjz/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRPSNxwO7zfVsbUXkIZArad7MJRwiYtD41Dy4iZZiuctPcQy5BCIZNkny41d0hGgSpzlt-rIXXQlKy5/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRcS6f2Jp_mUjWUGuQu3cUOmLNFvK-mvMrw4nbNVZmJJ8b6BhPz9kw4i0p9uQ6t1EnQgwZ-deLBYUIV/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR15CJ7BovL570wLLAow-zWFkyB10MbntQ3a8-XtAtDtDEBgMEtuAh-zs7le-gyEE2TH2jVm1GGhliO/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>


        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->