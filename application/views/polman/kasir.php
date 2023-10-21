<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <h5>Laporan Kasir</h5>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rmVvisYT70INV23MS8meHs7_0z5NPdVfrW8uFKjWXEc/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rvicahlzZRoCIb9y4KNWSMD2uf9oqGU5IsRmrWHkpFk/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1CCZ2irt48i05S0Oo9UWGtxEa6qGTgim1Cw1R5YRCVY0/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1nx-0Wn-1QlhLcFqG4SimrrhXIIe5jJnM5JU6Y7TYK-Y/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1T7j1iGQQNtPyd0zu-0bCMfQ93NarEHIwPFYmIeyyjLA/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1nWuPAdz_PzjApW8d1AM0xUB4WKcMdmoLEW2lbK9Ws7I/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1TwEH29aO4SpDPhTH01aHLCYW_auwisE6sWmLSB5ZLKU/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQp_oikJ5temEXHsg-rQH4frCnMa-apsnKQbWTN8-E6_b4ZjGqKRlcFLzhjNN1_F1jAZmM24DSu6iah/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYgxhjBERuOqLCezT31YBrN1CCvc74XSnz6OHXov916X6W4QMAyfDiKbX_eG3DpuZWtnmB2F9FD3EJ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR2KO-nASbbXEDKl-zHfMz4dLdJHY3JUqcboKVo16TP-fSVgCnAoc9v-f5nzwoAAI3NHzmbHEGeXmLT/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSNj6GlokKb-eQFIJMi51NrmhRRmNZ-UfbljSU9_9aYHlQ40okW266Z4lt-fpqaUbbegcEuBeRRz0TL/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTYzL7TEhCKajR9PIHLOAwq1u13y1dGqtrP8iCK6ayyrRJ-oQG0p-XiImnpcaH_rBPAcS6_L9eacxY4/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS1Amo8BwQzb69-niyABM9noI1E7czB5RQorgwaRHS1yPSKmCQogHsRr49aMscaZS_KsQuEV9dvp03B/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRV2EdRZigaEVzWMnQ5DWSc4hCJv8J2pdZvGpSV2POCqQAKZLM_15kdYjgxhhNZvalIkSYgxcUyQ8qE/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->