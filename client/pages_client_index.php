<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

//session_start();
include('conf/config.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = sha1(md5($_POST['password']));
  $stmt = $mysqli->prepare("SELECT email, password, client_id FROM ib_clients WHERE email=? AND password=?");
  $stmt->bind_param('ss', $email, $password);
  $stmt->execute();
  $stmt->bind_result($email, $password, $client_id);
  $rs = $stmt->fetch();
  $_SESSION['client_id'] = $client_id;
  if ($rs) {
    header("location:pages_dashboard.php");
  } else {
    $err = "Access Denied Please Check Your Credentials";
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $auth->sys_name; ?> - Client Login</title>
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
      margin-top: 10vh;
      background-color: rgba(255,255,255,0.97);
      color: black;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      max-width: 500px;
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
      <p><?php echo $auth->sys_name; ?></p>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Log In To Start Client Session</p>
        <form method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-success btn-block">Log In</button>
            </div>
          </div>
        </form>
        <p class="mb-3 text-center">
          <a href="pages_client_signup.php" class="text-primary">Register a new account</a>
        </p>
      </div>
    </div>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>
<?php } ?>
