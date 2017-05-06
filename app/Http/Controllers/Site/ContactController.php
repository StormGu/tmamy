<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {

        $data['breadcrumbs'][trans('contact.title')] = '#';

        return View('adforest.contact.form', $data);
    }

    public function store(ContactRequest $request) {


        Contact::create($request->all());

        try {

            \Mail::send('adforest.emails.contact', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ), function ($message) use ($request) {
                $message->from($request->get('email'));
                $message->to(\Config::get('mail.from.address'), \Config::get('mail.from.name'))->subject($request->get('subject'));
            });

        } catch (\Swift_TransportException $e) {

        }

        return \Redirect::to('contact')->with('message', [
            'type' => 'success',
            'message' => trans('contact.success_contact'),
        ]);
    }
}
