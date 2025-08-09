<?php
/* Persist System Settings On Brand */
$ret = "SELECT * FROM `ib_systemsettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $sys->sys_name; ?> - <?php echo $sys->sys_tagline; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/dist/img/<?php echo $sys->sys_logo; ?>">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/datatable/custom_dt_html5.css">
    <!-- SweetAlert -->
    <script src="dist/js/swal.js"></script>

    <!-- Success Alert -->
    <?php if (isset($success)) { ?>
        <script>
            setTimeout(function () {
                swal("Success", "<?php echo $success; ?>", "success");
            }, 100);
        </script>
    <?php } ?>

    <!-- Error Alert -->
    <?php if (isset($err)) { ?>
        <script>
            setTimeout(function () {
                swal("Failed", "<?php echo $err; ?>", "error");
            }, 100);
        </script>
    <?php } ?>

    <!-- Info Alert -->
    <?php if (isset($info)) { ?>
        <script>
            setTimeout(function () {
                swal("Notice", "<?php echo $info; ?>", "warning");
            }, 100);
        </script>
    <?php } ?>

    <!-- iBank AJAX Calls -->
    <script>
        function getiBankAccs(val) {
            $.ajax({
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccountType=' + val,
                success: function (data) {
                    $('#AccountRates').val(data);
                }
            });
            $.ajax({
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccNumber=' + val,
                success: function (data) {
                    $('#ReceivingAcc').val(data);
                }
            });
            $.ajax({
                type: "POST",
                url: "pages_ajax.php",
                data: 'iBankAccHolder=' + val,
                success: function (data) {
                    $('#AccountHolder').val(data);
                }
            });
        }
    </script>

    <!-- ✅ Custom Styles -->
    <style>
        .info-box-text {
            font-size: 1rem;
            font-weight: 600;
        }
        .info-box-number {
            font-size: 1.25rem;
            color: #007bff;
        }
        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .content-header h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }
        .breadcrumb-item.active {
            font-weight: 600;
        }
        .card-title {
            font-weight: bold;
            color: #343a40;
        }
        .chart {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            padding: 15px;
        }
    </style>
</head>
<?php } ?>
