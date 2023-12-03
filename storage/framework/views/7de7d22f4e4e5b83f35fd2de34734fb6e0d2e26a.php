

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('addon-css'); ?>
<link rel="stylesheet" href="<?php echo e(url('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('assets/modules/izitoast/css/iziToast.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e($title); ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">
                <?php echo e($title); ?>

            </h2>
            <p class="section-lead">
                Daftar pengguna yang terdaftar.
            </p>

            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('user.create')); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>                                 
                                <tr>
                                    <th class="text-center">
                                    #
                                    </th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Verifikasi</th>
                                    <th>Dibuat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($index + 1); ?></td>
                                        <td class="text-center">
                                            <img src="<?php echo e(Storage::disk('public')->exists($item->photo) ? Storage::url($item->photo) : url('assets/img/image_not_available.png')); ?>"
                                            alt="<?php echo e($item->name); ?>" class="img-fluid rounded mt-1 mb-1" height="10px" width="80px" />
                                        </td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td>
                                            <span class="badge <?php echo e($item->email_verified_at ? 'badge-success' : 'badge-warning'); ?>">
                                                <?php echo e($item->email_verified_at ? "Sudah" : "Belum"); ?>

                                            </span>
                                        </td>
                                        <td><?php echo e(date('d-m-Y', strtotime($item->created_at))); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('user.edit', $item->id)); ?>" class="btn btn-success btn-icon icon-left">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="<?php echo e(route('user.destroy', $item->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="btn btn-danger btn-icon icon-left btn-delete">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            Belum ada data user.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('addon-script'); ?>
<script src="<?php echo e(url('assets/modules/sweetalert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/modules/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(url('js/my_datatables.js')); ?>"></script>
<script src="<?php echo e(url('js/my_sweetalert.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAPOS\LaraPOS\resources\views/pages/user/index.blade.php ENDPATH**/ ?>