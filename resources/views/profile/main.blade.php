<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>FoodHut | Eman temp.</title>

    <!-- font icons -->
    <link rel="stylesheet" href="user/assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="user/assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="user/assets/css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @if(session('error'))
<div class="bg-red-200 text-red-800 px-4 py-2 rounded">
    {{ session('error') }}
</div>
@endif

  @if (session('booktable'))
<div style="background-color: rgb(2, 44, 16); color: white; border: 2px solid rgb(0, 225, 255);"
class=" px-4 pp-4 rounded relative">
    {{ session('booktable') }}
</div>
@endif


    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top"
     data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=
        "navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book-Table</a>
                </li>

            </ul>

            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">ContactUs</a>
                </li>
                {{-- <nav class="flex items-center justify-end gap-4"> --}}
                 @if (Route::has('login'))
                 @auth
                <li class="nav-item"><a href="{{ url('/dashboard') }}"class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('food.card') }}"class="nav-link">FoodCard</a></li>
                <li class="nav-item">
                    <div class="list-inline-item logout ">
                <form method="POST" action="{{ route('logout') }}" >
                                @csrf

                 <input style="border-radius:12px; background-color:red; color:white; padding:5px;" type="submit" value="logout">

                            </form></div>
                </li>
                    @else
                    <li class="nav-item">
                        <a
                            href="{{ route('login') }}"
                            class="nav-link">
                            Log in
                        </a>
                        </li>
                    <li class="nav-item">
                            <a
                                href="{{ route('register') }}"
                                class="nav-link">
                                sign up
                            </a>
                            </li>
                            @endauth
                   @endif

                </nav>


                {{-- <li class="nav-item"><div class="list-inline-item logout">
                <form method="POST" action="{{ route('logout') }}" >
                                @csrf

                 <input style="border-radius:12px; background-color:red; color:white;" type="submit" value="logout">

                            </form></div></li> --}}
            </ul>
        </div>
    </nav>
    <!--food card -->
    <div>
        @yield('admin.profile.show_card')
    </div>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Food Hut</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus iste,
                        nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum? <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                        <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores explicabo.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo vitae. Cum, nostrum, quidem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark
    text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">OUR MENU</h2>
    </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                @yield("home")
            </div>
    </div>
  <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <h2 class="section-title mb-5">BOOK A TABLE</h2>
 <form action="{{route('booktable')}}" method="POST">
@csrf
            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="email" id="booktable" name="email"
                    class="form-control form-control-lg custom-form-control" placeholder="EMAIL" required>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" id="booktable" class="form-control form-control-lg
                    custom-form-control" name="number_of_guests" type="number" placeholder="NUMBER OF GUESTS"
                     max="20" min="1">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" id="booktable" name="time"
                      class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" id="booktable" name="date" class="form-control
                    form-control-lg custom-form-control" placeholder="12/12/12">
                </div>


            </div>
             <div class="">
                    <input type="submit" name="submit"
                    class="btn btn-lg btn-primary" id="rounded-btn" value="FIND TABLE">
                </div>
            </form>
        </div>

    </div>

   @yield('admin.profile.home');

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL US</h3>
                <P class="text-muted">info@website.com</P>
            </div>
            <div class="col-sm-4">
                <h3>CALL US</h3>
                <P class="text-muted">(123) 456-7890</P>
            </div>
            <div class="col-sm-4">
                <h3>FIND US</h3>
                <P class="text-muted">12345 Fake ST NoWhere AB Country</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="user/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="user/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="user/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="user/assets/vendors/wow/wow.js"></script>

    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="user/assets/js/foodhut.js"></script>

</body>
</html>
