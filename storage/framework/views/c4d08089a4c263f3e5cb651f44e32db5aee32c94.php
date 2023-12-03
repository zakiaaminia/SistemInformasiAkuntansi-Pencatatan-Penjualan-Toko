<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          
            <?php if(!(Request::url() === url('login') || Request::url() === url('register'))): ?>
                <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            
            <?php echo $__env->make('includes.flashMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            
            <?php if(!(Request::url() === url('login') || Request::url() === url('register'))): ?>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\New folder (2)\LaraPOS\resources\views/layouts/app.blade.php ENDPATH**/ ?>