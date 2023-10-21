<div class="container-fluid">
    <div class="designed-by">

        <div class="row">
            <div class="col-0">
                <img src="../assets/img/logo/selayar.png">
            </div>
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
                <h5>laporan recap</h5>

            </div>
        </div>
    </div>
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
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1IVvkCCYdqEYCgSH2ejnFKjKrvEOCud9cUs1PzjG4LLY/edit#gid=0" target="_blank">Data Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1yUnDBREm80GI7WtILgY5tGVh5DZq6WyHrZR8ILQmxx0/edit#gid=0" target="_blank">Recap Harian</a>
                            <a class="dropdown-item" href="#">Data Simpanan</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1KzIUD6wVQ6enCjJ6mnV1_M_JIaKGgh2CtYJ1qiNLS-I/edit#gid=0" target="_blank">Laporan recap</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1dEllgs0zjJ3WuLlYho5UzOZNonEh51XgGo_gk_75gXk/edit#gid=0" target="_blank">Laporan Pinjaman</a>
                            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1CJo1yV1AOno4uQr0X1HvI_wedc06BF1xLGLsreto-nQ/edit#gid=0" target="_blank">Laporan Simpanan</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="card-body tab-pane fade show active" id="recap">

                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT7pjhuynylSj4ixc_zp5VZ20KHoSKUYXVnR1vxWYdgRrsVTU5jPUmfXx0Ss78TeJdzAEN63f2PA5w7/pubhtml?widget=true&amp;headers=false"></iframe>

            </div>
            <div class="card-body tab-pane fade" id="pinjaman">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTEHllv5gwRxCy4jU2itigI5eBmwymF37qMjNPSGrYSjLBKgX19ed-7z6AhTf4E8f3VjD7HHjUOBW3M/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>

            <div class="card-body tab-pane fade" id="simpanan">
                <iframe width="1000" height="600" frameborder="0" scrolling="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTS_W_E6w7eScR5IMJN5RK8d-q-q-t2YVB5MXw1MiZ5YpTa6virchPSr406bkIFO1mlg0ec3y2liNr8/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>





        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->