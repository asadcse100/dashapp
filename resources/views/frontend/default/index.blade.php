@extends('layouts.appindex')
{{-- Hero Section Start --}}
@section('css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .textCustom {
            color: white !important;
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide itemimg" data-bs-ride="carousel">
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Welcome To <span class="green">ZeroPlus</span></h2>
                        <h4 data-aos="fade-up" data-aos-delay="100" class="textCustom">SERVICE DOOR PLATFORM FOR ALL</h4>

                        <div id="container" style="padding-top:10px">
                            <button class="learn-more">
                                {{-- <a href="{{ Route('user.login') }}"></a> --}}
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <a href="{{ Route('user.login') }}">
                                    <span class="button-text">Get Started</span></a>
                            </button>
                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ 'templete' }}/src/assets/img/hero-img2.svg" class="img-fluid mb-3 mb-lg-0"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- Hero Section End --}}
    <!-- about -->
    <section class="section-style" style="background-color: #05223D">
        <div class="container-fluid">
            <div class="row justify-content-center new-style">
                <div class="container" style="font-family:El Messiri SemiBold">
                    <div class="">
                        <div class="section-title">
                            <h2 style="font-family:El Messiri SemiBold">An <span class="green"> Overview</span></h2>
                        </div>

                        <p class="mb-2 text-justify fs-18" style="font-size: 16px">
                            ZeroPlus is a recognized leader in providing a specialized high-performance digital office
                            platform.
                            It provides Legal Support, EcoFin Solutions, Health, Education & Consultancy services
                            through
                            internal and external drivers by using the ZeroPlus Digi office.
                            It offers a wide range of services to its clients, both nationally and internationally.
                            Our expert professionals can represent the most demanding and sophisticated clients in a
                            broad
                            and diverse set of matters in the various jurisdictions covered by ZeroPlus. ZeroPlus
                            collaborates very closely with all offices to provide world-class service through internal
                            and
                            external drivers in the most innovative, effective, and efficient way.
                        </p>
                        <p class="mb-2 text-justify fs-18" style="font-size: 16px">
                            By providing registration and user ID, people are connected to a specialized digital office
                            platform.
                            'To assign' and 'To be assigned' by using artificial intelligence, our professionals provide
                            excellent service of the highest international standards of quality through internal and
                            external drivers.
                        </p>
                        <p class="mb-2 text-justify fs-18" style="font-size: 16px">
                            National-Multinational company, Law chambers, CA firm, Consultancy firm, Shop owners,
                            Financial
                            and Educational Institute, Hospital, Clinic, Corporate Business Man, individual
                            professionals
                            like Doctor, engineer, Lawyer, Consultant, Teacher Accountant, Pharmacist, Architect,
                            Banker,
                            Plumber, Electrician, Researcher, Student, Labour - each and everyone is client of each
                            other
                            based on necessity.
                        </p>
                        <p class="mb-2 text-justify fs-18" style="font-size: 16px">
                            By using artificial intelligence, the ultimate and interrelated assignment through the IP
                            address of the device, people are being connected instantly and provided the service as per
                            requirement. Unlimited clients await professional help and professionals can also seek
                            clients
                            in the system.
                            This platform ensures a wide pool of clients, professionals, and standard service. ZeroPlus
                            also
                            shares 20% of its revenue to its subscribers who refer other subscribers by sharing their
                            identical "Referent Code" as a default system-generated procedure. Thriving for a smarter
                            world
                            through technological revolution is the utter passion of this organization.
                            ZeroPlus is committed to keeping subscribers' confidentiality and building trust through
                            transparency for a lifetime.
                        </p>
                        <p class="mb-2 text-justify fs-18" style="padding-bottom: 50px" style="font-size: 16px">
                            To provide and get reasonable service click <a href="https://zeroplus.world/"
                                style="color:#1ed174;">www.zeroplus.world</a> and register by choosing a suitable level
                            of
                            subscriber where you fit.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    {{-- Our featured categories --}}
    {{-- <section style="margin-top: 0px">
        <div id="featured_categories" class="featured_categories layout-px-spacing">
            <div class="fq-header-wrapper"> --}}


    {{-- <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="faq container">
                        <div class="faq-layouting layout-spacing">
                            <div class="kb-widget-section">
                                <div class="row justify-content-center">
                                    <div class="search-by">

                                        <div class="section-title">
                                            <h2 class="textCustom">Our <span class="green">Categories</span></h2>
                                        </div>


                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                                            data-bs-interval="false">

                                            <div class="carousel-inner text-center">
                                                <div class="row layout-spacing">
                                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <div>
                                                            <div class="carousel-item active">
                                                                <div class="row layout-spacing">

                                                                    @foreach ($product_categories as $category)
                                                                        <div class="col-sm-2 mb-4">
                                                                            <a
                                                                                href=" {{ Route('product_details', $category->id) }} ">
<div class="card-item">
    <div class="photo">
        <img class="main-state" src="{{ asset($category->image) }}" alt="">
        <img class="hover" src="{{ asset('templete') }}/src/assets/img/carousel/business-development-hover.svg" alt="">
    </div>
    <h5 class="textCustom">
        {{ $category->name }}
    </h5>
</div>
</a>
</div>
@endforeach
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
</div>

</div> --}}


    {{-- populer expert start --}}

    {{-- <div class="section-title">
                    <h2 class="textCustom">Latest <span class="green">Services</span></h2>
                </div>
                <div class="faq container">
                    <div class="faq-layouting layout-spacing">
                        <div class="kb-widget-section">
                            <div class="row">
                                @php
                                    $services = App\Models\Service::orderby('id', 'desc')
                                        ->take(8)
                                        ->get();
                                @endphp
                                @foreach ($services as $service)
                                    <div class="col-sm-3 mb-4">
                                        <div class="card">
                                            <a href="{{ route('service.show', $service->slug) }}">

@if (!empty($service->image))
<img src="{{ asset('storage/uploads/services/' . $service->image) }}" class="card-img-top" height="200px;" alt="{{ asset($service->slug) }}">
@else
<img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg" alt="Team Image" style="height: 100px; width:100px;">
@endif
</a>

<div class="card-body">

    <div class="media mt-4 mb-0 pt-1">
        @if (!empty(Auth::user()->photo))
        <img src="{{ asset('profile/photos/' . Auth::user()->photo) }}" class="card-media-image me-3" alt="{{ Auth::user()->photo }}">
        @else
        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}" class="card-media-image me-3" alt="">
        @endif
        <a href="{{ route('freelancer.details', $service->user->user_name) }}">
            <div class="media-body">
                <h4 class="media-heading mt-3">
                    {{ $service->user->name }}</h4>
            </div>
        </a>
    </div>
    <h5 class="card-title"> <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-dark"></a>
    </h5>
    <hr>
    <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
        <h5 class="card-title">
            {{ \Illuminate\Support\Str::limit($service->title, 40, $end = '...') }}
        </h5>
    </a>
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>
</div> --}}
    {{-- populer expert end --}}
    {{-- populer expert start --}}
    {{-- <div class="">
                    <div class="section-title">
                        <h2 class="textCustom">Popular <span class="green">Experts</span></h2>
                    </div>
                    <div class="faq container">
                        <div class="faq-layouting layout-spacing">
                            <div class="kb-widget-section">
                                <div class="row justify-content-center">
                                    @php
                                        $experts = App\Models\User::orderby('id', 'desc')
                                            ->take(10)
                                            ->where('user_type', 'freelancer')
                                            ->get();
                                    @endphp
                                    @foreach ($experts as $expert)
                                        <div class="column">
                                            <div class="team-1">
                                                <div class="team-img" style="text-align: center">
                                                    @if (!empty($expert->photo))
                                                        <img src="{{ asset('profile/photos/' . $expert->photo) }}"
alt="Team Image" style="height: 150px; width:150px;">
@else
<img src="{{ asset('templete') }}/src/assets/img/demoprofile.png" alt="Team Image" style="height: 150px; width:150px;">
@endif
</div>
<div class="team-content text-center">
    <h3 class="textCustom">{{ $expert->name }}</h3>
    <h3 class="textCustom">Designation</h3>

</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div> --}}


    {{-- </div>
        </div>
    </section> --}}
@endsection
