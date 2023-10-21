<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">peredisi</a>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1-ohXgY0ZKYji30ri-Pp5t5jrPOa2X6QJCFsTeTZ5bi8/edit#gid=0" target="_blank">data peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1YeXc7gT6UrGUdslq5YnMUwb79O7V9Bxipwlgy79rybs/edit#gid=0" target="_blank">Data Global</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vST3i4LUmIBLl_lllCsQhDhgQV1zYPTaqibepszW1UZvNnXAQL9x9xwJ5tdcVSOgxFzKKB4QFHtXS2S/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="global" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ28vho8u7DaOzxv05hMTYIW9dC3pr0S_jKo7b_J6A3cqlDz2vODYRM5_eppadQ3sonK4ra_8JWpzj-/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>


        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->