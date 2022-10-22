

<?php $__env->startSection('content'); ?>

<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <h2 class="text-center ">Case Setup</h2>
            <div class="my-form  mx-auto w-75 ">
                <form action="" class="">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 col-form-label text-lg-end ">Case Title</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="title">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="caseNo" class="col-sm-3  col-form-label text-lg-end ">Case No</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="caseNo">
                        </div>

                        <label for="fileNo" class="col-sm-3  col-form-label text-lg-end ">File No</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="fileNo">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="refName" class="col-sm-3  col-form-label text-lg-end ">Ref Name</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="refName">
                        </div>

                        <label for="refMobile" class="col-sm-3  col-form-label text-lg-end ">Ref Mobile</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="refMobile">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="country" class="col-sm-3 col-form-label text-lg-end ">Case Category</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <label for="state" class="col-sm-3 col-form-label text-lg-end ">Case Stage</label>
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
                        <label for="country" class="col-sm-3 col-form-label text-lg-end ">Main Layer</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <label for="state" class="col-sm-3 col-form-label text-lg-end ">Case Court</label>
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
                        <label for="state" class="col-sm-3 col-form-label text-lg-end ">Client Standing</label>
                        <div class="form-check col pt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                plaintiff
                            </label>
                        </div>
                        <div class="form-check col  pt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Opposite
                            </label>
                        </div>

                        <label for="ChargeAmount" class="col-sm-3  col-form-label text-lg-end ">Case Charge Amount</label>
                        <div class="col-sm-9 col-lg-3 ">
                          <input type="text" class="form-control" id="ChargeAmount">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="caseReceivingDate" class="col-sm-3  col-form-label text-lg-end ">Case Receiving Date</label>
                        <div class="col-sm-9 col-lg-3 ">
                            <input type="date" class="form-control" id="caseReceivingDate" name="">
                        </div>

                        <label for="fillingDate" class="col-sm-3  col-form-label text-lg-end ">Case Filling Date</label>
                        <div class="col-sm-9 col-lg-3 ">
                            <input type="date" class="form-control" id="fillingDate" name="">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="caseDetail" class="col-sm-3 col-form-label text-lg-end">Case Detail</label>
                        <div class="col-sm-9 col-lg-9">
                            <textarea class="form-control" id="caseDetail" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="caseAct" class="col-sm-3 col-form-label text-lg-end ">Case Acts</label>
                        <div class="col-sm-9 col-lg-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="hearingDate" class="col-sm-3  col-form-label text-lg-end ">Hearing Date</label>
                        <div class="col-sm-9 col-lg-3 ">
                            <input type="date" class="form-control" id="hearingDate" name="">
                        </div>

                        <label for="JudgementDate" class="col-sm-3  col-form-label text-lg-end ">Judgement Date</label>
                        <div class="col-sm-9 col-lg-3 ">
                            <input type="date" class="form-control" id="JudgementDate" name="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="JudgementDetails" class="col-sm-3 col-form-label text-lg-end">Judgement Details</label>
                        <div class="col-sm-9 col-lg-9">
                            <textarea class="form-control" id="JudgementDetails" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label text-lg-end ">Judgement Status</label>
                        <div class="col-sm-9 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <label for="" class="col-sm-3 col-form-label text-lg-end ">Case Status</label>
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
                        <label for="hearingDate" class="col-sm-3  col-form-label text-lg-end ">Attachments Files</label>
                        <div class="col-sm-9 col-lg-3 ">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>

                    <div class="col-auto pb-5">
                        <button type="submit" class="btn btn-outline-primary mb-3 float-end btn-lg">Save</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/common/lawyer/case/index.blade.php ENDPATH**/ ?>