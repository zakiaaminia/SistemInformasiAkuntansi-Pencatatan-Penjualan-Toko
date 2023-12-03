

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
                Profil saya
            </p>

            <div class="card">

                <form action="<?php echo e(route('profile.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
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

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Pratinjau Foto</label>
                                    <img src="<?php echo e(Storage::disk('public')->exists($item->photo) ? Storage::url($item->photo) : url('assets/img/image_not_available.png')); ?>"
                                    class="rounded img-responsive" alt="<?php echo e($item->name); ?>" width="100%" id="img-preview">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Foto</label>
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
                                            <input type="file" class="custom-file-input" name="photo" id="img-file">
                                            <label class="custom-file-label" id="img-name">Pilih Foto</label>
                                          </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="name" value="<?php echo e($item->name); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input type="email" class="form-control" name="email" value="<?php echo e($item->email); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password <br/>
                                        <code>Masukkan password jika ingin <b>ganti</b> password.</code>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="showPassword">
                                        <label class="form-check-label" for="showPassword">
                                            Perlihatkan Password
                                        </label>
                                    </div>
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
<script src="<?php echo e(url('js/image_upload.js')); ?>"></script>
<script>
$('#showPassword').click(function() {
    if($('#showPassword').is(':checked')){
        $('#password').prop("type", "text");
    }else{
        $('#password').prop("type", "password");
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (2)\LaraPOS\resources\views/pages/profile/index.blade.php ENDPATH**/ ?>