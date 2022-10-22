@extends('layouts.newapp')

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
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <form action="{{ route('matter_index') }}" method="GET" name="share_matter" id="share_matter">
                        <div class="row">
                            <div class="col-sm-4 mb-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"
                                        id="inputGroup-sizing-sm">I Need</span>
                                    <select class="form-select aiz-selectpicker"
                                        name="category_id" id="category_id">
                                        <option value="-1">Select</option>
                                        @foreach (\App\Models\ProductCategory::where('status', 1)->orderby('order_by')->get() as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="skill" id="skill" value="-1">
                            <input type="hidden" name="sub_category_id" value="-1">
                            {{-- When need than open this section  --}}
                            {{-- <div class="col-sm-4 mb-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"
                                        id="inputGroup-sizing-sm">More Specific</span>
                                    <select class="form-select aiz-selectpicker"
                                        name="sub_category_id" id="sub_category_id">
                                    <option value="-1">Select</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="col-sm-2 mb-4">
                                <div class="input-group mb-3">
                                    <select class="form-select aiz-selectpicker" name="service_or_provider">
                                    <option value="service">Services</option>
                                    <option value="service_provider">Service Provider</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-secondary">Show</button>
                            </div>
                    </div>
                    </form>

                        <div class="row gutters-10">
                            {{-- <div class="col-xl-3 col-lg-4">
                                <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg">
                                    <div class="card rounded-0 rounded-lg collapse-sidebar c-scrollbar-light">
                                        <div class="card-header">
                                            <h5 class="mb-0 h6">{{ translate('Filter By') }}</h5>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($skills))
                                            @foreach ($skills as $key=>$skill)

                                                @if($key%8 == 1)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-warning mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 2)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-primary mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 3)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-secondary mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 4)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-success mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 5)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-danger mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 6)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-info mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 7)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-info mb-1 py-0">{{ $skill->name }}</a>
                                                    @elseif ($key%8 == 8)
                                                    <a href="javascript:skill_click({{ "'". $skill->name."'" }});" id="{{ $skill->name }}" class="btn btn-outline-dark mb-1 py-0">{{ $skill->name }}</a>
                                                   @endif

                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                        data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                                </div>
                            </div> --}}
                            <div class="col-xl-12 col-lg-12">
                                <div class="">
                                    <input type="hidden" name="type" value="freelancer">
                                    <div class="">
                                        {{-- <div class="d-flex align-items-center">
                                        <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-filter"></i>
                                        </button>
                                        <input type="text" class="form-control form-control-sm" placeholder="Search Keyword"
                                            name="keyword" value="{{ $keyword }}">
                                    </div> --}}
                                    </div>
                                    <div class="row gutters-10">
                                        <div class="card-body p-0">
                                            <div class="faq container">
                                                <div class="row">
                                                    @if(isset($services))
                                                    @forelse ($services as $service)
                                                        <div class="col-sm-4 mb-4">
                                                            <div class="card">
                                                                <a href="{{ route('service.show', $service->slug) }}">
                                                                    @if (!empty($service->image))
                                                                        <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                                                            class="card-img-top" height="150"
                                                                            alt="{{ asset($service->slug) }}">
                                                                    @else
                                                                        <img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg"
                                                                            alt="Team Image"
                                                                            style="height: 200px; width:200px;">
                                                                    @endif
                                                                </a>

                                                                <div class="card-body">

                                                                    <div class="media mt-4 mb-0 pt-1">
                                                                        @if (!empty($service->user->photo))
                                                                            <img src="{{ asset('profile/photos/' . $service->user->photo) }}"
                                                                                class="card-media-image me-3"
                                                                                alt="{{ $service->user->photo }}">
                                                                        @else
                                                                            <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                                                class="card-media-image me-3" alt="">
                                                                        @endif
                                                                        <a
                                                                            href="{{ route('freelancer.details', $service->user->user_name) }}">
                                                                            <div class="media-body">
                                                                                <p class="media-heading mt-3">
                                                                                    {{ $service->user->name }}</p>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="card-title"> <a
                                                                            href="{{ route('freelancer.details', $service->user->user_name) }}"
                                                                            class="text-dark"></a>
                                                                    </h5>
                                                                    <hr>
                                                                    <a href="{{ route('service.show', $service->slug) }}"
                                                                        class="text-dark">
                                                                        <p class="card-title">
                                                                            {{ \Illuminate\Support\Str::limit($service->title, 40, $end = '...') }}
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <h4>No Service found or select from "I Need"</h4>
                                                    @endforelse
                                                    @endif

                                                    @if(isset($user_profile))
                                                    @forelse ($user_profile as $profile)
                                                        <div class="col-sm-4 mb-4">
                                                            <div class="card">
                                                                <a href="{{ route('freelancer.details', $profile->user->user_name) }}">
                                                                    @if (!empty($profile->user->photo))
                                                                        <img src="{{ asset('profile/photos/' . $profile->user->photo) }}"
                                                                            class="card-img-top" height="200"
                                                                            alt="{{ asset($profile->user->photo) }}">
                                                                    @else
                                                                        <img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg"
                                                                            alt="Team Image"
                                                                            style="height: 200px; width:200px;">
                                                                    @endif
                                                                </a>

                                                                <div class="card-body">
                                                                    <h5>{{ $profile->user->name }}</h5>
                                                                    <h6 class="text-success">{{ $profile->ProfessionalType->name }}</h6>
                                                                    <p>Consultant Fee &#2547 {{ $profile->consultant_fee }}</p>
                                                                    <p>Hourly Rate &#2547 {{ $profile->hourly_rate }}</p>
                                                                    <a href="{{ route('freelancer.details', $profile->user->user_name) }}">
                                                                    <button class="text-center btn btn-info btn sm">Hire Me</button>
                                                                </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <h4>No Service found or select from "I Need"</h4>
                                                    @endforelse
                                                    @endif
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

        function get_category_by_subcategory() {
            var category_id = $('#category_id').val();
            console.log(category_id);
            $.post('{{ route('get_category.subcategory') }}', {
                _token: '{{ csrf_token() }}',
                category_id: category_id
            }, function(data) {
                $('#sub_category_id option').remove();

                $('#sub_category_id').append($('<option>', {
                        value: -1,
                        text: 'Select'
                    }));

                $('#sub_category_id').append($('<option>', {
                        value: -2,
                        text: 'All'
                    }));
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

        function skill_click(id){

            $('#skill').val(id);
            console.log(id,$('#skill').val());
            $('#share_matter').submit();

        }
     </script>
@endsection
