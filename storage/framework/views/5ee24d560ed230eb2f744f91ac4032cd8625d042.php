

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
                Laporan Transaksi
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="transactionReport">
                            <thead>                                 
                                <tr>
                                    <th class="text-center">
                                    #
                                    </th>
                                    <th>Kode Transaksi</th>
                                    <th>Pelanggan</th>
                                    <th>Total</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($index + 1); ?></td>
                                        <td><?php echo e($item->transaction_code); ?></td>
                                        <td><?php echo e($item->customer->name); ?></td>
                                        <td><?php echo e(number_format($item->grand_total, 0,',',',')); ?></td>
                                        <td><?php echo e(date('d-m-Y', strtotime($item->created_at))); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Belum ada data customer.
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/transaction/report.blade.php ENDPATH**/ ?>