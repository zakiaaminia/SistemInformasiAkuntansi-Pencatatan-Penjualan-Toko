

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
                Halaman untuk menambahkan pelanggan baru.
            </p>

            <div class="card">

                <form action="<?php echo e(route('customer.store')); ?>" method="post">
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

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" class="form-control phone-number" name="phone_number" value="<?php echo e(old('phone_number')); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" class="form-control" cols="30" rows="10"><?php echo e(old('address')); ?></textarea>
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

<?php $__env->startSection('addon-script'); ?>
<script src="<?php echo e(url('assets/modules/cleave-js/dist/cleave.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/modules/cleave-js/dist/addons/cleave-phone.id.js')); ?>"></script>
<script src="<?php echo e(url('js/my_cleave.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/customer/create.blade.php ENDPATH**/ ?>