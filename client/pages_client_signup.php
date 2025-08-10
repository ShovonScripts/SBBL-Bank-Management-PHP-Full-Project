<?php
session_start();
include('conf/config.php');

if (isset($_POST['create_account'])) {
  $name = $_POST['name'];
  $national_id = $_POST['national_id'];
  $client_number = $_POST['client_number'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = sha1(md5($_POST['password']));
  $address  = $_POST['address'];

  $query = "INSERT INTO ib_clients (name, national_id, client_number, phone, email, password, address) VALUES (?,?,?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  $rc = $stmt->bind_param('sssssss', $name, $national_id, $client_number, $phone, $email, $password, $address);
  $stmt->execute();

  if ($stmt) {
    $success = true;
  } else {
    $err = true;
  }
}

$ret = "SELECT * FROM `ib_systemsettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
while ($auth = $res->fetch_object()) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $auth->sys_name; ?> - Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../dist/bg.gif') center/cover no-repeat;
      background-attachment: fixed;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .login-box {
      margin-top: 5vh;
      background-color: rgba(255,255,255,0.97);
      color: black;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    .login-logo p {
      font-size: 26px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 0;
    }
    .login-card-body {
      padding: 30px;
    }
    .btn-home {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 1000;
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-success {
      border-radius: 8px;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <a href="../index.php" class="btn btn-light btn-home"><i class="fas fa-home"></i> Home</a>
  <div class="login-box animate__animated animate__fadeIn">
    <div class="login-logo pt-4">
      <p><?php echo $auth->sys_name; ?> - Sign Up</p>
    </div>
    <div class="card">
      <div class="card-body login-card-body">

        <!-- ALERTS -->
        <?php if (isset($success)) : ?>
          <div class="alert alert-success text-center" id="successAlert">
            ✅ Your account has been submitted to Sonar Bangla Bank.<br>
            Our team will review it within 24 hours.<br>
            You’ll get a confirmation call. Once verified, your account will be activated.
          </div>
        <?php endif; ?>
        <?php if (isset($err)) : ?>
          <div class="alert alert-danger text-center" id="errorAlert">
            ❌ Something went wrong. Please try again later.
          </div>
        <?php endif; ?>

        <p class="login-box-msg">Sign Up To Use Our IBanking System</p>

        <form method="post">
          <div class="input-group mb-3">
            <input type="text" name="name" required class="form-control" placeholder="Client Full Name">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" required name="national_id" class="form-control" placeholder="National ID Number">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-id-card"></span></div>
            </div>
          </div>
          <div class="input-group mb-3" style="display:none">
            <?php $length = 4; $_Number = substr(str_shuffle('0123456789'), 1, $length); ?>
            <input type="text" name="client_number" value="iBank-CLIENT-<?php echo $_Number; ?>" class="form-control">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-code"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="phone" required class="form-control" placeholder="Client Phone Number">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-phone"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="address" required class="form-control" placeholder="Client Address">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-map-marker-alt"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" required class="form-control" placeholder="Email Address">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-envelope"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" required class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-8"></div>
            <div class="col-4">
              <button type="submit" name="create_account" class="btn btn-success btn-block">Sign Up</button>
            </div>
          </div>
        </form>

        <p class="mb-0 text-center">
          <a href="pages_client_index.php" class="text-primary">Already have an account? Login</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>

  <!-- Auto-hide alert after 25 seconds -->
  <script>
    setTimeout(() => {
      const alert = document.getElementById('successAlert');
      if (alert) alert.style.display = 'none';
    }, 25000);
  </script>
</body>
</html>
<?php } ?>
