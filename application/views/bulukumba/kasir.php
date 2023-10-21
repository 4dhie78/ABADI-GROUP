<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/bulukumba.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>laporan kasir</h5>

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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1YzhsPOsYXr8TWR_Jiofw72Y5bQmKXqiloXHGVOwErTw/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1wN0HguW15te5zxfMtWgtH7T680o_onLGha6I-rziLic/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/14hqwDO6br_bupvFlwaTkyRGOOVWiSLhLhhCTjtLrHSI/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1FwdvW6M-DguK1aVbrml2JIJ7G7xbV-gd4IFaRpRa-1A/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1T2XEvdE3-dyedlTmbqlEcQV8y4vIpqfBvoT3XVlEw8M/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1hyzQRzlPtsHqaFk6L0t_99oqAZ3fi8dKTQic1JXk3Rk/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1-hACAXgtjDRY5BhvQrdNbMemHJ4nqQVwZHZtig3oeXA/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT2ewXvVGVW8yWGQVx-pepxtZ2ILXlHp8O4tLAlFG4kegZFQQfnZD9xliK4jdVt8rEvkod3PST0JIs7/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQbDWglvA81UfXLWrraMiJxDIbhczVw3UaDkQL24K-JTxhZ5I_cvDEqLl3A4Z1-ksXnWR3tCOJmuxqf/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQy4OYh86mtgv-CVakijejhfvwWYb4kVfPS1hzVEe9BQvt_kgGGOr5BV96ujAFjQspLeDkKH6cIO5V3/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT_-H7AHDUO8axu4xl6HWnkm-OeirdIcFhQp8qpWL-qThNdZ_oDYWpmCY80dCmGWCpm8JnEJMIAEH62/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="900" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR6RX8B_GOjGu5lbOx1dm4bHYkJQHFNA5NDjrBlDBUyIZFOyZm8LQZEufpN_4eTrIN_DjJ9etYKLl5Z/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRODklI6wH8IrdO90mjThbQPmx0hd_dZec6LsnDxaUIVmTwCBhXX4oL-EJH75vpUuIvWSqgut-LXx6T/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTkP_nabbDxF91A8JC17ticHOSwJSgqZYUQROJXFj7V0Q7PDMvOvV4C3fPVBUKYOOsEuEKJOQ7Wd15E/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->