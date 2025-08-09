<?php
/* Persist System Settings On Brand */
$ret = "SELECT * FROM `ib_systemsettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $sys->sys_name; ?> - <?php echo $sys->sys_tagline; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Overlay Scrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Bootstrap iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- AdminLTE Theme -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="plugins/datatable/custom_dt_html5.css">

  <!-- SweetAlert -->
  <script src="dist/js/swal.js"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/<?php echo $sys->sys_logo; ?>">

  <!-- Custom Enhancements -->
  <style>
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background-color: #f4f6f9;
    }

    .main-header, .main-sidebar {
      backdrop-filter: blur(8px);
      background-color: rgba(0, 0, 0, 0.75);
      transition: all 0.3s ease-in-out;
    }

    .main-sidebar:hover {
      background-color: rgba(0, 0, 0, 0.9);
    }

    .nav-link:hover {
      background: rgba(255, 255, 255, 0.05);
      color: #00c0ef !important;
      transition: all 0.3s;
    }

    .nav-icon {
      transition: transform 0.3s ease;
    }

    .nav-link:hover .nav-icon {
      transform: scale(1.2);
    }

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
  </style>

  <?php if (isset($success)) { ?>
    <script>
      setTimeout(() => {
        swal("Success", "<?php echo $success; ?>", "success");
      }, 100);
    </script>
  <?php } ?>

  <?php if (isset($err)) { ?>
    <script>
      setTimeout(() => {
        swal("Failed", "<?php echo $err; ?>", "error");
      }, 100);
    </script>
  <?php } ?>

  <?php if (isset($info)) { ?>
    <script>
      setTimeout(() => {
        swal("Success", "<?php echo $info; ?>", "warning");
      }, 100);
    </script>
  <?php } ?>

  <?php if (isset($transaction_error)) { ?>
    <script>
      setTimeout(() => {
        swal("Error", "<?php echo $transaction_error; ?>", "error");
      }, 100);
    </script>
  <?php } ?>

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
</head>
<?php } ?>
