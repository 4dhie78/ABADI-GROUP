<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website by adhie safriadi <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">silahkan pilih "keluar" untuk keluar </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?= base_url('assets/') ?>date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/') ?>date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;

            }

        });

    });

    $('.tambahSubMenu').on('click', function() {

        $('#newSubMenuModalLabel').html('Tambah Sub Menu');
        $('.modal-footer button[type=submit]').html('Tambah');

    });

    $('.tampilModelUbah').on('click', function() {

        $('#newSubMenuModalLabel').html('Ubah Sub Menu');
        $('.modal-footer button[type=submit]').html('Ubah');
        $('.modal-content form').attr('action', "<?= base_url('menu/ubah'); ?>");

        const id = $(this).data('id');
        $.ajax({
            url: "<?= base_url('menu/ubahsubmenu'); ?>",
            data: {
                id: id
            },

            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#title').val(data.title);
                $('#menu_id').val(data.menu_id);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#id').val(data.id);


            }


        });

    });
</script>
<script>
    $(function() {


        $('.tambahPejabat').on('click', function() {

            $('#newPejabatModalLabel').html('tambah');
            $('.modal-footer button[type=submit]').html('tambah role');

        });

        $('.tampilModalEdit').on('click', function() {
            $('#newPejabatModalLabel').html('Edit');
            $('.modal-footer button[type=submit]').html('ubah role');
            $('.modal-content form').attr('action', "<?= base_url('admin/edit'); ?>");

            const id = $(this).data('id');
            console.log(id);

        });

    });




    $(function() {

        $('.datepicker').datetimepicker({
            language: 'id',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });


        // FOR DEMO PURPOSE
        $('#tanggal_masuk').on('change', function() {
            var pickedDate = $('input').val();
            $('#pickedDate').html(pickedDate);
        });
    });
</script>


</body>

</html>