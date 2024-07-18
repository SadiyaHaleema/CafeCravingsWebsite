<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;


class FeedbackController extends Controller
{
    public function addreviews(Request $req)

    {
         $addrecord = new Feedback;
         $addrecord->Firstname = $req->Firstname;
         $addrecord->lastname = $req->lastname;
         $addrecord->email = $req->email;
         $addrecord->campus = $req->campus;
         $addrecord->cafe = $req->cafe;
         $addrecord->subject = $req->subject;
         $addrecord->feedbacktype = $req->feedback_type;
         $order->user_id = auth()->user()->id;
         $addrecord->save();
         return redirect('feedback');
         
    }
}
