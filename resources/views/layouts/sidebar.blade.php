
<body>
  <div class="sidebar">
    <div class="logo">
      <img src="images/logo.png" alt="BloodKind Logo">
      <h2>BLOODKIND</h2>
    </div>
    <nav class="nav-links">
      <a href="{{ route('dashboard') }}">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
      </a>
     <a href="{{ route('donor') }}">
        <i class="fa-solid fa-user icon"></i>   
        <span>Donor Registration</span>
      </a>
      <a href="{{ route('inventory') }}">
        <i class="fa-solid fa-droplet"></i>
        <span>Blood Inventory</span>
      </a>
      <a href="{{ route('matching') }}">
        <i class="fa-solid fa-hand-holding-droplet"></i>
        <span>Blood Matching</span>
      </a>
    </nav>
    <div class="bottom-section">
      <div class="admin-info">
        <i class="fa-solid fa-user icon"></i>
        <div>
          <strong>ADMIN USER</strong><br>
          <small>System Administrator</small>
        </div>
      </div>
      <a href="{{ route('landing') }}" class="logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
      </a>
    </div>
  </div>
</body>
