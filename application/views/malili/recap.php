<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/mtana.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1FIP7H6eavw0ISo0qPz5G-4wwrS65Q_9Vps0-9vQMegE/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1iNyznnZ6pgxRzjmzLUgQxbRL3_ly4ihmgDVZDvnOT8w/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ql5KN92kaAyBE3YoGhXeuA0y__tZSTV-qdN1j5si9_0/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1xe1umlW9Igo3zkNbVT8SL1JjlXKYuY9S4GLAzPtK_sk/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1VHf0akfTqnE_XjlUZ_anGkI2uQyug6BFTvY9bW_Lveo/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSQSubKjTswqg9rRbdNP0GFBrqIF0lFLa7aXCg3qAcLU_iJWqXyFN5PdN8NG8sdvRP7ucZ7bSjOt2Aq/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSKd4GkJRP4eVzVyUCmeq47QFltwIL1YTTpJNKBebu9nbqCVfksEzxccIvjvTOG6xCZJhZI91qBdNye/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRQGpYjhoPK2atNVHKj9wIOFA5UGyZkQtNYXKsVYwQ-g20O4dG0VRKQN92U0QqwHfbGkGcLottuL0xU/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->