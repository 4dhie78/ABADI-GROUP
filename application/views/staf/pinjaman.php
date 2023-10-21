<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#peredisi" data-toggle="tab">peredisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#global" data-toggle="tab">global</a>
                </li>





                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/13P_adqf4yzuMdfK1bKnGCMBJ31_Oh2tU4G5qOW9SZUQ/edit#gid=1099068853" target="_blank">pinjaman Peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1_Vr5DF8zhM5fLosh_xCRQR8Kf5k040G8_yUw-bErSn8/edit#gid=1099068853" target="_blank">pinjaman global</a>




                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="peredisi" data-spay="scroll">

                <iframe width="1000" height="1050" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQYthJ-kAvvcDIh4QYnPB68Ga9x1YhKUGCYVpA9dBanK_vlSot9X_V31nzyW0ijDpfpgNhXdQ6uAIOJ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="global">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSfRnoemEw6zw87KQf-VsIShq_lscwwvw5tS-lY2JY9BlWqB4OaAbpp-6uX4f6gJe_cH3EOyoEikU3t/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>



        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>