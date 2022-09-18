<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/daftarresto*') ? 'active' : ''); ?>" href="/dashboard/daftarresto">
            <span data-feather="file-text"></span>
            Daftar Resto
          </a>
        </li>
      </ul>
    </div>
  </nav><?php /**PATH D:\Applications\coba-laravel\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>