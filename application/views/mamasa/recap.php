<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/mamasa.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1JSgBrfn0ftRmHmRO2IajoAYNp5D3Ll2Zrxip6_4yxfo/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1EVyiXaJOW7ex8g3oSib3uhQLlsaRNV-RWzMTPzUnT0I/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1bmD0V_Pyg2Bx1mii-B4a_xYWsKV1v-sGK5hC0hTi4bQ/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/11VwBpD6cb33ODQbHL-gn9Ffl1CQgJJ4419QBI3bw5IY/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1AJC3f1QQiqBZy-kZ1vgFNHMls46UfO9ZxS_EJA47uP4/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTcF-wCPpa26omPVi8BQIf2BXkUxVBfKvhki0TGvKIFoXudNfrl1qWZ_vmBOaF8hxYEsWdWIAybWVLZ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT1JLbTu-LQOvmECTYKS7kv_bImeasuBQQJTwcZthUeELiEke86HHyE_9QfuS9SBAyYDhJhrcpsxVPC/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vShALGnhddEamb2pJ5rgntCAFRZqYO_PVvjvNhc0pjuGEkF3WHutqeIbufH7fUq5Um9xLu-_qppEqp6/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->