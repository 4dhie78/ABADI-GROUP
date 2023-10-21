<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/seng.png" alt="">
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
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZkHLx83RoHX-xCY-Su4LpFuGkhhzr564UmIAPb-K2Fs/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1LyQIpBnr4g1xGejqKJWlxL448M5bo5-8PiDSIAFbdAI/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1CczjxmxVpy_8Wl57hA-F9VN2HHQcuXB0dgACB0SmhhQ/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1H0DGqCCfdStKngCJC07XRNB2uIGnFZ95uW1ueJBHHC4/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/14RACHZw6IVsqQs81haF3Nqg9PZemGwl5-S9jKro3fm4/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1EqS7u7u_rUWswf0NyT9WVz84eFi20LpCc3bNYoF7uDs/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rcH6LqSmNOVSJXjTdjZU2ZoH2Py6BmJEsrKny4y-7x4/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTbzKwKDNfTET0yT5dFbkqn8TDBnwoMyZZdPwtS8-W-92q5iEvr5J9NNQxhp2RPh6KeATTmYYM8My3_/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQmcF7dku72vyouD-cmPW1xrYSLMXkaKLWzeQp2-TlydoylFAN18mxhFxXQEdTqEbMsnmbEJrsnHySK/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQu_2acOfNS5Pizg3pM8JSLlPkOForqLU_cjUSwno0u4DVM2HAxzHMAZGEKgZSoiTAZA3voKgTlJsph/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTv_gYe5WgacZGuKtTwj8xIsamNhySeVBiB1_9kV_G69KbiSidQZGIwMICJHj0gMPgy52cqPQEb-I7m/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSxU9VzIY9GTKF5hJzse80KdhX8DCxuAN_y6FnIM6Boc-BtBh9uKqPn-RoPvGlGdCujvDuT1jvv_ij7/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSDu2ryMZNvzDNOR_H24JBUkn2jYJofmLNjWuRgUDRBe-rKQDzFu2uGqrSOlwADh5oy4h-yfTm8tTEJ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQTWhG2GCOv3zt24UL4TDgyQhxYEHWblNk1YGrDgdpNQL7BqqieGo1f7wuR0LFdP5FmZwTeKkdr2IqL/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->