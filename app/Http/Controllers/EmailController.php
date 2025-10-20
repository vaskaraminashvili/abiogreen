<?php

namespace App\Http\Controllers;


use App\Http\Requests\GeneralEmaiRequest;
use App\Mail\GeneralMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function submitForm(GeneralEmaiRequest $request)
    {
        $email = $request->has('sub_company_email') ? $request->sub_company_email : 'info@abio.com';
        try {
            Mail::to($email)->send(new GeneralMail(
                $request->name,
                $request->email,
                $request->text
            ));
            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage(), [
                'exception' => $e,
                'name' => $request->name,
                'email' => $request->email
            ]);

            return redirect()->back()
                        ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                        ->withInput();
        }
    }
}
