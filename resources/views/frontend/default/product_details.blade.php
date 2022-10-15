@extends('layouts.appindex')

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection
@section('content')
    <section class='snippet-body'>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="card" style="padding: 20px">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <div class="">
                                {{-- <h2 data-aos="fade-up">Welcome To <span class="green">ZeroPlus</span></h2> --}}
                                <h2 data-aos="fade-up">{{ $product_categories->name }}</h2>

                                <p> {!! $product_categories->description !!} </p>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="">
                                <img src="@if ($product_categories->image) {{ asset($product_categories->image) }} @else{{ asset('templete') }}/src/assets/img/grid-blog-style-2.jpg @endif"
                                    class="img-fluid mb-3 mb-lg-0" alt="" style="height: 300px; width:734px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @widget('ExpertList', $product_categories->id)
            <div class="container-fluid my-5">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        @foreach ($product_services as $service)
                            <div class="item">
                                <div class="card">
                                    <a href="{{ Route('service_details', $service->id) }}">
                                        <img src="{{ asset($service->image) }}" alt="" class="card-img-top">
                                        <div class="card-body text-center">
                                            <div class="card-title">
                                                <h5 style="color: green">{{ $service->title }}</h5>
                                                <hr>
                                                <p>{{ Str::words($service->short_description, '15') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
