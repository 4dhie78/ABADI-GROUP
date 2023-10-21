<div class="container-fluid">

    <!-- Page Heading -->

    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/selayar.png">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>laporan pimpinan</h5>

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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1XhI_xUGN5Pp4_GjQanc5t3uNTOD1-pNfeBTyHtdiF7Q/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1h5ghG_5iODo9VG3Z29pA72WV1540pyBIMZiLhz1Oza4/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/12TCFKLFgCBdYEFGin-JPV4nycRkpAXLSjBtymquU7WU/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1mt5v2A_WUtca3zuTc88LfaPSvymYtusDaFtc1ZMCuas/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1dlGqUupBCI0f8dB7ZChcNjCY2du2vyfJ7gfpNPzvtQY/edit#gid=0" target="_blank">Barang Jaminan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1IrgZzVZIeonlH3nzxL9PgWYDRIv1ROxawFYxeMI_mHU/edit#gid=2058850717" target="_blank">Data Pelanggaran</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTcmy7rkQUbCO9Bq9EsGQ2SpyZgNlt_sjrTI-qLMNSek8jG6ciGQAXZktQmZMV-YVEpxMc4bbfkP4Md/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSLFutp30mmO_awYflKnTOF975XNSU0VxW16Z8dW0XivvAtAVucvT8TJuWMDVZyo8k_qUfsnl1WoM6e/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRmLUz4Ennp9L_4aboi1RHD-Z2eBg0XCK9adhf6zdt1sTu4k6DP03uNMxi9o9Rsrf5svhIXllu-4hUx/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRmdtoAMu-1VjU4xswJzox8OtX0mpvyh7rehc-WEETtP_A9aDDCob4yYqEKGDc2vMRIIzTlQY6RNbt0/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ9-cFYqrkKiujsRmZmmJ4iXpl_MCHt6zACtoEooRq99aGXOe5AExezNWDXzY7X0WwL9a8YpcMQjRKK/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQE_HoAsmz7190W44ghGhrFGbjPmDYOsQ1m2p-j_1us7LQZvC48nL8iD5_GjmwFda4Fwt9cNaLuyqgR/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->