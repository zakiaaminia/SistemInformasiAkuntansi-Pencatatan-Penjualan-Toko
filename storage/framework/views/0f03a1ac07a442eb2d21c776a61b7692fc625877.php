

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Home Page</h1>
      </div>

      <div class="section-body">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-1">
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Pelanggan</h4>
                </div>
                <div class="card-body">
                  <?php echo e($customer); ?>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-1">
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Keuntungan <code class="float-right">Bulan ini</code></h4>
                </div>
                <div class="card-body">
                  <?php echo e($profit); ?>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-1">
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Transaksi <code class="float-right">Bulan ini</code></h4>
                </div>
                <div class="card-body">
                  <?php echo e($totalTransaction); ?>

                </div>
              </div>
            </div>
          </div>

      </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAPOS\LaraPOS\resources\views/home.blade.php ENDPATH**/ ?>