<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container">
    <a class="navbar-brand" href="/">Risma Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Home" ) ? 'active' : ''); ?>"" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo e(($title == "About" ) ? 'active' : ''); ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title == "Posts" ) ? 'active' : ''); ?>"" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH D:\Aplikasi\coba2-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>