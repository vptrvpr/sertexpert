<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mail;

class SenderController extends Controller
{
    /**
     * @param Request $request
     */
    public function sendEmail(Request $request){
        $contacts = $request->get('contacts');

        Mail::send('emails.contacts', ['contacts' => $contacts], function ($m) {
            $m->from('info@cps-company.ru', 'Вопрос - SertExpert');
            $m->to(env('EMAIL_NOTIF'))->subject('Остался вопрос?');
        });
    }


    /**
     * @param Request $request
     */
    public function sendEmail2(Request $request){
        $contacts = $request->get('contacts');

        Mail::send('emails.contacts2', ['contacts' => $contacts], function ($m) {
            $m->from('info@cps-company.ru', 'Вопрос - SertExpert');
            $m->to(env('EMAIL_NOTIF'))->subject('Остался вопрос?');
        });
    }
}
