@extends('layouts.app')

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="{{ asset('templete') }}/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="{{ asset('templete') }}/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/elements/alert.css">

    <link href="{{ asset('templete') }}/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/forms/switches.css">
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />


    <link href="{{ asset('templete') }}/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/elements/alert.css">

    <link href="{{ asset('templete') }}/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/forms/switches.css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/tagify/custom-tagify.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/src/stepper/bsStepper.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/scrollspyNav.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/stepper/custom-bsStepper.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/scrollspyNav.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/stepper/custom-bsStepper.css">

    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('templete') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/css/light/editors/markdown/simplemde.min.css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/css/dark/editors/markdown/simplemde.min.css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />

    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 250px;
        }
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Share Your Matter</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="wizard_Default">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div class="bs-stepper stepper-form-one">
                                    <div class="bs-stepper-header" role="tablist">
                                        <div class="step" data-target="#defaultStep-one">
                                            <button type="button" class="step-trigger" role="tab">
                                            </button>
                                        </div>
                                        <div class="step" data-target="#defaultStep-three">
                                            <button type="button" class="step-trigger" role="tab">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content">
                                        <div id="defaultStep-one" class="content" role="tabpanel">
                                            <form class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="defaultInputAddress" class="form-label">Matter
                                                        Title</label>
                                                    <input type="text" class="form-control" id="defaultInputAddress2"
                                                        placeholder="Enter your matter title">

                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="defaultInputAddress2" class="form-label">Matter
                                                        Category</label>
                                                    <select id="defaultInputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="defaultInputCity" class="form-label">Matter
                                                        Details</label>
                                                    <textarea id="about_service" name="about_service" rows="40" cols="50"> </textarea>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="defaultInputState" class="form-label">Matter
                                                        Image</label>
                                                    <input type="file" class="form-control" type="file"
                                                        name="service_photo" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm">
                                                </div>


                                            </form>

                                            <div class="button-action mt-5">
                                                <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                <button class="btn btn-secondary btn-nxt">Next</button>
                                            </div>
                                        </div>

                                        <div id="defaultStep-three" class="content" role="tabpanel">
                                            <form class="row g-3">
                                                <div class="col-md-4">
                                                    <label for="defaultInputState" class="form-label">Expert List</label>
                                                    <select id="defaultInputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="row layout-top-spacing">
                                                        <div class="card col-md-2 m-2">
                                                            <div class="card-top-content text-center">
                                                                <div class="avatar avatar-xl my-2">
                                                                    <img alt="avatar"
                                                                        src="{{ asset('templete') }}/src/assets/img/robin(1).jpg"
                                                                        class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="card-body  text-center">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="mb-0">This is some text within a card body.</p>
                                                            </div>
                                                            <div class="card-footer pt-0 border-0 text-center">
                                                                <a type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-xl">
                                                                    Expertness
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-2 m-2">
                                                            <div class="card-top-content text-center">
                                                                <div class="avatar avatar-xl my-2">
                                                                    <img alt="avatar"
                                                                        src="{{ asset('templete') }}/src/assets/img/robin(1).jpg"
                                                                        class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="card-body  text-center">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="mb-0">This is some text within a card body.</p>
                                                            </div>
                                                            <div class="card-footer pt-0 border-0 text-center">
                                                                <a type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-xl">
                                                                    Expertness
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-xl" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 text-center">
                                                                        <div class="avatar avatar-xl my-2">
                                                                            <img alt="avatar"
                                                                                src="{{ asset('templete') }}/src/assets/img/robin(1).jpg"
                                                                                class="rounded-circle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 text-center">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            BRIT ROBIN
                                                                        </h5>
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Lawyer
                                                                        </h5>
                                                                        <h6 class="modal-title" id="exampleModalLabel">
                                                                            Complete Project (50) <span>4.5*</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                <div class="info">
                                                                    <h6 class="">Work Experience</h6>
                                                                    <hr>

                                                                    <div class="my-3">
                                                                        <div class="row gutters-10">
                                                                            <div class="col-md-4 p-2">
                                                                                <div class="card br-8">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-9">
                                                                                                <h4 class="h6 mb-1">
                                                                                                    test
                                                                                                </h4>
                                                                                                <ul
                                                                                                    class="list-unstyled text-secondary mb-0">
                                                                                                    <li
                                                                                                        class="text-primary">
                                                                                                        zeroplus
                                                                                                    </li>

                                                                                                    <li>Dhaka
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                <div class="info">
                                                                    <h6 class="">Educational Information</h6>
                                                                    <hr>

                                                                    <div class="my-3">
                                                                        <div class="row gutters-10">
                                                                            <div class="col-md-4 p-2">
                                                                                <div class="card br-8">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-9">
                                                                                                <h4 class="h6 mb-1">
                                                                                                    BSc
                                                                                                </h4>
                                                                                                <ul
                                                                                                    class="list-unstyled text-secondary mb-0">
                                                                                                    <li
                                                                                                        class="text-primary">
                                                                                                        University: DIU
                                                                                                    </li>

                                                                                                    <li>Pasing Year: 2008
                                                                                                    </li>
                                                                                                    <li>Country: Bangladesh
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                <div class="info">
                                                                    <h6 class="">Portfolio Information</h6>
                                                                    <hr>

                                                                    <div class="my-3">
                                                                        <div class="row gutters-10">
                                                                            <div class="col-md-4 p-2">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <img class="img-fit mw-100"
                                                                                                src="{{ asset('templete') }}/src/assets/img/robin(1).jpg"
                                                                                                height="240">
                                                                                            <hr>
                                                                                            <h4 class="h6 mb-1">
                                                                                                Test
                                                                                            </h4>
                                                                                            <ul
                                                                                                class="list-unstyled text-secondary mb-0">
                                                                                                <li class="text-primary">
                                                                                                    The test Title for
                                                                                                    portfolio
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-bs-dismiss="modal"><i
                                                                    class="flaticon-cancel-12"></i> Discard</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-action mt-3">
                                                <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                <button class="btn btn-success me-3">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--  END CONTENT AREA  -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/users/account-settings.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/tagify/tagify.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/tagify/custom-tagify.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('templete') }}/src/plugins/src/stepper/bsStepper.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/stepper/custom-bsStepper.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/scrollspyNav.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/editors/markdown/simplemde.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/editors/markdown/custom-markdown.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    {{-- <script src="{{ asset('zeroplus') }}/zeroplusckeditor.js"></script> --}}
    <script type="text/javascript">
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                console.log("{{ route('image-upload', ['_token' => csrf_token()]) }}");
                xhr.open('POST', '{{ route('image-upload', ['_token' => csrf_token()]) }}', true);
                xhr.responseType = 'json';
            }

            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    resolve(response);
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            _sendRequest(file) {
                const data = new FormData();

                data.append('upload', file);

                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }



        // ClassicEditor
        //         .create( $( '#about_service' ), {
        //             extraPlugins: [ MyCustomUploadAdapterPlugin ],
        //         } )
        //         .catch( error => {
        //             console.error( error );
        //         } );

        ClassicEditor.create(document.querySelector('#about_service'), {
                extraPlugins: [MyCustomUploadAdapterPlugin]
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#basic_included_description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#standard_included_description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#premium_included_description'))
            .catch(error => {
                console.error(error);
            });



        function get_category_by_subcategory() {
            var category_id = $('#category_id').val();
            console.log(category_id);
            $.post('{{ route('get_category.subcategory') }}', {
                _token: '{{ csrf_token() }}',
                category_id: category_id
            }, function(data) {
                $('#sub_category_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#sub_category_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].title
                    }));
                }
                $("#sub_category_id > option").each(function() {
                    if (this.value == '') {
                        $("#sub_category_id").val(this.value).change();
                    }
                });

            });
        }

        $(document).ready(function() {
            get_category_by_subcategory();

        });

        $('#category_id').on('change', function() {
            get_category_by_subcategory();
        });
    </script>
@endsection
