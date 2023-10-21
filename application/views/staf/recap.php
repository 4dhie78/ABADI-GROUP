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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZmbrM0giv3yl6a4G87_fXcHDLc4wnJfMQassMga_-Rk/edit#gid=0" target="_blank">recap Peredisi</a>

                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Htk6Fc46uzl_acIIwUMMKlwi5Nl1OvfIgsevxB5pdZw/edit#gid=0" target="_blank">recap global</a>




                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="peredisi" data-spay="scroll">

                <iframe width="1000" height="1050" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR5ucwgUkfNygAwfL2GrDMCUWq-RJPE4j_YqwUFFKoLm6JrqGP1Z10YnupEitZ7i_LXfckubMmNJ1TG/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="global">
                <iframe width="1000" height="1000" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTsg5TtC4uSz1ZiiVy3eiRfxOP0Cpwu8aQyPJ7dmfH7wYFTo4DpIXTqq4YvJecifLx6AlbvtNnoBlwq/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>


        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>