<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/purnama.png" alt="">
            </div>
            <div class="col">

                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>Laporan Pimpinan</h5>

            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">Bulanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laba" data-toggle="tab">Laba Resort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prestasi" data-toggle="tab">Preatasi dan Bonus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#lepas" data-toggle="tab">Lepas Percobaan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#jaminan" data-toggle="tab">Data Jaminan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pemakaian" data-toggle="tab">Data Pelanggaran</a>
                </li>
                <li class="nav-item">


                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/17va1WqKQ1rTmAxkhVwjx2bn8JOLcAal9KU9Q4hfzBIM/edit#gid=0" target="_blank">Laporan Bulanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/19CvTfogqzRppXpz44tOhpJxeNPlzO7jWxYcAt__uDDY/edit#gid=0" target="_blank">Laba resort</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/16MgXXQNCm1G-dmkL4TqXTBKHt6Ye5xhnvM6BdQ2XLvc/edit#gid=0" target="_blank">Prestasi Dan Bonus</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1EV5XTANUoYIOb466dYRQb_mc6QX-TVDvs0MZp6ik8Lc/edit#gid=0" target="_blank">Lepas Percobaan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/17GjsBIodz9q0H5A6SUV0VjZIORRtnX5g8YoknN6Xdrs/edit#gid=0" target="_blank">Barang Jaminan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1aeFf0JObQAMOKDn2YX08hHW7uHXPUZaqnvYcqH8uL4w/edit#gid=2058850717" target="_blank">Data Pelanggaran</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTXwNK64NYD4HCCjX3YZDxVjxZ3iopMQKOyFHuPalsfQRLSmOQV1rEl_6xIdybMZYDPObQxN67ox1MW/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSCXa8FzfxSuBjC61LGh-mSh4jFEmj46JKl4RxctEygH8Pm7dHs3MOmhvoLjZzuC7s8yLtOSr4HfBXD/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRhcgvvP3p4s0rrpQNRJB8LKVhlFMdDWnRlb-eZsKwpfiJe57EVztPZaBevffB-3qBCBXS5-qH8SnNB/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTOFDO6mIaqab5_QdkyCwaKeh8K9Bo2rju8CtoRrOtsokXxHJywvLCf3HicIaWdPaJNVFvMfVl5haYW/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <div class="card-body tab-pane fade" id="jaminan">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSGk_Uwnf1mpBXCuYX-54Zizez4_jKbqp1jp7r26c4MCh0AG2QVuV3rMslAEVSXMB9NM8bNz-r9X3XO/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="pemakaian">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSVwksRB5cSuI4Vphrkw1YlymVKbsqG6w4Q4z0kkjTcCXeYPbqTZ0jExsS6RJA8iKMKjV3hDAgQ0hI_/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->