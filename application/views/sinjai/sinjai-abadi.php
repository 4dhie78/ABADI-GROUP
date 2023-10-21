<div class="container-fluid">

    <!-- Page Heading -->

    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/sinjai.png" alt="">
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
                    <a class="nav-link" href="#pemakaian" data-toggle="tab">Data Pelanggaran</a>
                </li>



                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1wBfHGBfhOsREbVG6k1L0qt3DZonDyMZ2dCBvIp-_36Q/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Qaf8oOb5TtcQYT9ujImVMW6GMuHVZidKvtfAL6zB_HM/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1MAMO8KoqOAZ9nvFCRF1_pkgRuIU2xHqsbFF7HmdBp14/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1JM1MJXp985alMYYQpFiWM-UKu6YyfS4wI5sZLV2vJNk/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Vk-MmOIbnkBmwsK4P6a5SKzeJdkmsGl1rbnHRWYH1u4/edit#gid=0" target="_blank">Barang Jaminan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1KQsTAXLUdatKW-Cp7AXnfc3t8c1OMLl2TwpYIX24gn4/edit#gid=2058850717" target="_blank">Data Pelanggaran</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQlIVgaLJZrcHMvgThX9HeCx7108SAy7XrHGCZ8gwtGn68QV7KN2MlO0ASYWYUtc_wlAvwYqiAQWv_q/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSPE-q6LTrzPx9Cc3riaLwPFlGUpYZWo7W0w5GqVvp06lIuJoN_Z1J6V6lILEdIDbcHMT0gL_FGNu6A/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ZZAmfpXmB8i0GmPgfwx8V7oaaw9GM9rPyaKIOz36KJT1K8QxXlHI4hncPSNiE9glZ4BldxQppEHy/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSdlTLSf4RFZoZEVPmQYmueG_FM1kvXpWRLz5y3Y1P3WTuNyHyW9gmnjv5ojfKE4YGhANdLs9AqOodB/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ_WYRvVnLEAzOTttYiuM7rZS2QdAE-thrwraeo54l154OwnjsEJ92xmFFuh7hxjm0efXjrebq2WVHM/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRoJQjliorvwVCfL4HNybQ9QfXviso9htcAnAAn8cAESFQ3LIZDJabjCJuWHXI921UYs2dXuMYndLFD/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->