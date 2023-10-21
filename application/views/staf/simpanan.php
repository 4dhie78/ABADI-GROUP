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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1cJT1vwRS4K0MQ_6oE0ahgWAcP2T5RJlTtHnBztEHvjg/edit#gid=1399242559" target="_blank">simpanan Peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1KiHkjclaDaNXw3qgtOAJ7fIqZNV6pHJ2lsaFFfb4o68/edit#gid=1399242559" target="_blank">simpanan global</a>




                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="peredisi" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTpUZ6Xwx3SadVAdkzLAEkohjFl1lctB02M0q_ORpxRHCg-WX-YwRMpK7bErpveFtgkCabpwCVrLLIL/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="global">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ7hMsqmyOQUrfXH_brRb_ZeeT97FccT_JBJ9Y-DRAFE3WrxzIAElvJTkq6H209LBcGbnaKPLKF5HH9/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>



        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>