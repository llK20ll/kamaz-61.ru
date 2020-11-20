<?php

namespace App\Http\Controllers;

use App\Mail\CallBackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function contact(Request $request){
        $lastname = $request->lastname;
        if(isset($lastname)) dd($lastname);

        $name = $request->name;
        $phone = $request->phone;
        $msg = $request->msg;   

        $mail = config('mail.from.address');

        Mail::to($mail)->send(new CallBackMail($name, $phone, $msg));
        session()->flash('success', 'Ваш заявка принята, с вами свяжутся в самое ближайшее время.');     
        return redirect()->back();
    }
}
