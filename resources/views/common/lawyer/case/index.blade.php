@extends('layouts.app')
@section('css')
    <style>
        .form-horizontal .required .input-group-text:after {
            content: "*";
            color: red;
        }
    </style>
@endsection
@section('content')


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
                  <li class="breadcrumb-item active" aria-current="page">Case List</li>
              </ol>
          </div>
          <div class="col-md-2">
              <button style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"
                  class="btn btn-outline-info mb-2 me-4">Case Setup</button>
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
                      <th>Ref Name</th>
                      <th>Case Category</th>
                      <th>Case Stage</th>
                      <th>Main Layer</th>
                      <th>Case Court</th>
                      <th>Receiving Date</th>
                      <th class="no-content text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">2</th>
                  <td>Divorce Lawyer</td>
                  <td>1</td>
                  <td>@fat</td>
                  <td>@asad</td>
                  <td>Divorce</td>
                  <td>final</td>
                  <td>BRIT ROBINS</td>
                  <td>High Court</td>
                  <td>10-13-2022</td>
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
                      <div class="">
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
                                                        <div class="card-header">
                                                          <h5>Add Case</h5>
                                                        </div>
                                                          <div class="row layout-top-spacing p-4">
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Case Title
                                                                        </span>
                                                                        <input type="text"
                                                                          class="form-control"
                                                                          id="post-title" name="case_title"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">Case No</span>
                                                                      <input type="number"
                                                                          class="form-control"
                                                                          id="post-title" name="case_no"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm  mb-3 required">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup-sizing-sm">File No</span>
                                                                      <input type="number"
                                                                          class="form-control"
                                                                          id="post-title" name="file_no"
                                                                          aria-label="Sizing example input"
                                                                          aria-describedby="inputGroup-sizing-sm"
                                                                          required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Ref Name</span>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        id="post-title" name="ref_name"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Ref Mobile</span>
                                                                    <input type="number"
                                                                        class="form-control"
                                                                        id="post-title" name="ref_mobile"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Case Category</span>
                                                                    <select name="case_cate" id=""
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
                                                                        id="inputGroup-sizing-sm">Case Stage</span>
                                                                    <select name="case_stage" id=""
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
                                                                        id="inputGroup-sizing-sm">Main Lawyer</span>
                                                                    <select name="main_lawyer" id=""
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
                                                                        id="inputGroup-sizing-sm">Case Court</span>
                                                                    <select name="case_court" id=""
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
                                                                        id="inputGroup-sizing-sm">Client Standing</span>
                                                                        <div class="form-check col pt-2 m-1">
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
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Case Charge Amount</span>
                                                                    <input type="number"
                                                                        class="form-control"
                                                                        id="post-title" name="Charge_amount"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Case Receiving Date</span>
                                                                    <input type="date"
                                                                        class="form-control"
                                                                        id="post-title" name="caseReceivingDate"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Case Filling Date</span>
                                                                    <input type="date"
                                                                        class="form-control"
                                                                        id="post-title" name="fillingDate"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            
                                                              <div class="col-sm-12 mb-4">
                                                                  <div
                                                                      class="input-group input-group-sm input-group-sm mb-3">
                                                                      <span class="input-group-text"
                                                                          id="inputGroup">Case Detail</span>
                                                                      <textarea class="form-control" name="caseDetail" id="post-title" rows="2" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-sm"
                                                                         ></textarea>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Case Acts</span>
                                                                    <select name="case_act" id=""
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
                                                                        id="inputGroup-sizing-sm">Hearing Date</span>
                                                                    <input type="date"
                                                                        class="form-control"
                                                                        id="post-title" name="hearingDate"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Judgement Date</span>
                                                                    <input type="date"
                                                                        class="form-control"
                                                                        id="post-title" name="JudgementDate"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mb-4">
                                                                <div
                                                                    class="input-group input-group-sm input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup">Judgement Details</span>
                                                                    <textarea class="form-control" name="JudgementDetails" id="post-title" rows="2" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-sm"
                                                                       ></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Judgement Status</span>
                                                                    <select name="judge_status" id=""
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
                                                                        id="inputGroup-sizing-sm">Case Status</span>
                                                                    <select name="case_status" id=""
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
                                                            <div class="col-sm-12 mb-4">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Attachments Files</span>
                                                                    <input type="file" class="form-control"
                                                                        type="file" name="file"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup-sizing-sm">
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

@endsection
