<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          <title>Campus Cravings | Home</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Hugo 0.88.1" />



    <!--Favicon-->
    <link rel="icon"  href="{{ asset('restaurant.png') }}">

    {{-- playball fontfamily for logo --}}

    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>

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
      </style>

    <body>

        <div class="row">

                <div class="col-md-4 col-md-offset-4">
                    <h1>
                        My Orders
                        <h1>
                            <hr>
                            @foreach($orders as $order)

                            <div class="panel panel-default">
                                    <div class="panel-body">
                                        <ul class="list-group">
                                            @foreach($order->cart->items as $item)
                                                    <li class="list-group-item">
                                                        <span class="badge">Rs. {{ $item['price'] }} </span>
                                                             {{ $item['item']['itemname'] }} | {{ $item['qty'] }} Units
                                                                     </li>
                                            @endforeach
                                        </ul>

                            </div>
                    <div class="panel-footer"><strong>Total Price:Rs. {{ $order->cart->totalPrice}}</strong></div>
  
        </div>
          @endforeach

 </div>

</div>
</body>
    </html>
