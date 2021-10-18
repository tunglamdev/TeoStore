 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= URL_PUBLIC ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tèo's Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= URL_PUBLIC ?>/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lam Nguyen</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
          <?php foreach(adminSideBar as $key => $sidebar) :?>
            <li class="nav-item">
              <a href="<?= $sidebar['link'] ?>" class="nav-link">
                <i class="<?= $sidebar['icon'] ?>"></i>
                <p>
                  <?= $sidebar['title'] ?>
                </p>
              </a>
            </li>
          <?php endforeach; ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>