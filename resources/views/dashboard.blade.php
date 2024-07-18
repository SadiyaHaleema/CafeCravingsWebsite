<x-app-layout>
   

        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
                {{-- <div class="p-6 bg-white border-b border-gray-200"> --}}
                    {{-- You're logged in! --}}
                {{-- </div> --}}

                    {{-- <a href="/"> --}}

                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}

            {{-- </a> --}}


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div> --}}

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          <title>Campus Cravings | Home</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Hugo 0.88.1" />
 --}}


    <!--Favicon-->
    <link rel="icon"  href="{{ asset('restaurant.png') }}">

    {{-- playball fontfamily for logo --}}

    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/carousel/"
    />
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet" />

    <style>
     @import url('http://fonts.cdnfonts.com/css/montserrat');

     *{
       font-family: Montserrat;
     }
     
      body 
      {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
      }


/* Deals Slideshow */
    .mySlides {display: none;}
    img {vertical-align: middle;}

/* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    padding:10px;
    }

/* Caption text */
    .text {
    color: #f8f8f8;
    font-weight: bolder;
    font-size: 40px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    text-shadow: 20px;
    }

    .deals {
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f8f8f8;
    font-size: 17px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    padding-top:2%;
    padding-left: 20%;
    }

    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: grey;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: b0171f;
    }


    /* Fading animation */
    .fade {
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* Memberships and Deals*/

    .clickformore {
    background-color: #b0171f; /* Red */
    border: #b0171f;
    color: #f8f8f8;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 3px;
    }

    /*Buttons with featurettes*/
    .clickformore:hover {
    background-color: #a2151c;
    }

    /*Footer*/
    .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    /*Social media handles SVG color fill in*/
    .social {
    vertical-align: -.125em;
    fill: #f8f8f8;
    }

    .social:hover {
    fill:#dbdbdb
    }

    .bottomcontainer, .bottombar {
    background-color: #141414;
    color:#f8f8f8;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
    /*Header*/

    .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .form-control-dark {
    color: #fff;
    background-color: var(--bs-dark);
    border-color: var(--bs-gray);
    }
    .form-control-dark:focus {
    color: #fff;
    background-color: var(--bs-dark);
    border-color: #fff;
    box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }

    .bi {
    vertical-align: -.125em;
    fill: currentColor;
    }

    .text-small {
    font-size: 85%;
    }

    .dropdown-toggle {
    outline: 0;
    }
    /* Carousel base class */

    .carousel {
    margin-bottom: 4rem;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
    bottom: 3rem;
    z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
    height: 32rem;
    }
    .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
    }

    .btn-warning {
    background-color: #b0171f;
    border-color: #b0171f;
    }

    .btn-warning:hover {
    background-color: #f8f8f8;
    border-color: #f8f8f8;
    }

    /*Login button*/
    .loginbtn a {
    color:#f8f8f8;
    text-decoration: none;
    }

    .loginbtn:hover a {
    color:#141414;
    text-decoration: none;
    }

    /*Sign up button*/
    .subtn a {
    color:#f8f8f8;
    text-decoration: none;
    }

    .subtn:hover a {
    color:#141414;
    text-decoration: none;
    }

    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
    }
    .marketing h2 {
    font-weight: 400;
    }
    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
    }
    /* rtl:end:ignore */


    /* Featurettes
    ------------------------- */

    .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
    font-weight: 300;
    line-height: 1;
    /* rtl:remove */
    letter-spacing: -.05rem;
    color:#141414;
    }

    /* title of website font */

    .tle{
      font-family: 'Playball';
    }

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
    }

    .featurette-heading {
        font-size: 50px;
    }
    }

    @media (min-width: 62em) {
    .featurette-heading {
        margin-top: 7rem;
    }
    }


        .bd-placeholder-img {
             font-weight: bolder;
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .bar:hover {
            fill: orange;
            opacity: 1;
        }
        #clr {
            fill: white;
        }
        text{
        font-weight: bold;
        font-size: xx-large;
        }
        #sty-txt{
        font-weight:lighter;
        font-size: normal;
        font-style: italic;
        }
        .btn-sty{
            font-weight:lighter;
            font-size: normal;
            background-color: #b0171f;    
            color:white; 
            border-radius:10%;
            position:absolute;
            bottom: 150px;
            left: 1330px;
            padding: 16px;
            justify-content: center;
            align-items: center;
            display:inline-flex;
            border-color: none;
    
    
    }

    .btn-sty:hover{
        background-color: #c33434;
        color:white;
    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  /* dropdown of cafes     */
  .dropdown {
  position: relative;
  display: inline-block;
}

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #b0171f;
color: white;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .nav-link{
  background-color: #b0171f;
}
 </style>

    <!-- Custom styles for this template -->
    {{-- <link href="style.css" rel="stylesheet" /> --}}
 </head>
 



    <body class="antialiased">
       


            <!--svg's-->
             <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"> 
              <symbol id="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </symbol>
              <symbol id="speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
              </symbol>
              <symbol id="table" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
              </symbol>
              <symbol id="people-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </symbol>
              <symbol id="grid" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
              </symbol>
              <symbol id="facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </symbol>
              <symbol id="instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </symbol>
              <symbol id="twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </symbol>
              <symbol id="linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
              </symbol>
            </svg> 
          

    <main>
      <!--header-->
      <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
            <h4 class="tle">Campus Cravings</h4>

            <!--Navigation-->
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="{{ route('root') }}" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="{{ route('faq') }}" class="nav-link px-2 text-white">About</a></li>
              <div class="dropdown">
                <li><a href="#" class="nav-link px-2 text-white">Cafe's</a></li>
                <div class="dropdown-content">
                  <a href="{{ route('menu') }}">CONCORDIA 1</a>
                  <a href="{{ route('C2menu') }}">CONCORDIA 2</a>
                  <a href="{{ route('C3menu') }}">CONCORDIA 3</a>
                  <a href="{{ route('C4menu') }}">CONCORDIA 4</a>
                  <a href="{{ route('margalla') }}">MARGALLA</a>
                  <a href="{{ route('kybo') }}">KYBO</a>
                  <a href="{{ route('buddies') }}">COFFEE SHOP</a>
                  <a href="{{ route('buddies') }}">BUDDIES</a>
                  <a href="{{ route('retro') }}">RETRO</a>
                  <a href="{{ route('eatalia') }}">EATALIA</a>
                  <a href="{{ route('dreamville') }}">DREAM VILLE</a>
                </div>
              </div> 
              <li><a href="{{ route('contact') }}" class="nav-link px-2 text-white">Contact</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input  id="searchbar" type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            
            <!--Buttons-->
            @if (Route::has('login'))

            <div class="text-end">
                @auth
                    <x-slot name="header">
                        </x-slot>
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                    @else
              <button type="button" class="btn btn-outline-light me-2 loginbtn"><a href="{{ route('login') }}">Login</a></button>
            @if (Route::has('register'))


              <button type="button" class="btn btn-warning subtn"><a href="{{ route('register') }}">Sign Up</a></button>
               @endif
                    @endauth
              <!--Both link to our sign up/log in page-->
            </div>
                        @endif

          </div>
        </div>
      </header>    
    
      <div class="b-example-divider"></div>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
         
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">

              {{-- @foreach ($data18 as $product)

                  <img class="bd-placeholder-img" src=" {{ $product['Pics'] }}" width="100%" height="100%">
                              @endforeach --}}

            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              
              <image xlink:
              href="cover.png"
              x="0" y="0" width="100%" />

  <text class="tle" x="750" y="60" fill="#b0171f" >Campus Cravings </text>
    {{-- <text id="sty-txt" x="800" y="200" fill="#b0171f" >The best Snacking Stop <tspan dy="40">for your study breaks</tspan></text> --}}
           </svg>

          </div>

        </div>
                          {{-- <button class="btn-sty"><a href="{{ route('menu') }}">EXPLORE</a></button> --}}



      </div>

      
      <div class="container marketing">     
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider" />

      <!--About Us-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">About Us</h2>
            <p class="lead">
              So what's our story? We aim to serve all NUSTians by
              providing them <b>a singular and easy platform</b> for ordering and browsing the
              menu's of all the cafe's at NUST. Peruse the <b>latest deals</b> and take a look at feedback by your peers to find the best of what you're craving!</p>
              <button class = "clickformore">Learn more</button>
            
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="about.png">
          </div>
        </div>
        <hr class="featurette-divider">

        <!--Memberships and Coupons-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Memberships and Coupons</h2>
            <p class="lead">Ever wondered how you can avail student discounts at your cafe's? Now look no further! So, what are you waiting for? Avail the best membership deals to get <b>upto 50% off</b> on your favourite cafe's!</p>
            <button class = "clickformore">Explore</button>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="discount.png">
    
          </div>
        </div>   
    <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->

      <!--Slideshow-->
      <h2 class="featurette-heading deals">Our Latest Deals</h2>
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 7</div>
          <img src="deal1.png " style="width:800px;padding-left: 18%;">
          <div class="text">DEAL 1</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 7</div>
          <img src="deal2.png" style="width:800px;padding-left: 18%;">
          <div class="text">DEAL 2</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 7</div>
          <img src="deal3.png" style="width:800px;padding-left: 18%;">
          <div class="text">DEAL 3</div>
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">4 / 7</div>
            <img src="deal4.PNG" style="width:800px;padding-left: 18%;">
            <div class="text">DEAL 4</div>
          </div>
        
        <div class="mySlides fade">
            <div class="numbertext">5 / 7</div>
            <img src="deal5.png" style="width:800px;padding-left: 18%;">
            <div class="text">DEAL 5</div>
        </div><div class="mySlides fade">
            <div class="numbertext">6 / 7</div>
            <img src="deal6.png" style="width:800px;padding-left: 18%;">
            <div class="text">DEAL 6</div>
        </div><div class="mySlides fade">
            <div class="numbertext">7 / 7</div>
            <img src="wings.png" style="width:800px;padding-left: 18%;">
            <div class="text">WINGS</div>
        </div>
        
        </div>
        <br>
        
        <!--Slideshow picker-->
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 3500); // Change image every 5 seconds
        }
        </script>
       <hr class="featurette-divider"> 
    </main>
    <!--Divider before footer-->
<div class="b-example-divider"></div>

<!--Footer-->
<div class = "bottombar">
<div class="container bottomcontainer">
  <footer class="py-5">
    <div class="row">
      <div class="col-md-4">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{ route('root') }}" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="{{ route('faq') }}" class="nav-link p-0 text-muted">About</a></li>
          <li class="nav-item mb-2"><a href="{{ route('privacy') }}" class="nav-link p-0 text-muted">Privacy Policy</a></li>
          <li class="nav-item mb-2"><a href="{{ route('terms') }}" class="nav-link p-0 text-muted">Terms and Conditions</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Services</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Services</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Memberships and Coupons</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rewards</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Contact Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 text-muted">Contact Us</a></li>
          <li class="nav-item mb-2"><a href="{{ route('faq') }}" class="nav-link p-0 text-muted">FAQ's</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="{{ route('feedback') }}" class="nav-link p-0 text-muted">Feedback</a></li>
        </ul>
      </div>

 

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Campus Cravings, Inc. All rights reserved.</p>

      <!--Social media handles-->
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#" title="Visit our Twitter"><svg class="social" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#" title="Visit our Instagram"><svg class="social" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#" title="Visit our Facebook"><svg class="social" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#" title="Visit our LinkedIn"><svg class="social" width="24" height="24"><use xlink:href="#linkedin"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Search.js"></script>

    </body>
</html>























</x-app-layout>
