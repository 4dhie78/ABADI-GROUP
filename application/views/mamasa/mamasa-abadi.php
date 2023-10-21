<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/mamasa.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>laporan pimpinan</h5>

            </div>
        </div>
    </div>
    <!-- Page Heading -->

    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">Bulanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laba" data-toggle="tab">Laba Resort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prestasi" data-toggle="tab">Preatasi dan Bonus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#lepas" data-toggle="tab">Lepas Percobaan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#jaminan" data-toggle="tab">Data Jaminan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pemakaian" data-toggle="tab">Data Pelanggaran</a>
                </li>



                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/16knYIHltHDmkomlqK5Uw3D5MgEm-WNzysdHbcpEGmN0/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1fEL43HlgrvW3osLRa1JA6P6B8DbVeZVgtuL0FcaavPo/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1WXgKtg1WZ-UwHaLUwngNvGl_j2jIRBAhH5BQ-hdz7z0/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1pK4GX8AYcbhTZvzJTFteW5HM0O4eCYpbTCD9578Cmn8/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1i1sqFw7tJseJ-D9ZJK0ZriuIDRKN228eiI-BUIVFJwg/edit#gid=0" target="_blank">Barang Jaminan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1lFvVf4G7pvXSJN0W9jX1ULuLQi8C51k39Swwdmbu_0M/edit#gid=2058850717" target="_blank">Data Pelanggaran</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSbZV6Vde6oUxmn0OlsZFwJwitIro2jITYYhICFPKZwHyh2OmxybD-XscouZ427U7-dQTas7Q4P3b3v/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQyownxdQy76aRNLwfED_GbBOXo99AJ-vJv3hdflCU9Y24rzr2rpvT409GQHkDvqPUGuy5bQ2kkjoC_/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRrGPYmroU6XQiZp1BESyY0MMI0bD9-Yk-56Ia8wATA2luVJk9ZwQPJUnCn5sWGkChFpu8nHlkiVcgv/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQbcPpLBOj9EjH8r4XttVLRVxm9Y7JzhXiPbHapyQwqPSkBdyDfiR0HdKr-JNxABliogsnk50FzxRPO/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRQjQcBkgF5hTAoBM8LnF-nolbLo8SwEmQP6dEzqvO0z2PO35s0pEt353cXJ8g3urhwrmA3jeT15WEv/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTXUtb_iGECKEorrxSgGeHCiBJgLrvnAgcAfl3HYDDD2Kq5wIL2xkWHLimBTUEOR-7iS05J94JF3yxR/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->