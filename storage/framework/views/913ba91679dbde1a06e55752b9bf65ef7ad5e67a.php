
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top">
    <div class="container">
      <a class="navbar-brand me-2" href="/">
        <img
          src="/img/logotuangpedia.png"
          height="50"
          alt="Tuang Logo"
          style="margin-top: -7px;"
        />
      </a>
    
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navigasi">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-2">
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Bingung Mau Makan Dimana? Cari aja di TuangPedia!") ? 'active' : ''); ?>" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Daftar Resto") ? 'active' : ''); ?>" href="/daftarresto">Daftar Resto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Kategori Resto") ? 'active' : ''); ?>" href="/categories">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Tentang Kami") ? 'active' : ''); ?>" href="/about">Tentang</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ms-auto">
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, <?php echo e(auth()->user()->name); ?>!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>  Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <?php endif; ?>
            <li>
              <form action="/keluar" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>  Keluar</button>
              </form>
            </li>
          </ul>
        </li>
        <?php else: ?>
          <button type="button" class="btn btn-tp-border px-3 me-2 text-decoration-none">
            <a href="/masuk" class="text-decoration-none text-tp">Masuk</a>
          </button>
          <button type="button" class="btn btn-tp-orange me-3 text-decoration-none">
            <a href="/registrasi" class="text-decoration-none text-white">Registrasi</a>
          </button>
        <?php endif; ?>
    </ul>

    </div>
  </div>
</nav><?php /**PATH D:\Applications\coba-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>