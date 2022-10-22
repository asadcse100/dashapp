

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
                  class="btn btn-outline-info mb-2 me-4">Layer Setup</button>
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
                    
                      <th>#</th>
                      <th>Case Title</th>
                      <th>Case No</th>
                      <th>File No</th>
                      <th>Client Name</th>
                      <th class="no-content text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@mdo</td>
                  <td class="text-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button"
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
              </tbody>
          </table>
          <div class="modal fade bd-example-modal-lg" id="exampleModalToggle" aria-hidden="true"
              aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel" style="color: gainsboro">Layer Setup</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close">
                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-x">
                                  <line x1="18" y1="6" x2="6" y2="18">
                                  </line>
                                  <line x1="6" y1="6" x2="18" y2="18">
                                  </line>
                              </svg>
                          </button>
                      </div>
                      <div class="modal-body">
                          <!-- Start now   -->
                          <div class="row">
                              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                  <div class="widget-content widget-content-area blog-create-section">
                                      <form id="add_form" class="form-horizontal needs-validation"
                                          action="" method="POST"
                                          novalidate>
                                          <div class="row layout-spacing">
                                              <div
                                                  class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                  <div
                                                      class="widget-content widget-content-area blog-create-section">
                                                      <div class="card">
                                                          <div class="row layout-top-spacing p-4">
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Name</span>
                                                                          <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="name"
                                                                          aria-label="Sizing example input"
                                                                          required>
                                                                      <div class="invalid-feedback">
                                                                          Please fill the Name
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Email</span>
                                                                      <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="email"
                                                                          aria-label="Sizing example input"
                                                                          required>
                                                                      <div class="invalid-feedback">
                                                                          Please fill the Email.
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Mobile No</span>
                                                                      <input type="number"
                                                                          class="form-control"
                                                                          id="post-title" name="Mobile No"
                                                                          aria-label="Sizing example input"
                                                                          required>
                                                                      <div class="invalid-feedback">
                                                                          Please fill the Mobile No.
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-12 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm mb-3">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup">Details</span>
                                                                      <textarea class="form-control" name="details" id="post-title" rows="2" aria-label="Sizing example input"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\zeroplus20\resources\views/common/lawyer/lawyer_setup/index.blade.php ENDPATH**/ ?>