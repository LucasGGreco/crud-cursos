<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){
            
        $correo = new ContactanosMailable($request->all());
        Mail::to('lucas.greco129@gmail.com')->send( $correo);

        return "Revise su correo electronico";
    }
}
