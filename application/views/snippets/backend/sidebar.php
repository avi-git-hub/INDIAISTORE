<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
    <img src="<?= PATH_BACKEND_CUSTOM_IMG . 'logo.png' ?>" alt="Logo" class="d-block mx-auto" style="opacity: .8">
    <!--brand-image-->

    <!--<span class="brand-text font-weight-light">Admin</span>-->
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
    
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-header">Catalog</li>

        <li class="nav-item">
          <a href="<?= base_url('admin/product-feature/categories') ?>" class="nav-link">
            <i class="nav-icon fas fa-star"></i>
            <p>Product Features</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/categories') ?>" class="nav-link">
            <i class="nav-icon fas fa-boxes"></i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/products') ?>" class="nav-link">
            <i class="nav-icon fab fa-apple"></i>
            <p>Products</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/accessories') ?>" class="nav-link">
            <i class="nav-icon fab fa-apple"></i>
            <p>Accessories</p>
          </a>
        </li>

        <li class="nav-header">Misc</li>

        <li class="nav-item">
          <a href="<?= base_url('admin/banner/positions') ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>Banners</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/stories') ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>Stories</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/stores') ?>" class="nav-link">
            <i class="nav-icon fas fa-store"></i>
            <p>Stores</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/partners') ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Partners</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-city"></i>

            <p>States & Cities <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/state-city/states') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>States</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('admin/state-city/cities') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cities</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/navigation/sections') ?>" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>Navigations</p>
          </a>
        </li>

        <li class="nav-header">Components</li>

        <li class="nav-item">
          <a href="<?= base_url('admin/components/tabs-block') ?>" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>Tabs Block</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/routes') ?>" class="nav-link">
            <i class="nav-icon fas fa-route"></i>
            <p>Routes</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>

            <p>Search <i class="right fas fa-angle-left"></i></p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/search/trending') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Trending Searches</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('admin/search/other') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Other Searches</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/application/version') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>App Versioning</p>
          </a>
        </li>

        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            
            <p>Categories <i class="right fas fa-angle-left"></i></p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<? //= base_url('admin/categories/') 
                        ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manager Categories</p>
              </a>
            </li>

          </ul>
        </li>-->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>