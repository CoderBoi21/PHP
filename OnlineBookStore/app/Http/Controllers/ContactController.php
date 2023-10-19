<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name_txt' => 'required',
            'email_txt' => 'required',
            'msg_txt' => 'required',
        ]);

        $contact_tbl = new contact([
            'name'=> $request->get('name_txt'),
            'email'=> $request->get('email_txt'),
            'msg'=> $request->get('msg_txt'),
        ]);

        $contact_tbl->save();

        return redirect('/');
    }
}
