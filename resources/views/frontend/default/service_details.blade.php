@extends('layouts.appindex')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide itemimg" data-bs-ride="carousel">
        <section id="hero" class="hero d-flex align-items-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="row layout-top-spacing">
                        <div class="col-sm-6 mb-4">
                            <div class="">
                                <h2 data-aos="fade-up">{{ $product_services->title }}</h2>
                                <p data-aos="fade-up" data-aos-delay="100">{{$product_services->short_description}}
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="">
                                <img src="{{ asset($product_services->image) }}"
                                    class="img-fluid mb-3 mb-lg-0" alt="">
                            </div>

                        </div>
                        <div class="col-sm-12 mb-4">
                            <div class="">
                                {{-- <h2 data-aos="fade-up">Welcome To <span class="green">ZeroPlus</span></h2> --}}

                                <p data-aos="fade-up" data-aos-delay="100">{!!  $product_services->long_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section style="margin-top: 0px">
        <div id="featured_categories" class="featured_categories layout-px-spacing">
            <div class="fq-header-wrapper">
                <div class="">
                    <div class="section-title">
                        <h1>Releted <span class="green">Services</span></h1>

                    </div>
                    <div class="faq container">
                        <div class="faq-layouting layout-spacing">
                            <div class="kb-widget-section">
                                <div class="row justify-content-center">
                                    @foreach ($relate_services as $rel_service)
                                    <div class="col-sm-3 mb-4">
                                        <div class="team-1">
                                            <div class="team-img" style="text-align: center">
                                                <img src="{{ asset($rel_service->image) }}"
                                                    class="img-fluid mb-3 mb-lg-0" alt="">
                                            </div>
                                            <div class="team-content">
                                                <h2>{{ $rel_service->title }}</h2>
                                                <h3>{{ Str::words($rel_service->short_description, '10') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
