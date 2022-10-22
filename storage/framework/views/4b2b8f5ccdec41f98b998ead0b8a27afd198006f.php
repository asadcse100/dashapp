

<?php $__env->startSection('css'); ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .textCustom {
            color: white !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="carouselExampleCaptions" class="carousel slide itemimg" data-bs-ride="carousel">
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Welcome To <span class="green">ZeroPlus</span></h2>
                        <h4 data-aos="fade-up" data-aos-delay="100" class="textCustom">SERVICE DOOR PLATFORM FOR ALL</h4>

                        <div id="container" style="padding-top:10px">
                            <button class="learn-more">
                                
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <a href="<?php echo e(Route('user.login')); ?>">
                                    <span class="button-text">Get Started</span></a>
                            </button>
                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="<?php echo e('templete'); ?>/src/assets/img/hero-img2.svg" class="img-fluid mb-3 mb-lg-0"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
    </div>

    
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

    
    


    


    

    
    
    
    


    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/frontend/default/index.blade.php ENDPATH**/ ?>