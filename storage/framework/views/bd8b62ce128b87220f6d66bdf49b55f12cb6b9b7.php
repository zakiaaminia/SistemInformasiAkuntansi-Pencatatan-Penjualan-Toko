

<?php $__env->startSection('title', $title); ?>

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
                Halaman untuk menambahkan kategori produk baru.
            </p>

            <div class="card">

                <form action="<?php echo e(route('product-category.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                        </button>
                                        <?php echo e($error); ?>

                                    </div>
                                    </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                        <?php endif; ?>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="description"><?php echo e(old('description')); ?></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/product/category/create.blade.php ENDPATH**/ ?>