<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('layouts.inc.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('css'); ?>

<body class="layout-boxed">
    <!-- BEGIN Dark and Light -->
    <div id="load_screen"></div>
    <!--  END Dark and Light -->
    <?php echo $__env->make('layouts.inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay show"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN SIDEBAR  -->
        <?php echo $__env->make('layouts.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--  END SIDEBAR  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('layouts.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <?php echo $__env->yieldContent('modal'); ?>
    <!-- END MAIN CONTAINER -->
    <?php echo $__env->make('layouts.inc.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/layouts/app.blade.php ENDPATH**/ ?>