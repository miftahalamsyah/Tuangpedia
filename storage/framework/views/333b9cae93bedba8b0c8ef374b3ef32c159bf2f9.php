<link href="/css/style.css" rel="stylesheet">
<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a class="navbar-brand bg-tp text-white col-md-3 col-lg-2 me-0 px-5 " href="/"><img
      src="/img/logotuangpedia.png"
      height="25"
      alt="Tuang Logo"
      style="margin-top: -7px;"
    />TuangPedia</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/keluar" method="post">
          <?php echo csrf_field(); ?>
          <button type="submit" class="nav-link px-3 bg-light border-0">Keluar <span data-feather="log-out"></span></button>
        </form>
      </div>
    </div>
  </header><?php /**PATH D:\Applications\coba-laravel\resources\views/dashboard/layouts/header.blade.php ENDPATH**/ ?>