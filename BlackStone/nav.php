    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/bs.png" alt="logo" style="height: 10%;"/></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><center><img src="assets/images/bs-mini.png" alt="logo" style=" width: 100%; height: 10%; margin-left: -40%;" /></center></a>
        </div>
        <ul class="nav">

          <li class="nav-item menu-items <?php if($section == "dashboard"){echo "active";}?>">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title"><?php echo lang("Dashboard");?></span>
            </a>
          </li>

          <li class="nav-item menu-items <?php if($section == "vulnerabilities"){echo "active";}?>">
            <a class="nav-link" href="vulnerabilidades.php">
              <span class="menu-icon">
                <i class="mdi mdi-bug"></i>
              </span>
              <span class="menu-title"><?php echo lang("Vulnerabilities");?></span>
            </a>
          </li>

          <li class="nav-item menu-items <?php if($section == "client"){echo "active";}?>">
            <a class="nav-link" href="clientes.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title"><?php echo lang("Audited Client");?></span>
            </a>
          </li>
          <li class="nav-item menu-items <?php if($section == "reports"){echo "active";}?>">
            <a class="nav-link" href="informes.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title"><?php echo lang("Reports");?></span>
            </a>
          </li>
        </ul>
      </nav>