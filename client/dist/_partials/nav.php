<nav class="main-header navbar navbar-expand-lg main-navbar navbar-dark sticky-top">
  <!-- Sidebar Toggle -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link toggle-btn" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars fa-lg"></i>
      </a>
    </li>

  <!-- Right-side: Date and Live Clock -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item d-flex align-items-center mr-3">
      <span class="navbar-date mr-2" id="current-date"></span>
      <span class="navbar-clock" id="live-clock"></span>
    </li>
  </ul>
</nav>

<!-- 🔥 Custom Styles -->
<style>
  .main-navbar {
    background-color: #111827;
    border-bottom: 1px solid #1f2937;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    padding-left: 10px;
    padding-right: 10px;
  }

  .main-navbar .nav-link {
    color: #f9fafb !important;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .main-navbar .nav-link:hover {
    color: #10b981 !important;
    transform: scale(1.1);
  }

  .navbar-message {
    font-size: 0.95rem;
    color: #d1d5db;
    font-weight: 500;
    letter-spacing: 0.3px;
    font-family: 'Segoe UI', sans-serif;
  }

  .toggle-btn i {
    transition: transform 0.3s ease;
    color: #9ca3af;
  }

  .toggle-btn:hover i {
    transform: rotate(90deg);
    color: #10b981;
  }

  .navbar-date,
  .navbar-clock {
    font-size: 0.9rem;
    color: #d1d5db;
    font-family: 'Segoe UI', sans-serif;
    font-weight: 500;
  }

  .navbar-clock {
    margin-left: 8px;
    color: #10b981;
  }
</style>

<!-- 🕒 Live Clock and Date Script -->
<script>
  function updateClock() {
    const clockEl = document.getElementById('live-clock');
    const dateEl = document.getElementById('current-date');
    const now = new Date();

    // Format: 10:15:23 AM
    let hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12 || 12;

    clockEl.textContent = `${pad(hours)}:${pad(minutes)}:${pad(seconds)} ${ampm}`;

    // Format Date: Monday, 27 May 2025
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    dateEl.textContent = now.toLocaleDateString(undefined, options);
  }

  function pad(n) {
    return n < 10 ? '0' + n : n;
  }

  setInterval(updateClock, 1000);
  updateClock(); // run once immediately
</script>
