<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/seng.png" alt="">
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
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1IVvkCCYdqEYCgSH2ejnFKjKrvEOCud9cUs1PzjG4LLY/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1yUnDBREm80GI7WtILgY5tGVh5DZq6WyHrZR8ILQmxx0/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1OBrkWLargUKIKfBxIlzZ7z-S1UZL4zi3lU8iXnbk4Kc/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1tQnGJp9KRGCcunJpjH2LCFeZgtIwAsU3sd4yjq4ofsQ/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1yHpNShO7-7eZbFCdxuHPEZiNbOufk9vRYXj_Fzoeyj8/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ1Bvpfvf6uN12J-LAG4cCU9oQ2hJZYYsRmsdPdkwtfSAt5TKrBFAe6sLWNiBsTWzumduCETVQGxbgn/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS9g382mSD58WgDCWIhH6nTNTumbsyMO4fGil7gjfgOyV0v7rxLbVDYl2pO2o4PFpqNhqrMAzM0D5d0/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTYkmztb_dUpTwC5J8ONaZ8LJq4RnK68v_t-m4bwY5ZbMsZA7s6JdOH_c2u5UM072Fnu6VVP2vS3Ehp/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>





        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->