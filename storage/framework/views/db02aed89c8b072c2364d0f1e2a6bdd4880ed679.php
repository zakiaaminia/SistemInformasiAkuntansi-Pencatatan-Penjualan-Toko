

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
                Berisi daftar produk yang tersedia.
            </p>

            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('product.create')); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>                                 
                                <tr>
                                    <th class="text-center">
                                    #
                                    </th>
                                    <th>Photo</th>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th>Kategori</th>
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
                                        <td><?php echo e($item->product_code); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td>Rp. <?php echo e(number_format($item->purchase_price, 0,',','.')); ?></td>
                                        <td>Rp. <?php echo e(number_format($item->selling_price, 0,',','.')); ?></td>
                                        <td><?php echo e($item->stock); ?></td>
                                        <td><?php echo e($item->category->name); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('product.edit', $item->id)); ?>" class="btn btn-success btn-icon icon-left">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="<?php echo e(route('product.destroy', $item->id)); ?>" method="post">
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
                                            Belum ada data produk.
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/product/index.blade.php ENDPATH**/ ?>