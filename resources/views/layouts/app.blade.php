<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="http://www.auroralaserclinic.co.uk/wp-content/themes/aurora/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-4 col-md-offset-3">
                <img src="{{asset('images/logo.png')}}" class="img-responsive" alt="aurora-laser-clinic">
            </div>
            <div class="col-md-3">
                <a href="tel:01158372030"><i class="fa fa-phone" aria-hidden="true"></i>0115 837 2030</a>
                <p>Laser hair removal & aesthetic skin care for ladies and men</p>
                <div class="social">
                    <div class="i-container facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="i-container twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="i-container gplus">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <nav class="navbar navbar-default navbar-static-top" id="nav">
        <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mavbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="{{ url('/') }}">Aurora</a>-->
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a class="first" href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Treatments<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/laser-hair-removal')}}">Laser Hair Removal</a></li>
                            <li><a href="{{ url('/pigmentation')}}">Pigmentation Blemishes</a></li>
                            <li><a href="{{ url('/fungal-nail-treatments')}}">Fungal Nail Treatments</a></li>
                            <li><a href="{{ url('/skin-rejuvernation')}}">Skin Rejuvernation</a></li>
                            <li><a href="{{ url('/facial-problems')}}">Facial &amp; Vein Problems</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/prices')}}">Pricing</a></li>
                    <li><a href="{{ url('/offers') }}">Offers</a></li>
                    <li><a href="{{ url('/consultation') }}">Consultation</a></li>
                    <li class="dropdown"><a href="{{ url('/about')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Information<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/skin-types')}}">Skin Types</a></li>
                            <li><a href="{{ url('/technology')}}">Our Lasers</a></li>
                            <li><a href="{{ url('/frequently-asked-questions')}}">FAQ</a></li>
                            <li><a href="{{ url('/testimonials')}}">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a class="last" href="{{ url('/contact-us') }}">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a class="last" href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
<footer>
    <div class="container-fluid">
        <div class="row footer">
            <div class="col-md-2 col-md-offset-1">
                <h3>Contact Us</h3>
                <ul>
                    <li class="spacer"><a href="tel:01158372030"0115 837 2030>0115 837 2030</a></li>
                    <li><a href="mailto:info@auroralaserclinic.co.uk">info&#64;auroralaserclinic.co.uk</a></li>
                    <li class="spacer">Aurora Laser Clinic</li>
                    <li>112A High Road</li>
                    <li>Beeston</li>
                    <li>Nottingham</li>
                    <li>NG9 2LN</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Opening Times</h3>
                <ul>
                    <li class="day first-day">Monday</li>
                    <li>By appointment only</li>
                    <li class="day">Tuesday</li>
                    <li>11:00am - 7:00pm</li>
                    <li class="day">Wednesday</li>
                    <li>10:00am - 5:00pm</li>
                    <li class="day">Thursday</li>
                    <li>11:00am - 7:00pm</li>
                    <li class="day">Friday</li>
                    <li>10:00am - 5:00pm</li>
                    <li class="day">Saturday</li>
                    <li>10:00am - 4:30pm</li>
                    <li class="day">Sunday</li>
                    <li>Closed</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Information</h3>
                <ul>
                    <li class="spacer"><a href="{{ url('/prices')}}">Prices</a></li>
                    <li><a href="{{ url('/consultation')}}">Arrange Consultation</a></li>
                    <li><a href="{{ url('/offers')}}">Special Offers</a></li>
                    <li><a href="{{ url('/skin-types')}}">Skin Types</a></li>
                    <li><a href="{{ url('/frequently-asked-questions')}}">FAQ</a></li>
                    <li><a href="{{ url('/about')}}">About Us</a></li>
                    <li><a href="{{ url('/contact-us')}}">Contact Us</a></li>
                    <li><a href="{{ url('/health-and-beauty')}}">Links</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Treatments</h3>
                <ul>
                    <li class="spacer"><a href="{{ url('/laser-hair-removal')}}">Laser Hair Removal</a></li>
                    <li><a href="{{ url('/pigmentation')}}">Pigmentation Blemishes</a></li>
                    <li><a href="{{ url('/fungal-nail-treatments')}}">Fungal Nail Treatments</a></li>
                    <li><a href="{{ url('/skin-rejuvernation')}}">Skin Rejuvernation</a></li>
                    <li><a href="{{ url('/facial-problems')}}">Facial &amp; Vein Problems</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Special Offers</h3>
                <ul>
                    <li class="spacer"><a href="{{ url('/combined')}}">Combined Treatments</a></li>
                    <li><a href="{{ url('/bonus-discount')}}">Bonus Discount</a></li>
                    <li><a href="{{ url('/student-discount')}}">Student Discount</a></li>
                    <li><a href="{{ url('/bridal-offer')}}">Bridal</a></li>
                    <li><a href="{{ url('/offers')}}">All Offers</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
