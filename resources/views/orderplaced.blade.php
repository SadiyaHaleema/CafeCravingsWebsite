<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.98.0" />
    <title>Order Details Page</title>

    {{-- <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/checkout/"
    /> --}}

    <link href="css1/bootstrap.min.css" rel="stylesheet" />

<style>

     @import url('http://fonts.cdnfonts.com/css/montserrat');

     *{
       font-family: Montserrat;
     }


           .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .bar:hover {
        fill: #b0171f;
        opacity: 1;
      }
      #clr {
        fill: white;
      }
     text{
       font-family: montserrat;
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
        font-family: montserrat;
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
    background-color: white;
    color:black;
  }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      
/* dropdown of cafes */


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
        <link href="css/menustyle.css" rel="stylesheet" />


<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card border-top border-bottom border-3" style="border-color: #b0171f !important;">
          <div class="card-body p-5">

            <p class="lead fw-bold mb-5" style="color: #b0171f;">Order Details</p>
            @if(Session::has('cart'))

            @foreach ($products as $product )
            <div class="row">
              <div class="col mb-3">
                <p class="small text-muted mb-1">Date</p>
                <p id="date" ></p>
              </div>
              
            </div>

            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <label>Item Name</label>
                  <p>{{ $product['item']['itemname'] }}</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <label>Price</label>

                  <p>{{ $product['item']['price'] }}</p>
                </div>
               <div class="col-md-4 col-lg-6">
                   <label>Quantity</label>

                  <p>{{ $product['qty'] }}</p>
                </div>
              </div>

             
            </div>

            <div class="row my-4">
              <div class="col-md-8 offset-md-8 col-lg-3 offset-lg-9">
                <p class="lead fw-bold mb-0" style="color: #b0171f;">Total:<br>Rs. {{ $totalPrice }}</p>
              </div>
            </div>

             {{-- <div >
                @foreach($ordernum as $order)
                <p>Order No.</p>
                <p><b>000{{ $order['orderid'] }}</b></p>
                @endforeach

              </div>
 --}}



              {{-- <div class="col mb-3">
                @foreach($ordernum as $order)
                <p class="small text-muted mb-1">Order No.</p>
                <p><b>000000{{ $order['orderid'] }}</b></p>
                            @endforeach

              </div> --}}


            <p class="lead fw-bold mb-4 pb-2" style="color: #b0171f;">Tracking Order</p>

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">

                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #b0171f;">Ordered</p
                        class="py-1 px-2 rounded text-white" style="background-color: #b0171f;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #b0171f;">Prepared</p
                        class="py-1 px-2 rounded text-white" style="background-color: #b0171f;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #b0171f;">On the way
                      </p>
                    </li>
                    <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                      <p style="margin-right: -8px;">Delivered</p>
                    </li>
                  </ul>

                </div>

              </div>
            </div>
            @endforeach
         @else
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2> No Items in Cart</h2>
        </div>
        </div>

        @endif


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<script>
              document.getElementById("date").innerHTML = Date();

    </script>