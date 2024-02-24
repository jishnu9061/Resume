<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\ContactMailRequest;

class HomeController extends Controller
{
    public function sendContact(ContactMailRequest $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        Mail::to('jishnuganesh27@gmail.com')->send(new ContactMail($data));
        // Toastr::success('Contact send successfully');
        return redirect()->back();
    }

    public function downloadResume()
    {
        $filePath = public_path('pdf/jishnu-resume.pdf');
        return Response::download($filePath, 'jishnu-resume.pdf');
    }
}
