<?php

namespace App\Http\Controllers;

use App\Contactmessage;
use Illuminate\Http\Request;

class Contact_message extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('customerrole');
    }
    public function contactmessage(){
        return view('admin.contact.contactmessage',[
            'contactmessages' => Contactmessage::latest()->paginate(12),
        ]);
    }
    public function contactmessagesdelete($id){
        Contactmessage::find($id)->delete();
        return back()->with('message_status', 'Message deleted successfully');
    }
    public function contactmessagesview($id){
        return view('admin.contact.contactview',[
            'contactmessage' => Contactmessage::find($id)->first()
        ]);
    }
}
