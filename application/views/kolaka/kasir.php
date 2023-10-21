<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/bumi.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1dHtq7pekjxNqgUf2gAiEfb4cGlUoMoqtfBiibehi54c/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1_gIRhLHY_GF6Tn822nz6WKhmZhvjAOiYXts71GGmRV0/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Rl_OzrdcYaGbY9VXsLJ14jqMwxamtnmyzfgdTRaM9gM/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1uFM9uB54MlC0oinSFzxzZFpZ1vIcdn_2grL6Ccv7znI/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1GTamAbeyzIV5nAY5HniJv3Z2PLluzfu3TzyslCmNPc8/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1A0gb7UokrSTKyXK5SN1QfCRhkTLVReYiiEXsw8CSio0/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1OaTZx-iXNhGHOGcEM9oXI2kx5vEIy7YN54e3arzJ6nc/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT7BKXkkGQjXmLlFaz_Gj72R7qmYbSfbcCrPJ0V7IBbTUW-7mumOqXyNusr4G94uzpw2QGp1sEn9tve/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQSu_musUSA_qRBYwujSZhE7bOhyOiQ1Y-H7lUgfvSx0FWEF9MYwxKX8srP2zxCJ1VbVdTy-8OdGkc9/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR0j73oMXMbmgPYNUzKsgkEgRrLQgy28iKF8KKeFGfMjXSz6HTYe4SNy-34_H5w3rsHgHOGqjj9XkYw/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSVs1ium2T44MKOrLisIv8_quZkwS1b2kwiVaeUsPGmqX79TgOuW3cNTmSEUZz7V0GlFmSZJbBOAbYz/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQbGQlwLfwP_JXmxsbQj3RFXVpsP_AbrfCQF78xcLGyHTcgFN2Vn9eQfZzATmvSnZpqbJKZBiGgveHS/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSaVJ4z6BydQJKsXTX1T_AANH9b-KCrhUlawzFksMXbXpI1HXlEFARXmEL8HQcsZqTN0pNMFFi0hjSu/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStZFjwAJ0GY9GGEpbTLfva9zuUjgT_OOMNJx2kDEOhvKSoQFiV67Vu4uin5k4dT2TTstj2PtXaJX7l/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->