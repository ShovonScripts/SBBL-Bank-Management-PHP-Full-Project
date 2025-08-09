<nav class="main-header navbar navbar-expand navbar-light shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.85); transition: background 0.3s ease;">
  <!-- Left Menu -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Right Menu -->
  <ul class="navbar-nav ml-auto">

    <!-- 📅 Date + 🕒 Clock -->
    <li class="nav-item d-flex align-items-center mr-4">
      <span class="text-muted small font-weight-bold mr-2" id="current-date"></span>
      <span class="text-primary font-weight-bold" id="live-clock"></span>
    </li>

    <!-- 🔔 Notifications -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell fa-shake"></i>
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

      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right animate__animated animate__fadeIn" style="max-height: 400px; overflow-y: auto;">
        <?php
        $ret = "SELECT * FROM ib_notifications ORDER BY created_at DESC LIMIT 10";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
          $notification_time = $row->created_at;
        ?>
          <div class="dropdown-item border-bottom">
            <div class="media">
              <div class="media-body">
                <h6 class="dropdown-item-title text-success mb-1">
                  <i class="fas fa-star text-warning mr-1"></i> Notification
                </h6>
                <p class="text-sm mb-1"><?php echo $row->notification_details; ?></p>
                <p class="text-sm text-muted">
                  <i class="far fa-clock mr-1"></i> <?php echo date("d-M-Y h:i A", strtotime($notification_time)); ?>
                </p>
                <a href="pages_dashboard.php?Clear_Notifications=<?php echo $row->notification_id; ?>" class="text-danger text-sm float-right">
                  <i class="fas fa-trash-alt"></i> Clear
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="dropdown-divider"></div>
        <a href="pages_dashboard.php" class="dropdown-item dropdown-footer text-center text-primary">View All Notifications</a>
      </div>
    </li>
  </ul>

  <!-- 🖌️ Styles -->
  <style>
    .navbar-light .navbar-nav .nav-link {
      color: #333;
      transition: color 0.3s ease;
    }

    .navbar-light .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .navbar-badge {
      font-size: 0.7rem;
      font-weight: bold;
      padding: 4px 6px;
    }

    .fa-shake {
      animation: shake 1.2s infinite;
    }

    @keyframes shake {
      0% { transform: rotate(0deg); }
      20% { transform: rotate(15deg); }
      40% { transform: rotate(-15deg); }
      60% { transform: rotate(10deg); }
      80% { transform: rotate(-10deg); }
      100% { transform: rotate(0deg); }
    }

    #current-date {
      font-size: 0.85rem;
    }

    #live-clock {
      font-size: 0.95rem;
    }
  </style>

  <!-- 🕒 Clock Script -->
  <script>
    function updateClock() {
      const clockEl = document.getElementById('live-clock');
      const dateEl = document.getElementById('current-date');
      const now = new Date();

      let hours = now.getHours();
      const minutes = now.getMinutes();
      const seconds = now.getSeconds();
      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12 || 12;

      clockEl.textContent = `${pad(hours)}:${pad(minutes)}:${pad(seconds)} ${ampm}`;

      const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
      dateEl.textContent = now.toLocaleDateString(undefined, options);
    }

    function pad(n) {
      return n < 10 ? '0' + n : n;
    }

    setInterval(updateClock, 1000);
    updateClock();
  </script>
</nav>
