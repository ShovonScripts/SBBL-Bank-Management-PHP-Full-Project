<?php
/* Persisit System Settings On Brand */
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

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/dist/img/<?php echo $sys->sys_logo; ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- AdminLTE, Bootstrap & Plugins -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="plugins/datatable/custom_dt_html5.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <!-- Custom Dashboard Styling -->
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
      .dropdown-menu {
        animation: fadeInDown 0.3s ease-in-out;
      }
      @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
      }

        .dropdown-menu::-webkit-scrollbar {
        width: 6px;
        }
        .dropdown-menu::-webkit-scrollbar-thumb {
        background-color: #aaa;
        border-radius: 10px;
        }

    </style>

    <!-- SweetAlert JS -->
    <script src="dist/js/swal.js"></script>

    <!-- Alert Injection -->
    <?php if (isset($success)) { ?>
      <script>
        setTimeout(() => swal("Success", "<?php echo $success; ?>", "success"), 100);
      </script>
    <?php } ?>
    <?php if (isset($err)) { ?>
      <script>
        setTimeout(() => swal("Failed", "<?php echo $err; ?>", "error"), 100);
      </script>
    <?php } ?>
    <?php if (isset($info)) { ?>
      <script>
        setTimeout(() => swal("Note", "<?php echo $info; ?>", "warning"), 100);
      </script>
    <?php } ?>

    <!-- AJAX Auto Data Fill -->
    <script>
      function getiBankAccs(val) {
        $.post("pages_ajax.php", { iBankAccountType: val }, function(data) {
          $('#AccountRates').val(data);
        });
        $.post("pages_ajax.php", { iBankAccNumber: val }, function(data) {
          $('#ReceivingAcc').val(data);
        });
        $.post("pages_ajax.php", { iBankAccHolder: val }, function(data) {
          $('#AccountHolder').val(data);
        });
      }
    </script>
  </head>
<?php } ?>
