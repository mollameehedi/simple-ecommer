<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;
use PDF;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('customer.dashboard',[
            'orders' => Order::where('user_id',Auth::id())->latest()->paginate(10),
        ]);
    }

    public function customerinvoicedownload($id){
        $order = Order::find($id);
        $pdf = PDF::loadView('pdf.invoice', compact('order'));
        return $pdf->download('inoice( id = '.$id.').pdf');
    }
}
