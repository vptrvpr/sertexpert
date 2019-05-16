<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(Request $request)
    {
        $contacts = Contact::all();

        return response()->json($contacts);
    }


    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $contact = $request->get('contact');

        $newContact = new Contact();
        $newContact->city = $contact['city'];
        $newContact->map = $contact['map'];
        $newContact->address = $contact['address'];
        $newContact->phone = $contact['phone'];
        $newContact->email = $contact['email'];
        $newContact->save();

    }


    /**
     * @param Request $request
     */
    public function edit(Request $request)
    {
        $contact = $request->get('contact');

        $editContact = Contact::where('id',$contact['id'])->first();

        $editContact->city = $contact['city'];
        $editContact->map = $contact['map'];
        $editContact->address = $contact['address'];
        $editContact->phone = $contact['phone'];
        $editContact->email = $contact['email'];
        $editContact->save();

    }


    /**
     * @param $id
     */
    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
    }


    /**
     * @return mixed
     */
    public function getContactByCity(){
        $contact = Contact::where('city',$_COOKIE['city'])->first();

        if(!$contact){
            $contact = Contact::where('city','Санкт-Петербург')->first();
        }

        return $contact;
    }
}
