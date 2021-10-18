<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rau Nhà Tèo Admin</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body>
    <!-- Hidden tag to use AJAX -->
    <p id="documentRootId" hidden><?= DOCUMENT_ROOT ?></p>

    <!-- Header -->
    <?php require_once VIEW."/admin/shared/header.php" ?>
    
    <!-- Content -->
    <div class="content-wrapper">
        <?php require_once VIEW."/admin/".$view.".php" ?>
    </div>
    
    <!-- Sidebar -->
    <?php require_once VIEW."/admin/shared/sidebar.php" ?>
    
    <!-- Footer -->
    <?php require_once VIEW."/admin/shared/footer.php" ?>

    <!-- jQuery -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= URL_PUBLIC ?>/admin/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
    $(function () {
        $('#cakeTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#cakeTable_wrapper .col-md-6:eq(0)');
    });
    </script>

    <script src="<?= URL_PUBLIC ?>/admin/js/deleteItem.js"></script>
</body>
</html>