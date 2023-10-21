<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/mamasa.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Kasir</h5>

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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1Iibq8Vve4xFnxF7Jtwlz9xGBmbaNefFUMF7ozcK0n98/edit#gid=0" target="_blank">Setor Pusat</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1V4yFFID6NlkogjjmwrM6lv7l3Ozn_22-2DBiqSeo6f4/edit#gid=0" target="_blank">Bon Sementara</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/125B0NjixxC3OEQf72AqLj7CMpxDwk8gmcONeN9QlSG0/edit#gid=0" target="_blank">Daftar Gaji</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1JemkV7lt0VOnZwWaFIge_AZfRqvyocc5be1R0Kl3bmg/edit#gid=0" target="_blank">Transport</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1AbWNuEiWJlpv2Sb0pJ-lso6wpGbM5cElzy3AXLAbD_c/edit#gid=0" target="_blank">Biaya Umum</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1BAQC-w1ehjYGKi-bakN8Df9VQH6OW20jS2c35ER5gBg/edit#gid=0" target="_blank">Laporan Kas</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/11OrCUEXizhmKBzROAqr8cDZ25AZ3lWR5I36tKcBgxWo/edit#gid=0" target="_blank">Expedisi Karyawan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="setor">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRIjSMmBHUtHdmipvrKJ3r_CpZqDMG8RMs53pnLk8aoUmrSpkQm6zwSnlIUlrU3iQKLlGlQwzEH49mQ/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="bon">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSuu8BbBBDcZbmNgW2QXb4YjgCxx7Q97UQWRqHRdHE2-kXv-t8nuu9prIeYOVyXqUHuYOp3EoHN8x3L/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>

            <div class="card-body tab-pane fade" id="gaji">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT48MocM5XAUfymT2XIBO2Z9GCsWYGHlsHF8AvKMAzsI9DnIv33qM30ZtyzrhD_Ge2fElJzTWOj-Lyk/pubhtml?widget=true&amp;headers=false"></iframe>


            </div>
            <div class="card-body tab-pane fade" id="transport">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSz94_1mYiSmT1vJFAoJJ0RdasbMOup7G3Kf-81sVMF_Bh7Eut80bXcuvMzWHETCPB0-tC1du4OOBf3/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="biaya">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSRZQ5Pd6SE4RH4GGR-3HL5IxDaEEx2_8o3QExeM-WBpVXO6G0p03XkD2VOyIMXQrNP9wY4xKY2UAck/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="kas">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT3par1UWSZfRT75-EH45BHxN6q8U7tAZSyDyErfhzsdeMyovT460uNldPgY52_r413tCGkO0ApY7rY/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="expedisi">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSAG8qWPRsGfiMhAV_U7Ax8HVNAnOAxESzszXfAugUrGtk-V6WGsLHhbcnmYizTcRMGl9e558bMemDz/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->