<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#peredisi" data-toggle="tab">kas peredisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#global" data-toggle="tab">kas global</a>
                </li>





                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1u5bZJphqryWjMi_oDxkCLjm_9p7NZ36e_CcKHBaeCW0/edit#gid=492225823" target="_blank">kas Peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1gRM3AdVW7w_XNr4y3sBDwut3sbqPjo8b36kCc_qfx7g/edit#gid=492225823" target="_blank">kas global</a>




                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="peredisi" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQC6ekBPlFFJGksLi_amo8gK_o3ALzTZSJfAzlb8e6jVIF82iSuHRxcH0XaA8j0BJvvHq1061bstmoC/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="global">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTFUeWKmiBzp1lqCz8aD1lLwZZBm9r4GBfd2flE7hiXaM4Kd-xdcQurypVXUy__TCF4uPtaur5qRCF8/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>


        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>