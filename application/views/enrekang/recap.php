<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/enrekang.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rv200I84XHXctG58jgzbLott3oLWrRpDojQ_Ug58P1U/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/18ZUg9bNpmWILon_hXQCspezColI956K4zB4mKKWQHNc/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1JBy20v5DpqjZPjTgNvI4-RtqxHPsWFi0OCw5Gvf7z2Q/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1eGIWiCk9bhP7Ix7FAgsx-8uKBo-ubHaCN6l2w-VRFxY/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1X9TRe8_2F7fWmp8DwQO7xN3-FCSuen71cabTzUVAFyA/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap" data-spay="scroll">

                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSMfFgSEZa3vPuuonlfiC_LlehWxeeGmlHozX-pBbOYs-XNhZlNHEeZkKjKxD9grVAFBOoGxYYRaFsF/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1050" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTtbE-enyM2G_FC9D2HhDpflYI-agW6DhLKG3xrJWmu0jFrLMtvU5_ahzZzWbH-KLVbwcEpzhr28_7j/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1060" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRtcSTp85KHgqeCNqoSZQ4FkLHKUSmV6x0MhK3DiCuN0s9DsHwRyptQClwmzvFZMYsPqJAfVywVDDwH/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->