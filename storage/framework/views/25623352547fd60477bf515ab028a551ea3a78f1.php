<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('layouts.appinc.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('css'); ?>
<body class="layout-boxed">

    <?php echo $__env->make('layouts.appinc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="nav">
        <?php echo $__env->make('layouts.appinc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="main-content">

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.appinc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--  END CONTENT AREA  -->
    </div>
    <?php echo $__env->make('layouts.appinc.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/layouts/appindex.blade.php ENDPATH**/ ?>