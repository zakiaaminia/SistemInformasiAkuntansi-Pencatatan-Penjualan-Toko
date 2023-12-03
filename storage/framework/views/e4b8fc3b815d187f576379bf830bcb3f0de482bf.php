

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('addon-css'); ?>
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
                Informasi tentang toko.
            </p>

            <div class="card">
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
                <form action="<?php echo e(route('companyProfile.save')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Pratinjau Foto</label>
                                    <img src="<?php echo e(!is_null($item) ? Storage::url($item->image) : url('assets/img/image_not_available.png')); ?>"
                                    class="rounded img-responsive" alt="<?php echo e(!is_null($item) ? $item->name : 'Company image'); ?>" width="100%" id="img-preview">
                                </div>
                                <div class="form-group">
                                    <label class="float-right">
                                        <a href="#" data-toggle="tooltip" title="Klik untuk menghapus foto yang sudah dipilih" style="display:none" id="img-reset">
                                            <code class="text-right">Hapus Foto</code>
                                        </a>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-file-image"></i>
                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="img-file">
                                            <label class="custom-file-label" id="img-name">Pilih Foto</label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo e(!is_null($item) ? $item->name : old('name')); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" cols="30" rows="10" class="form-control"><?php echo e(!is_null($item) ? $item->address : old('address')); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea name="contact" cols="30" rows="10" class="form-control"><?php echo e(!is_null($item) ? $item->contact : old('contact')); ?></textarea>
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
<script src="<?php echo e(url('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(url('js/my_sweetalert.js')); ?>"></script>
<script src="<?php echo e(url('js/image_upload.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/companyProfile/index.blade.php ENDPATH**/ ?>