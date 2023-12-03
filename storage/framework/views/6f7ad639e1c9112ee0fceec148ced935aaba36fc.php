<div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <figure class="avatar mr-2 avatar-sm">
                <img alt="image" src="<?php echo e(Storage::disk('public')->exists(Auth::user()->photo) ? Storage::url(Auth::user()->photo) : 'https://ui-avatars.com/api/?name=' . Auth::user()->name . '&background=3abaf4&color=fff'); ?>" class="rounded-circle mr-1">
            </figure>

            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo e(Auth::user()->name); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?php echo e(route('profile.index')); ?>" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <form action="<?php echo e(route('logout')); ?>" method="post" id="logout">
                    <?php echo csrf_field(); ?>
                    <a href="#" class="dropdown-item has-icon text-danger" onclick="document.getElementById('logout').submit();"><i class="fas fa-sign-out-alt d-inline"></i>Logout</a>
                </form>
            </div>
        </li>
    </ul>
    </nav><?php /**PATH D:\LARAPOS\LaraPOS\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>