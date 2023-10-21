<div class="container-fluid">

    <!-- Page Heading -->
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/soppeng.png" alt="">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Wakil</h5>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">Awal Dan Akhir</a>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/17MUcFxEuu5maIj8Bj4RfdkD-hxEmlNuplyY7AXn1n50/edit#gid=161505509" target="_blank">Laporan wakil</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="1100" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQZDkXhlteoqWZPdyEYNz-KX7i54LYAlDjimrafEdy1xixgdsldDp0xZNrIZGjWAcF6RepLfOFKslLL/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->