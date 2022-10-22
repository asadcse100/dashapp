@extends('layouts.app')

@section('content')

<section class="py-4 py-lg-5">
    <div class="layout-px-spacing">


        <h2 class="text-center ">List</h2>

        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
                @foreach ($lawyer_act as $data)
                <tr id="todo{{$data->id}}">
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td><button onclick="editData({{$data->id}})">Edit</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <div class="middle-content container-xxl p-0">
            <h2 class="text-center ">Act Setup</h2>
            <div class="my-form  mx-auto w-75  ">
                <form action="">
                    <div class="mb-3 row">
                        <label for="actName" class="col-sm-3 col-form-label text-lg-center ">Act Name</label>
                        <div class="col-sm-9 col-lg-9">
                          <input type="text" class="form-control" id="actName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="actDescription" class="col-sm-3 col-form-label text-lg-center">Act Description</label>
                        <div class="col-sm-9 col-lg-9">
                            <textarea class="form-control" id="actDescription" rows="5"></textarea>

                            <button type="button" class="btn btn-primary btn-lg mt-4">Close</button>
                            <button type="button" class="btn btn-primary btn-lg float-end mt-4">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
