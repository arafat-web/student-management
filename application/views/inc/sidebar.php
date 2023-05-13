<div class="offcanvas offcanvas-start bg-purple text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header shadow-sm d-block text-center">
      <div class="offcanvas-title" id="offcanvasExampleLabel">
        <a class="navbar-brand fw-bold" href="index.php">MyBudget</a>
      </div>
    </div>
    <div class="offcanvas-body pt-3 p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav sidenav">
          <li class="nav-link bordered px-3">
            <a href="index.php" class="nav-link px-3 <?php if(isset($page) && $page == 'dashboard') echo 'active'; ?>">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-link bordered px-3">
            <a href="add-transaction.php" class="nav-link px-3 <?php if(isset($page) && $page == 'add-transaction') echo 'active'; ?>">
              <span class="me-2"><i class="bi bi-coin"></i></span>
              <span>Add Transaction</span>
            </a>
          </li>

          <li class="nav-link bordered px-3">
            <a href="transaction.php" class="nav-link px-3 <?php if(isset($page) && $page == 'all-transaction') echo 'active'; ?>">
              <span class="me-2"><i class="bi bi-cash-coin"></i></span>
              <span>Manage Transaction</span>
            </a>
          </li>
          <li class="nav-link bordered px-3">
            <a href="profile.php" class="nav-link px-3 <?php if(isset($page) && $page == 'profile') echo 'active'; ?>">
              <span class="me-2"><i class="bi bi-person"></i></span>
              <span>Profile</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>