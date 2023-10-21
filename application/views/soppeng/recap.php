<div class="container-fluid">

    <!-- Page Heading -->
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/soppeng.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Recap</h5>

            </div>
        </div>
    </div>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Br-TLsR6BzMO7J2cOSTIaEh3Ljj0prf5eMSqAT5xWL4/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1YoccTkO9gYeRgnJt2jfowGHaOFWReDpMdZjuQZnlH7U/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1g3508HXxgWCkBrG4EluELU-fyRwEXSQq8DJzYEnxsY4/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1O7QmWkee32zv62EpY_K2OOgEGCjnUcKDIqCSy0oHb-M/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1RBbvQJ93hcpDH8qKfdC15HkHIv6xJ3fyCyniJc1dVcE/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTSbvOFGjSq8rmBfNQEaMiXz8KYS8GQwMdBhKDfsUhgfiHl1kLFNmhtkP8fpycXcOmwVUDZgfLu1JNO/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ7E87SGMYqgAKx0Ll5uBfe375hoS13lDjQjLaAVVzxBLNF0kyDeYi9XgB35plKNJ52bjAdv2AJ9Ey2/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJRXJjMSnh0XFObHsZldGIdGROfGdwIYXIfVtba9NDYB5OaORo2zjmkXksMOa78SA-EJBjp24t9j-A/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->