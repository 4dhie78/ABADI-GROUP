<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/anoa.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rT0-xGwqmUXfjZDkCmTHKg8f6RtZwcrtafNkBd7yhT4/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1fl_DSKQbaSq9yuAY41RozKr3IjXNhTuDzmPKYmPr0lo/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1UhYxDsgZuoqUokbpaZfki46mkYc3Xkj5zYLCZm3IQvA/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1G9ggbQVZ8fuNAb6oGv_I0uIa_dLUOkaIME4wVrvyE1s/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1eKHeXf7My_PMBtXgeAB883KUieN2L-BFYhXkSCyKank/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZFh2cgU_1x2LkvoE965OhEGu5rCPdnjcYN7lm3KpRDA/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/18sRatwBG0B9X0Tlc7zLZ3zKQEW91nRANZea4MqF8yBs/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSrXkmZbwNIA0HxCmvTxU_33ul0Bpy5ltjPkpiOtbwvezQRBC6JSEZMd7C8cl8-9OKY9UYc_qLvThmJ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRPlXmp6AAQV4MRcsaXtfygxwIYgVR4r8cJyPF6zoszWTYTu3ZoHVHmWyzudbVRJ4OVOWiR3UfV2NxC/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQeLbV_GGHMrf9wdz-M6r38bs0JZZrbxsly8RBhOsZ4xs8kZRJYWYCpaQo52QuT4I8N6ojrxqosSIFK/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRzSKKCgo5jN073C_G4lq1iisEqQu9hH8us3SN4UKBh6iAvNd4H3B0Yc7JapQDdP8d2eqj-tBOkmAm7/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQSmGBiCQH26KOq7CRYLLdlkRnS7s0eVuQUQGvPS-V-yAekUw0uKTH3sgIUWzlUt_DDJoDwT3PRQKiO/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRkMIC3bjd08D81LZlMv46i4mprAsFd9lRWeEaUB1Wk97CHTlz4gsWRI7mgkRIty2D09ReCsbnTkhRX/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTHGX5zZCYlyKC3904KcGEqbAl4GTRm0ymS0vF7Z_EwZ5TzZ-7bngjV0j8F6G-xtvs-DyUVOatdQapb/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->