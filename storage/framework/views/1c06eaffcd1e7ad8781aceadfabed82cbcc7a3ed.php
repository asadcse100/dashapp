<?php $__env->startSection('content'); ?>


<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

        <h2 class="text-center ">Layer Setup</h2>
        <div class="my-form  mx-auto w-20">
            <form action="#">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-3 col-form-label text-lg-center ">Name</label>
                    <div class="col-sm-6 col-lg-6">
                      <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label text-lg-center ">Email</label>
                    <div class="col-sm-6 col-lg-6">
                      <input type="text" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mobile" class="col-sm-3 col-form-label text-lg-center ">Mobile No</label>
                    <div class="col-sm-6 col-lg-6">
                      <input type="text" class="form-control" name="mobile" id="mobile">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="details" class="col-sm-3 col-form-label text-lg-center">Details</label>
                    <div class="col-sm-6 col-lg-6">
                        <textarea class="form-control" id="details" rows="5"></textarea>

                        <button type="button" class="btn btn-outline-primary btn-lg mt-4">Close</button>
                        <button type="button" class="btn btn-outline-primary btn-lg float-end mt-4">Save</button>
                    </div>
                </div>
            </form>

        </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/frontend/lawyer/index.blade.php ENDPATH**/ ?>