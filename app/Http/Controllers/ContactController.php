<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    public function sendMail(Request $request){

        $contact_email = config('app.receiving_mail');
        Mail::to($contact_email)->send(new ContactMail(
            $request->name_input,
            $request->surname_input,
            $request->position_input,
            $request->email_input,
            $request->phone_number_input,
            $request->company_name_input,
            $request->country_of_incorporation,
            $request->company_website_input,
            $request->monthly_card_input,
            $request->industry_input,
            $request->content_input));
        // Mail::to('hjhj@nn.com')->send(new ContactMail($request->name, $request->email, $request->subject_mail, $request->content));
        // Mail::to("zz@xx.com")->send(new ContactMail('nnn','e@z.com','bla bla','bla bla bla bla'));
        return to_route('home')->with('message','Message sent sucessfully !');
    }

    public function validate(Request $request, array $rules, array $messages = [], array $attributes = [])
    {   $v = Validator::make($request->all(), [
        'email_input' => 'required|email',
    ]);

        if ($v->fails()) {
            return redirect(url()->previous() . "#contactus")->withErrors($v->errors());
        }
        $this->sendMail($request);
    }
}
