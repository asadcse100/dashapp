
<?php $__env->startSection('css'); ?>
    <style>
        .form-horizontal .required .input-group-text:after {
            content: "*";
            color: red;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
<!-- BREADCRUMB -->
<div class="page-meta">
  <nav class="breadcrumb-style-one" aria-label="breadcrumb">
      <div class="row">
          <div class="col-md-10">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Lawyer</li>
                  <li class="breadcrumb-item active" aria-current="page">List</li>
              </ol>
          </div>
          <div class="col-md-2">
              <button style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"
                  class="btn btn-outline-info mb-2 me-4">Court Setup</button>
          </div>
      </div>
  </nav>
</div>
<!-- /BREADCRUMB -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      <div class="widget-content widget-content-area br-8">
        <table id="individual-col-search" class="table dt-table-hover">
              <thead>
                  <tr>
                    <th></th>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Location</th>
                      <th>Category</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>City</th>
                      <th>Room No</th>
                      <th>Desctiption</th>
                      <th class="no-content text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $lawyer_court; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lawyer_courtlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td></td>
                    <td><?php echo e($key + 1); ?></td>
                  <td><?php echo e($lawyer_courtlist->name); ?></td>
                  <td><?php echo e($lawyer_courtlist->email); ?></td>
                  <td><?php echo e($lawyer_courtlist->location); ?></td>
                  <td><?php echo e($lawyer_courtlist->court_category_id); ?></td>
                  <td><?php echo e($lawyer_courtlist->country_id); ?></td>
                  <td><?php echo e($lawyer_courtlist->state_id); ?></td>
                  <td><?php echo e($lawyer_courtlist->city_id); ?></td>
                  <td><?php echo e($lawyer_courtlist->room_number); ?></td>
                  <td><?php echo e($lawyer_courtlist->description); ?></td>
                  <td class="text-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle p-5" href="#" role="button"
                            id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">
                            <a class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#bd-view-modal-lg">View</a>

                            <a class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#bd-edit-modal-lg"
                                >Edit</a>

                            <a class="dropdown-item"
                                href=""
                                onclick="deleteFn()">Delete</a>
                        </div>
                    </div>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          <div class="modal fade bd-example-modal-lg" id="exampleModalToggle" aria-hidden="true"
              aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="">
                          <!-- Start now   -->
                          <div class="row">
                              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                  <div class="widget-content widget-content-area blog-create-section">
                                      <form id="add_form" class="form-horizontal needs-validation"
                                          action="<?php echo e(route('lawyer-court.store')); ?>" method="POST"
                                          novalidate>
                                          <?php echo csrf_field(); ?>
                                          <div class="row layout-spacing">
                                              <div
                                                  class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                  <div
                                                      class="widget-content widget-content-area blog-create-section">
                                                      <div class="card">
                                                        <div class="card-header">
                                                          <h5>Court Setup</h5>
                                                        </div>
                                                          <div class="row layout-top-spacing p-4">
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Name
                                                                        </span>
                                                                        <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="name"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Email</span>
                                                                      <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="email"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Location</span>
                                                                      <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="location"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Court Category</span>
                                                                    <select name="court_category_id" id=""
                                                                        class="form-select"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                        <option selected>Select</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Country</span>
                                                                    <select name="country_id" id=""
                                                                        class="form-select"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                        <option selected>Select</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">State</span>
                                                                    <select name="state_id" id=""
                                                                        class="form-select"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                        <option selected>Select</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">City</span>
                                                                    <select name="city_id" id=""
                                                                        class="form-select"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                        <option selected>Select</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Room No</span>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        id="post-title" name="room_number"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup">Description</span>
                                                                    <textarea class="form-control" name="description" id="post-title" rows="2" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-sm"
                                                                       ></textarea>
                                                                </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <span type="button" data-bs-dismiss="modal"
                                                  class="badge outline-badge-danger mb-2 me-4">Close</span>
                                              <button type="submit"
                                                  class="badge outline-badge-success mb-2 me-4">Save</button>
                                          </div>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                 
              </div>
              <!-- End new Blog  -->
          </div>
      </div>
  </div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\zeroplus20\resources\views/common/lawyer/court/index.blade.php ENDPATH**/ ?>