<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <h5>laporan laba</h5>
    <div class="card">

        <div class="card-header ">
            <ul class="nav nav-tabs  nav-dark card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#bulanan" data-toggle="tab">peredisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laba" data-toggle="tab">kepala divisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prestasi" data-toggle="tab">koordinator 1</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#lepas" data-toggle="tab">koordinator 2</a>
                </li>




                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle md ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Data excel
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1qR_UOyKAL7U23GyL-3IRgQzQAepkoSZLCWB1CwJ6Vp0/edit#gid=2094125099" target="_blank">data peredisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1fDdCYIvFzmTXgCFt7ikLQVomPFbWX3S63JDe4I-UK5M/edit#gid=1697745861" target="_blank">global kepala divisi</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1s_Ew9zyzi7eDhHl0os-J9qVgs3t2GyKL-r9vUVVfxxE/edit#gid=1697745861" target="_blank">globa koordinator 1</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1PfLiKlgsQy-Ay4w-yuAtWUP08tF7aB55MJTKHrCcjGQ/edit#gid=1697745861" target="_blank">global koordinator 2</a>


                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="bulanan" data-spay="scroll">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRJu2LoV5tcPT6NgijYzHx4FMIRVKLeapHTDIb5nonw5x8_O61_4ZkQ3iuqVV-UrmeTPBk0BpLasH7q/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="laba">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR6wb4yFvDkrE1rS9JNugpunO-D917Tg4za9vugIrK_Sh_4OVoGJL8HZdgiJJTmnQKFPLz_PM1kbGQW/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="prestasi">
                <iframe width="1000" height="650" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTutEFZcMoK_FARyHtPAdEiGoCYhzk2LTIjvu2Z8ldGFpVICuVhyigZc3OzveImxmspnkcF0wONP2NF/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="lepas">
                <iframe width="1000" height="700" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRHXkQWdDWmyWj2cupmZOLasp0l_Geg1gRSt4Asg3rPuon-wAVR_z6D7ZisKKApdfUao1MXgU29pXYF/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>


        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->