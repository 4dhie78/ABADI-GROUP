<div class="container-fluid">

    <!-- Page Heading -->
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="/assets/img/logo/mamuju.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Kasir</h5>

            </div>
        </div>
    </div>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1BqclIDaKQPxUSH1njCOd3rkYSSFitP_AA5ns3B_J5m4/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1hbL6Rr6RjyQ0AdKXjZ37x1abGQ4jnmDW0HI_HFYFIDc/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1rDJfq0t87EtSmSP2wM1KdPHW6h1eSHy8xJLt062btTw/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1yOl3RUpqQjAw5MbU4SyRYpJa79OyoVahRk-cQYpO6gQ/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/10Xh6M8L2uMx12eu0YOhd5jOarrmjRJ0GxLHfRvR-X1w/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1J73Ec7IcuAl9UvnBAyG6LzhY8ZuD4B8WBx1LmFLSUaE/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1aU-sSk20N7aHQMbAXjZBvnpBj49Ej5S1XzW9wNH66KA/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0DQI7urboqBDC-A7aS_nI9uA5tRVQ6uQpoBW25Kp1X4NKzCpSmpCdEIEKaMgNgKY9ufdZ4gYEOavF/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRCPN7Ed-VD-ZZfn5IrpPvyLeasOATNr2DotonaQPjkYY40SyX2I0RHrB0yXxR5N5prpwCH2fm1zmcf/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTa_wvXEd7XGUOR4JPANY00g2ukiq8u6Q2EIcosrSJzubXvRToTRqnTQMhWEZoj8sKI4XKHHItmUxFJ/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQYy0KdANV5aRRPb9lR2lkWjt32BnI94SvF6NzUJdAvcUCHRnjjgpbQhQF8NsykBIkdAfbE-rwKcHcb/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vShPfaOH1zD9fKH6rY1D1eTHlni1K6g6itrlhNMTio7jwZpG24vQDPF8RgsB260pftNAKjRdexMPHzJ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRnPwZf-7nv8R2HqBVfmYFJ4KsCF2tOMlX9E6AjvxV37gMT8OS-CqtAxtWwLXskUgFwHtAGXQIrxJsx/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSWzzosn2jA8sTGW8_aOWET6NMF3zxqzyx7Ob1RYASIyaKw9AhMS7vXVa01cegMfKNibPPK2grP1Jn9/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->