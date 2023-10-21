<div class="container-fluid">


    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <h5>Laporan Recap</h5>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1FRT4M7TM0EDUkkVCTvE04OOG3X2yuzDIFUvYg4lmjG0/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/147VH3PREaNlvg-WpNrtN9NwJfMtus0d5x3Us01T4ZQw/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/10yYZlsbjeAQxgdvX6-W5UlK-jDZ23EmXeJvOF1LazGQ/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/13GEhMuw8A0rLqHHu-c8akB_0CkgfUfeYAJQs9BSkWig/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/16UTcOqTcL3qtxZ9wS7DIiwI26cqiSz5YyBMwLOEDxns/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRhAcGGyI47oQT2FxOATogPLsQsoO796zyyVGatvG-Lau8sryrWy0X_0lu3KikwjxGjr4un-qUjrDUk/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSpc7hvt9DJHU5BgOIf106c2KwL72urB-oNr-NQC4FI7DhP9AntydpRSVl_yMOE5dRq03Lr80QbDe44/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSxsvHtY8-2l9VdoU_7e0U3nF3U9-aO1HLJTIFc-qfvMgYkxLGDcvg7nx6ZdNuYzP8JKLAAsJyHi5ft/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->