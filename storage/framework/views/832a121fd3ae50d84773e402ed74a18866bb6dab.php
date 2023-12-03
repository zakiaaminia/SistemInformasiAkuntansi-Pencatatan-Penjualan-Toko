<?php if($message = Session::get('success')): ?>
    <div class="flash-message-success" data-flashmessage="<?php echo e($message); ?>">

    </div>
<?php endif; ?>

<?php if($message = Session::get('fail')): ?>
    <div class="flash-message-fail" data-flashmessage="<?php echo e($message); ?>">

    </div>
<?php endif; ?><?php /**PATH D:\LARAPOS\LaraPOS\resources\views/includes/flashMessage.blade.php ENDPATH**/ ?>