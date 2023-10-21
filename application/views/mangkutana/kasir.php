<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/mtana.png" alt="">
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1OesbUoIHYjNIfAHpg3bhfZNYtdrCNEyx_hcdzIfvGco/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/136NzKweTWdDAWNI8BdFtKXgriz39eohbAiQl1FJ_hvA/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1KQs3_TigZTjakAsv4CjOlskuElxsanxuPdEVdpvqQZI/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1O-W8iUp9c9QJYU0kN_Q7iWxIDcg6Tuy7JtDGq3Mq4SM/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1bjOso3eAEcqmGea_wjJe_lyyYW9qIX1HVBUA9L8JjEc/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1-L3ycGaGqQCXYwkCwE1btxUO-m2XgWa9h74XZgt858g/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ucKzpAjoLznntVrjdeFJmctwXup_7gw8i8jE3XowxwU/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQchc0jq_zyRsUlzwZ5GNF0YTDq_2Ty0j1iK_JIIJ5E0pu0GMdTVn7Lln7oBpiVorhjq88SNGVrzjYl/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQD5ZqEX83kavsxpsPn8y5vkbCf7fQ9mbGPYZMzZO3nlUDWoJnCQ0jXd1Kpqe3XkYSt8djGZS5M0No8/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQVXi-lO6CmFqdodnO6NZoT7miDz4T02PWsaTdKhT7DCDbdwd8Kx87gc5lwnwvErzzX8I6qpouioEx4/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTL8mGnE7vptxW0rB8Z8jdyQ13vcZeoK_P0OSMdUeNWkOi-NpqiPnesFMmYjwXXfaVeHbJBDko2Khyb/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="900" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR2XrendoDia9KhwCnD_O8kDAS4UMB9EXBnxLBPzj-86zXQM08Ss8ybzaFzb3ptE2sP4BLPt-111ZCM/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR1LFi3ODNnQGlo2InID_Oo4kMoFMdim7Nleu3CjA0WVhSpxJ5kH0aWa7kBHQk72FA95O0awOpPWbV-/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRkLKEuqzCO8kxVRSMafN5hwaURMua6YFe4aPASGPp6nwMb9ySWf65mxcbTAoA7T7iE4Br6PdPgpgZg/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->