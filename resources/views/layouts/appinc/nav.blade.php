<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
    #navbars {
        background-color: #05223D;
        width: 100%;
        overflow: hidden;
    }

    .logo {
        float: left;
        color: white;
        font-weight: bold;
        justify-content: center;
        padding-left: 30px;
        padding-top: 10px
    }

    #navbars ul {
        float: right;
        margin-right: 20px;
    }

    #navbars ul li {
        display: inline-block;
        line-height: 45px;
        margin: 0 5px;
    }

    #navbars ul li a {
        color: white;
        font-size: 15px;
        padding: 7px 13px;
        border-radius: 3px;
    }

    #navbars ul li a:hover {
        /* color: rgb(26, 45, 96); */
        /* background-color: white; */
        font-size: 17px;
        padding: 7px 13px;
        border-radius: 3px;
        transition: 0.3s;
    }

    .checkbtn {
        font-size: 20px;
        color: rgb(255, 255, 255);
        float: right;
        margin-top: 22px;
        /* line-height: 60px; */
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    @media (max-width: 952px) {
        #navbars {
            display: block;
        }

        .logo {
            font-size: 30px;
            padding-left: 20px;
        }

        #navbars ul li a {
            font-size: 16px;
        }
    }

    @media (max-width: 858px) {
        .checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            /* line-height: 80px; */
            margin-right: 40px;
            cursor: pointer;
            display: block;
        }

        @media (max-width: 680px) {
            .my-drpdown-menu {
                right: 20px !important;
            }

            .my-drpdown-item {
                font-size: 15px !important;
            }
        }

        @media (max-width: 400px) {
            .my-drpdown-menu {
                right: 0px !important;
            }
        }


        ul {
            position: fixed;
            width: 50%;
            /* height: 100vh; */
            background: #05223D;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            border-radius: 5px;
            z-index: 999;
        }

        #navbars ul li {
            display: block;
            float: left;
            /*  margin-left: 0px; */
            /* margin: 30px 0; */
            /* line-height: 20px; */
        }

        #navbars ul li a {
            font-size: 17px;
        }

        #check:checked~ul {
            left: 0;
        }
    }

    #uldesign {
        z-index: 999;
    }

    #navbars.fixed {
        position: fixed;

        box-shadow: 5px 5px 19px 0px rgba(0, 0, 0, 0.5);
        background-color: aliceblue;
        z-index: 999;
    }

    #navbars.fixed ul {

        background-color: aliceblue;
        font-size: 14px;
        color: black;

    }

    #navbars.fixed ul li a {
        transition: 0.5s;
        font-size: 14px;
        color: black;

    }

    #navbars.fixed ul li a:hover {
        color: black;






    }

    #navbars.fixed .service-drpdown {
        color: black;
    }

    #navbars.fixed .logo {
        padding-left: 5px;
        padding-top: 1px;
        transition: 0.5s
    }

    /* torab */
    .my-drpdown-menu {
        width: 200px;
        position: absolute;
        right: 120px;
        background-color: aliceblue;
        overflow: hidden;
        display: none;

        z-index: 9999;
        border-radius: 5px;
    }

    .service-drpdown:hover .my-drpdown-menu {
        display: block;
    }

    .service-drpdown {
        color: aliceblue;
        font-size: 15px;
        padding: 7px 13px;
        border-radius: 3px;
    }

    .service-drpdown:hover {
        cursor: pointer;
    }

    .my-drpdown-item {
        display: block;
        color: black !important;
        padding: 0px 13px !important;

    }

    #navbars {
        overflow: unset;
    }
</style>


<nav id="navbars">
    <input type="checkbox" id="check" style="display: none">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo" id="logo">
        <a href="{{ Route('home') }}">
            <img src="{{ asset('templete') }}/src/assets/img/zerop.png" alt="ZeroPlus"
                class="zeropimg" />{{-- <span class="green h2">ZeroPlus</span> --}}</a>
    </label>
    <ul id="uldesign">
        <li> <a href="{{ Route('home') }}">Home</a></li>

        @php
            $services = App\Models\ProductCategory::where('status', 1)->get();
        @endphp

        {{-- <li> <a href="{{ Route('service') }}">Services</a></li> --}}


        <li class="service-drpdown">
            Services
            <div class="my-drpdown-menu">
                @foreach ($services as $service)
                    <a class="my-drpdown-item"
                        href="{{ route('filter_category', $service->id) }}">{{ $service->name }}</a>
                @endforeach
            </div>
        </li>


        @guest
            <li>
                <a href="{{ Route('register') }}">Register</a>
            </li>
            <li>
                <a href="{{ Route('user.login') }}">Login</a>
            </li>
        @else
            <li>
                <a href="{{ Route('dashboard') }}">Dashboard</a>
            </li>
        @endguest

    </ul>
</nav>

<script>
    const nav = document.querySelector('#navbars');
    let navTop = nav.offsetTop;

    function fixedNav() {
        if (document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80) {
            nav.classList.add('fixed');
        } else {
            nav.classList.remove('fixed');
        }
    }
    window.addEventListener('scroll', fixedNav);

    /* const nav = document.querySelector('#navbars');
    let navTop = nav.offsetTop;
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80
        ) {
            nav.classList.add('fixed');
            document.getElementById("navbars").style.padding = "30px 10px";
            document.getElementById("logo").style.fontSize = "25px";
        } else {
            nav.classList.remove('fixed');
            document.getElementById("navbars").style.padding = "80px 10px";
            document.getElementById("logo").style.fontSize = "35px";
        }

    }
    window.addEventListener('scroll', fixedNav); */
</script>
