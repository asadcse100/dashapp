@extends('layouts.app')

@section('content')


<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <h2 class="text-center ">Court Category Setup</h2>
            <div class="my-form  mx-auto w-75  ">
                <form action="">
                    <div class="mb-3 row">
                        <label for="actName" class="col-sm-3 col-form-label text-lg-center ">Name</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="actName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="actDescription" class="col-sm-3 col-form-label text-lg-center">Description</label>
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

@endsection
