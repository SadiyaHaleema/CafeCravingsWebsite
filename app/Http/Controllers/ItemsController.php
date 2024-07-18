<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cafe;
use App\Models\C2;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Session;

class ItemsController extends Controller
{

    public function getData()
    {

        $data = Item::where('id','B00001')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','B00002')->get();
       $data3 =Item::where('id','B00003')->get();
       $data4 =Item::where('id','B00004')->get();
       $data5 =Item::where('id','B00005')->get();
       $data6 =Item::where('id','B00006')->get();
       $data7 =Item::where('id','B00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00001')->get();
       $data16 =Item::where('id','SJ00002')->get();
       $data17 =Item::where('id','SJ00003')->get();
       $data18 =Cafe::where('Cafeid','12')->get();
       $data19 =Cafe::where('Cafeid','13')->get();




       return view('menu',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18','data19'));
    }








 public function show()
    {


      // $data = Item::where('id','B00001')->get();
     
      //  $data2 =Item::where('id','B00002')->get();
      //  $data3 =Item::where('id','B00003')->get();
      //  $data4 =Item::where('id','B00004')->get();
      //  $data5 =Item::where('id','B00005')->get();
      //  $data6 =Item::where('id','B00006')->get();
      //  $data7 =Item::where('id','B00007')->get();









   $data = Item::where('id','FF00002')->get();
     
       $data2 =Item::where('id','FF00001')->get();
       $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00009')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00005')->get();
       $data16 =Item::where('id','SJ00006')->get();
       $data17 =Item::where('id','SJ00007')->get();
       $data18 =Cafe::where('Cafeid','12')->get();


       return view('C2',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }

    public function showdata()
    {

        $data = Item::where('id','FF00002')->get();
     
       $data2 =Item::where('id','FF00001')->get();
       $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00001')->get();
       $data16 =Item::where('id','SJ00002')->get();
       $data17 =Item::where('id','SJ00003')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('margalla',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }




public function showmenu()
    {

        $data = Item::where('id','FF00002')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','FF00001')->get();
       $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00004')->get();
       $data16 =Item::where('id','SJ00005')->get();
       $data17 =Item::where('id','SJ00006')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('kybo',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }









public function displaymenu()
    {

        $data = Item::where('id','B00001')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','B00002')->get();
       $data3 =Item::where('id','B00003')->get();
       $data4 =Item::where('id','B00004')->get();
       $data5 =Item::where('id','B00005')->get();
       $data6 =Item::where('id','B00006')->get();
       $data7 =Item::where('id','B00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00001')->get();
       $data16 =Item::where('id','SJ00002')->get();
       $data17 =Item::where('id','SJ00003')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('C3',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }



public function c4menu()
    {

        $data = Item::where('id','B00001')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','B00002')->get();
       $data3 =Item::where('id','B00003')->get();
       $data4 =Item::where('id','B00004')->get();
       $data5 =Item::where('id','B00005')->get();
       $data6 =Item::where('id','B00006')->get();
       $data7 =Item::where('id','B00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00001')->get();
       $data16 =Item::where('id','SJ00002')->get();
       $data17 =Item::where('id','SJ00003')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('C4',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }




public function eataliamenu()
    {

        $data = Item::where('id','FF00002')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','FF00001')->get();
       $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00004')->get();
       $data16 =Item::where('id','SJ00005')->get();
       $data17 =Item::where('id','SJ00006')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('eatalia',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }




public function dreamvillemenu()
    {

        $data = Item::where('id','FF00002')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','FF00001')->get();
       $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00004')->get();
       $data16 =Item::where('id','SJ00005')->get();
       $data17 =Item::where('id','SJ00006')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('dreamville',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }



public function buddiesmenu()
    {

        $data = Item::where('id','FF00002')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
        $data3 =Item::where('id','FF00003')->get();
       $data4 =Item::where('id','FF00004')->get();
       $data5 =Item::where('id','FF00005')->get();
       $data6 =Item::where('id','FF00006')->get();
       $data7 =Item::where('id','FF00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00004')->get();
       $data16 =Item::where('id','SJ00005')->get();
       $data17 =Item::where('id','SJ00006')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('buddies',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }




    public function retromenu()
    {

        $data = Item::where('id','B00001')->get();
      //  $collection=Breakfastitem::all();
        // return Breakfastitem::where('breakfastitem_id','B00001')->get();
       // return view('menu',['collection'=>$data['data']]);
       $data2 =Item::where('id','B00002')->get();
       $data3 =Item::where('id','B00003')->get();
       $data4 =Item::where('id','B00004')->get();
       $data5 =Item::where('id','B00005')->get();
       $data6 =Item::where('id','B00006')->get();
       $data7 =Item::where('id','B00007')->get();
       $data8 =Item::where('id','DL00001')->get();
       $data9 =Item::where('id','DL00002')->get();
       $data10 =Item::where('id','DL00003')->get();
       $data11 =Item::where('id','DL00004')->get();
       $data12 =Item::where('id','DL00010')->get();
       $data13 =Item::where('id','DL00006')->get();
       $data14 =Item::where('id','DL00007')->get();
       $data15 =Item::where('id','SJ00001')->get();
       $data16 =Item::where('id','SJ00002')->get();
       $data17 =Item::where('id','SJ00003')->get();
       $data18 =Cafe::where('Cafeid','12')->get();




       return view('retro',compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15','data16','data17','data18'));
    }




    public function cart()

    {
        return view('cart');
    }



// Adding Values to Cart

public function getAddToCart(Request $request, $id)
{

$product =Item::findorFail($id);
$oldCart =Session::has('cart')? Session::get('cart'):null;
$cart = new Cart($oldCart);
$cart->add($product,$product->id);
$request->session()->put('cart',$cart);
//dd($request->session()->get('cart'));
 return redirect()->back()->with('success', 'Product added to cart successfully!');

}



// Fetching Cart Details


public function getCart()
{
    if (!Session::has('cart'))
    {
        return view('viewCart');

    }

    $oldCart=Session::get('cart');
    $cart= new Cart($oldCart);
    return view('viewCart',['products' => $cart->items,'totalPrice'=> $cart->totalPrice ]);
}



// Proceeding for Checout 

public function getcheckout()
{

   if (!Session::has('cart'))
    {
        return view('viewCart');

    }

    $oldCart =Session::get('cart');
    $cart =new Cart($oldCart);
    $total =$cart->totalPrice;
    return view('checkout',['total'=>$total]);



}


// Saving information of User Checkout details in a table using Order Model

public function postCheckout(Request $req)
{

         $order = new Order;
         $order->address = $req->address;
         $order->username = $req->firstname;
         $order->username = $req->lastname;
         $order->subarea = $req->subarea;
         $order->user_id = auth()->user()->id;
         $order->save();
        //  return redirect('/order');
        //  return view('orderplaced');
        //  return redirect ('')
        //  return redirect('');
        //  return redirect("{{ route('order')}}")->with('success', 'Product added to cart successfully!');

}




public function placeorder()
{
    if (!Session::has('cart'))
    {
        
        return view('orderplaced');

    }
    
    $oldCart=Session::get('cart');
    $cart= new Cart($oldCart);
    // $ordernum = Order::where('user_id','auth()->user()->id')->get();
    return view('orderplaced',['products' => $cart->items,'totalPrice'=> $cart->totalPrice ]);
    // return redirect('order');

}


// Displaying Order when user checking the profile
public function getProfile()
{

      //  $orders=auth()->user()->id->orders;

       $orders=Auth::user()->orders;
       $orders->transform(function($order,$key){

       $order->cart = unserialize($order->cart);
       return $order;

       });

      $userid = Order::where('user_id','auth()->user()->id')->get();




      return view('profile',compact('orders'));

}



}

