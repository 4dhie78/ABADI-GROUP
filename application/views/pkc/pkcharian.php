<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item ml-2">
                    <a class="nav-link active" href="#program" data-toggle="tab">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#audit" data-toggle="tab">Hasil Audit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laporan" data-toggle="tab">Laporan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#data" data-toggle="tab">Data Pinjaman</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#karyawan" data-toggle="tab">Data Karyawan</a>
                </li>



                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ZEXQh0uWZ9w3Ut3SL4tn1l3PyaO1t19KIQVMgADlOIQ/edit#gid=0" target="_blank">Program</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1icuawAaBCA7VOW_fm1EhAOwkO5jZfN0Ed6QCDNpZI6o/edit#gid=0" target="_blank">Hasil Audit</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1YUKN6AD-uy80sHFUZeXD1p5fgjpl1nIa8hJBYzzPGNw/edit#gid=0" target="_blank">Laporan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1hk8RP-6IeASkRrsaRVx1yq7r959ybPh0BCpk7GDGQsM/edit#gid=0" target="_blank">Data pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1iGBga3FJ3w3IlOMLiny416iupNdAFdaS4I6s1PFrRx0/edit#gid=0" target="_blank">Data Karyawan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="program" data-spay="scroll">

                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSBrdM1Pm5pqURS-YhYt-YQtoo4o_vTKaueRMAH490kg61xMav-epef7Y2g0fRFmPkf6rFxSkRKv-PB/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="audit">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRY-DIEKcrseX2JZ2u8YLoGs6D2SPBS-VETko-c_FlqFWMksuB-z9gKGsNU5KB7MREIlMdj3B2pLaua/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="laporan">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSU27HFzV8OeDolJUvRDTaEkO2ecY-Adl-XPfPPXtp9XI7OPmbmNN-GFqyt7GALMEkQZO4OxhgOxeDU/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="data">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQkrnyHc9JSF45HLvr6QWjESnlCUK9oCa24AcV3onQPQpcr8iMSAcVNDVnqLyJ4qISzYNBpkqvhFvsx/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="karyawan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vThpuSKYDtwELjCckX3jm0tAiMwIEnj5QGry8gIJhh9XplTaN6o_VmML6xNhKiAXB0Dr3AGSwQTolIu/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->