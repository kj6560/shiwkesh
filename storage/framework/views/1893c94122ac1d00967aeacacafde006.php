<?php if($errors->any()): ?>
<div class="card mb-4" style="margin: 10px; padding:10px;">
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\backend\errors\formErrors.blade.php ENDPATH**/ ?>