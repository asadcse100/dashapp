@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Edit Category') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="form-horizontal"
                            action="{{ route('project-categories.update', $project_category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">{{ translate('Name') }}</label>
                                <input type="text" id="name" name="name"
                                    placeholder="{{ translate('Category Name') }}" value="{{ $project_category->name }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="parent_id">{{ translate('Parent') }}</label>
                                <select class="select2 form-control aiz-selectpicker" name="parent_id" data-toggle="select2"
                                    data-placeholder="Choose ..."data-live-search="true">
                                    <option value="0"@if ($project_category->parent_id == '0') selected @endif>
                                        {{ translate('No Parent') }}</option>
                                    @foreach ($project_categories as $project_cat)
                                        <option value="{{ $project_cat->id }}"
                                            @if ($project_cat->id == $project_category->parent_id) selected @endif>{{ $project_cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image">{{ translate('Icon') }}</label>
                                <input class="form-control file-upload-input" type="file" id="formFile">
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update Category') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function show_cancel_request_modal(id) {
            $.post('{{ route('cancel-project-request.show') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#cancel-project-request').modal('show');
                $('#cancel-project-request_body').html(data);
            })
        }

        function sort_cancel_projects(el) {
            $('#sort_cancel_projects').submit();
        }
    </script>
@endsection
