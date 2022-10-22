

<?php $__env->startSection('content'); ?>


<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            h2 class="text-center ">Court Setup</h2>
            <div class="my-form  mx-auto w-75  ">
                <form action="">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label text-lg-end ">Name</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Email" class="col-sm-3 col-form-label text-lg-end ">Email</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="location" class="col-sm-3  col-form-label text-lg-end ">Location</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="location">
                        </div>

                        <label for="room" class="col-sm-3 col-form-label text-lg-end ">Category</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="country" class="col-sm-3 col-form-label text-lg-end ">Country</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <label for="state" class="col-sm-3 col-form-label text-lg-end ">State</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="city" class="col-sm-3 col-form-label text-lg-end ">City</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                    </div>


                    <div class="mb-3 row">
                        <label for="room" class="col-sm-3 col-form-label text-lg-end ">Room No</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="room">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="actDescription" class="col-sm-3 col-form-label text-lg-end">Description</label>
                        <div class="col-sm-9 col-lg-9">
                            <textarea class="form-control" id="actDescription" rows="5"></textarea>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/common/lawyer/court/index.blade.php ENDPATH**/ ?>