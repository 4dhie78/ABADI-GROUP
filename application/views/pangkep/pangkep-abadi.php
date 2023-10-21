<div class="container-fluid">

    <!-- Page Heading -->

    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/pangkep.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Pimpinan</h5>

            </div>
        </div>
    </div>
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
                    <a class="nav-link" href="#pemakaian" data-toggle="tab">Data pelanggaran</a>
                </li>



                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1fLFNLIGh3rLgpjug3e7WQFIAWyQeoJl5YaJTVNrrVRs/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1X0VSa1J4B0GT6cZ6f_3C6sMfV8cGkLcWCah-hvNkMG8/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/13aMCIY9yzA6qmP0iwkzxtUEFTd_gHw-VhZSl0O5Xdzk/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1SmEQB9LbDhvssbOX3xTtM380j1oEGq8prhHD-eHRe2I/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Sm_rPVtyxnC06_84scC_2nG1S2G5iRl8LQFbr-J9xuY/edit#gid=0" target="_blank">Barang Jaminan</a>
<a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1DK6_yCvWL7yc2Fsw7_utKnIgduJDdAj854Vpmqvriv8/edit#gid=2058850717" target="_blank">Data pelanggaran</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWP-G7N2ItnnRQnmY_Qr2lMDt2Lr8YTCwZbQmafWaJ5OVE2HFiNp8WlWfLBrryM42DZAtMqjsY5sCk/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR_1Wg-9m_NW1uzXyjaYlU20QmvM_KzJJYsttYqZ8TqFVvaqalyQuyYPS5fgQXT1D59kOhkRIQzHJ-P/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRlvmVy-ygbg2B7qrS7M5CktTY2S51L1kn3rHenn6qJQPr8ADxGFU-w874D5zPbgaZeTidfB3WNYkgO/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJFhWdXkxwCO8CE8NAmubXFMG0WiZtiSzFAm6Fx9B9s24hXpnFEv4GNqJeOv9YwlkB8K-bnMBz7C8H/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTV4fLyVxap1Tk1ijjur-0uFtms-cQLvIg5UTlaL_a2_zAD6mFJsTcf5WoUC9SVxN0pHPKpNtknmj6Y/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
<div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQBJBpILPb39c-xCAVfJO9GS3xQnmNB6hD_2esJHWnjNnN4sARhb2WZb2MLLbhb9tI8ydfZJMvwqcAh/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->