<?php
/* Persisit System Settings On Brand */
$ret = "SELECT * FROM `ib_systemsettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
  <footer class="main-footer bg-transparent text-dark border-top shadow-sm py-3" style="backdrop-filter: blur(8px);">
    <div class="d-flex justify-content-between align-items-center container">
      <strong>
        &copy; 2024-<?php echo date('Y'); ?> —
        <span class="text-success"><?php echo $sys->sys_name; ?></span>
        by <a href="https://jis.digital" class="text-decoration-none text-info font-weight-bold" target="_blank">jis.digital</a>
      </strong>
      <div class="d-none d-sm-inline-block">
        <b>Version</b> 1.0.0 – IDB
      </div>
    </div>
  </footer>
<?php } ?>
