<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/limbung.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Pimpinan</h5>

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
                        <button class="btn btn-primary dropdown-toggle md" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1QX5yd2HUpN0lR77Zjj6wUmUQXwtOVKClBBGynUjlYCA/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/16Q2AT5pkh41FIMdiV-jI5WKI19sCpzvrMJrSeRpf-Zk/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ncKDoYksFulBd1LYig3n9PikokqHg_9eJ89d3j6mA2U/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1D8cX4D0zMoi0FrBfMVuq7PJBaV4TVyb5gm2IHT9HMDk/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1no8ENH8tWeGOenApPx5yKbxBHgrVhbb_BlztWRNhCxA/edit#gid=0" target="_blank">Barang Jaminan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1bJJu8KTQQY2FVh378jDd8ZlNBgsYQBzFA5v5sFxMLy4/edit#gid=2058850717" target="_blank">Data Pelanggaran</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2pZQkRxT9-MUv1UbGe_FVzHJ_TBoil2u7-IQzNcPz3uS0DeBj6selXrGeZDqXBevghzWmGGh8e9jw/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS62KzMkBj4TQEkjmjOUPpI9I-7QMWUiBTJCtunJM23mHebiJ3_lNG-8-LSzZY4v7kT9VE5DYrF8GUx/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWVT5qF3vSLqq65tR8I_SEqh7DgauhFTgaYV0gBJEmZJ4BSLx9T845gD6O7CqZK0iU9H-1k91dGEWv/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRnakWi0A549SXHDIPGNYgKLz5mcwGvWT9kA5PXN3R24jKGgbnhfEp97GhjVD-cBg1ez9q-bS6KB88t/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSEMQS3FBNXg8PJWXQf9PCwCDJerIoVeBM6CH1Gzd5rCs6GSfQQxNBz_2QRB9XvxY9edXB5XXnqfE-P/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRuaSWag_9sFV1yxSpJpiudiHKwmVtZ3KMEgDqj4mkcPFisDZs3kxUnwUDR9da8YrFcukvaaTGqHKbI/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->