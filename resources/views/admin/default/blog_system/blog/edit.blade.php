@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="widget-content widget-content-area layout-top-spacing">

                <form id="add_form" class="form-horizontal  needs-validation"
                    action="{{ route('blog.update', $blog->id) }}" method="POST" novalidate
                    onsubmit="return validateform()">
                    @csrf
                    <div class="row layout-spacing">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="col-md-6 layout-top-spacing p-2">
                                    <h4 class="mb-md-0 h6">Update Blog Information</h4>
                                </div>
                                <hr>
                                <div class="">
                                    <div class="row layout-top-spacing p-4">
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom01">Blog Title</span>
                                                <input type="text" onkeyup="makeSlug(this.value)" id="title"
                                                    name="title" value="{{ $blog->title }}" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom02">Category</span>
                                                <select class="form-select aiz-selectpicker" name="category_id"
                                                    id="category_id" data-live-search="true"
                                                    title="{{ translate('Select category') }}" required
                                                    data-selected="{{ optional($blog->category)->id }}">
                                                    @foreach ($blog_categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom02">Slug</span>
                                                <input type="text" value="{{ $blog->slug }}" name="slug"
                                                    id="slug" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Banner</span>
                                                <input class="form-control file-upload-input" type="file" name="banner"
                                                    value="{{ $blog->banner }}" id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Short
                                                    Description</span>
                                                <textarea name="short_description" rows="2" value="{{ $blog->short_description }}" class="form-control"
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                                <textarea name="description" rows="2" value="{{ $blog->description }}" class="form-control" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Meta Title</span>
                                                <input type="text" value="{{ $blog->meta_title }}" class="form-control"
                                                    name="meta_title">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Meta
                                                    Description</span>
                                                <textarea name="meta_description" value="{{ $blog->meta_description }}" rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Meta
                                                    Keywords</span>
                                                <input type="text" value="{{ $blog->meta_keywords }}"
                                                    class="form-control" id="meta_keywords" name="meta_keywords">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Meta Image</span>
                                                <input class="form-control file-upload-input" type="file"
                                                    value="{{ $blog->meta_img }}" name="meta_img" id="formFile">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="col-md-12 p-2" style="text-align:right;">
                                    <a href="{{ route('blog.index') }}" class="btn btn-outline-danger mb-2 me-4">
                                        <span>Discard</span>
                                    </a>
                                    <button type="submit" class="btn btn-outline-success mb-2 me-4">Save</button>

                                </div>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
<script>
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
</script>
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
