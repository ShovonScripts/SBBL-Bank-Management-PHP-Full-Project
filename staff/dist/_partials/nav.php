<style>
  /* Sidebar with Background Image and Black Shadow Overlay */
  .main-sidebar {
    background: url('dist/img/sidebar-bg.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
  }

  .main-sidebar::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75); /* black shadow */
    z-index: 1;
  }

  /* Ensure sidebar content appears above the shadow */
  .main-sidebar > * {
    position: relative;
    z-index: 2;
  }

  /* Brand logo styling */
  .brand-link {
    background: transparent !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff !important;
  }

  .brand-link:hover {
    background-color: rgba(255, 255, 255, 0.05);
  }

  /* User Image Border */
  .user-panel .image img {
    border: 2px solid #17a2b8;
  }

  /* Sidebar Links */
  .nav-sidebar .nav-link {
    color: #e0e0e0;
    transition: all 0.2s ease;
  }

  .nav-sidebar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.08);
    color: #fff;
  }

  .nav-sidebar .nav-link.active {
    background-color: rgba(255, 255, 255, 0.12);
    color: #fff;
  }

  .nav-icon {
    color: #17a2b8 !important;
  }

  .nav-header {
    color: #ccc;
    font-size: 13px;
    margin-top: 15px;
  }
</style>


<nav class="main-header navbar navbar-expand navbar-light border-bottom shadow-sm"
     style="backdrop-filter: blur(8px); background-color: rgba(255,255,255,0.9); transition: background 0.3s;">

  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notification Dropdown -->
    <li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-bell fa-shake text-dark" style="transition: transform 0.2s;"></i>
    <?php
    $result = "SELECT count(*) FROM ib_notifications";
    $stmt = $mysqli->prepare($result);
    $stmt->execute();
    $stmt->bind_result($ntf);
    $stmt->fetch();
    $stmt->close();
    ?>
    <span class="badge badge-danger navbar-badge"><?php echo $ntf; ?></span>
  </a>

  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right animate__animated animate__fadeIn"
       style="max-height: 400px; overflow-y: auto; width: 350px;">
    <?php
    $ret = "SELECT * FROM ib_notifications ORDER BY created_at DESC LIMIT 10";
    $stmt = $mysqli->prepare($ret);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_object()) {
      $notification_time = $row->created_at;
    ?>
      <div class="dropdown-item border-bottom" style="padding: 10px;">
        <div class="media-body">
          <h6 class="text-success mb-1 font-weight-bold">
            <i class="fas fa-star text-warning mr-1"></i> Notification
          </h6>
          <p class="text-sm mb-1"><?php echo $row->notification_details; ?></p>
          <p class="text-sm text-muted mb-0">
            <i class="far fa-clock mr-1"></i>
            <?php echo date("d-M-Y h:i A", strtotime($notification_time)); ?>
          </p>
          <a href="pages_dashboard.php?Clear_Notifications=<?php echo $row->notification_id; ?>"
             class="text-sm text-danger float-right mt-1">
            <i class="fas fa-trash-alt"></i> Clear
          </a>
        </div>
      </div>
    <?php } ?>
    <div class="dropdown-divider"></div>
    <a href="pages_dashboard.php" class="dropdown-item dropdown-footer text-center">View All</a>
  </div>
</li>

  </ul>

</nav>
