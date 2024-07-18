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
    <title>Checkout Page</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/checkout/"
    />

    <link href="css1/bootstrap.min.css" rel="stylesheet" />

    <style>
        @import url('http://fonts.cdnfonts.com/css/montserrat');

     *{
       font-family: Montserrat;
     }

     body{
       padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
     }
     
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

     
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }


   
         /* unvisited link */
a:link {
  color: gray;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: gray;
  text-decoration: none;
}

/* mouse over link */
a:hover {
  color: white;
  text-decoration: none;
}
    h1{
        text-align: center;
    }
    hr{
        size:"10";
    }
     text{
       font-family: open-sans;
       font-weight: bold;
       font-size: xx-large;
     }
     #sty-txt{
       font-weight:lighter;
       font-size: normal;
       font-style: italic;
     }
     #logo{
        width: 75px;
         height:80px;
         display: block;
         margin-left: auto;
        margin-right: auto;
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
  background-color: #ce1f1f;
  /* border-color: #b0171f; */
  color:#fff;
}

.btn-warning:hover {
  background-color:#960a11;
  border-color: #f8f8f8;
  color:#fff;
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
  color:#fff;
  text-decoration: none;
}

.subtn:hover a {
  color:#fff;
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

.bottomerr {
  background-color: #141414;
  width:100%
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
  color:#141414;
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



@media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

@media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }





    </style>

    <!-- Custom styles for this template -->
    <link href="css1/form-validation.css" rel="stylesheet" />
  </head>
  <body class="bg-light">
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img
            class="d-block mx-auto mb-4"
            src="https://img.freepik.com/free-vector/credit-card-concept-illustration_114360-170.jpg?size=338&ext=jpg&ga=GA1.2.1223593960.1653068968"
            alt=""
            width="100"
            height="100"
          />
          <h2>Checkout</h2>
        </div>


        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
           
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing Details</h4>
            <form action="order" method="post" class="needs-validation">
               @csrf

              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    placeholder=""
                    name="firstname"
                    value=""
                    required
                  />
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastname"
                    placeholder=""
                    value=""
                    required
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

               
                {{-- <div class="col-12">
                  <label for="email" class="form-label"
                    >Email <span class="text-muted">(Optional)</span></label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="you@example.com"
                  />
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div> --}}

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="address"
                    placeholder="1234 Main St"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Sub Area</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="subarea"
                    placeholder="1234 Main St"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter your Sub-Area.
                  </div>
                </div>
              </div>

              <hr class="my-4" />

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="same-address"
                />
                <label class="form-check-label" for="same-address"
                  >Shipping address is the same as my billing address</label
                >
              </div>

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="save-info"
                />
                <label class="form-check-label" for="save-info"
                  >Save this information for next time</label
                >
              </div>

              <hr class="my-4" />

              <h4 class="mb-3">Payment Method</h4>

              <div class="my-3">
                <div class="form-check">
                  <input
                    id="cash"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    checked
                    required
                  />
                  <label class="form-check-label" for="credit"
                    >Cash on Delivery</label
                  >
                </div>



              <div class="my-3">
                <div class="form-check">
                  <input
                    id="credit"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    checked
                    required
                  />
                  <label class="form-check-label" for="credit"
                    >Credit card</label
                  >
                </div>
                <div class="form-check">
                  <input
                    id="debit"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    required
                  />
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input
                    id="paypal"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    required
                  />
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cc-name"
                    placeholder=""
                    
                  />
                  <small class="text-muted"
                    >Full name as displayed on card</small
                  >
                  <div class="invalid-feedback">Name on card is required</div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label"
                    >Credit card number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="cc-number"
                    placeholder=""
            
                  />
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label"
                    >Expiration</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="cc-expiration"
                    placeholder=""
                  
                  />
                  <div class="invalid-feedback">Expiration date required</div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cc-cvv"
                    placeholder=""
                    
                  />
                  <div class="invalid-feedback">Security code required</div>
                </div>
              </div>

              <hr class="my-4" />

              <div class="col-12">
                <label for="address2" class="form-label"
                  >Special Instructions
                  <span class="text-muted">(Optional)</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="address2"
                  placeholder="Add instructions e.g., about allergies or delivery instructions here"
                />
              </div>

              <hr class="my-4" />

              <button class="w-100 btn btn-primary btn-lg btn-warning" type="submit">
                <a class="subtn" >
                Place Order
                </a>
              </button>

            </form>
          </div>
        </div>

      </main>


              <hr class="my-4" />


  <!--Divider before footer-->


<!--Footer-->
<div class="bottomerr">
<div class = "bottombar">
<div class="container bottomcontainer">
  <footer class="py-5">
    <div class="row">
      <div class="col-md-4">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms and Conditions</a></li>
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
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ's</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Feedback</a></li>
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

    <script src="js/form-validation.js"></script>
  </body>
</html>
