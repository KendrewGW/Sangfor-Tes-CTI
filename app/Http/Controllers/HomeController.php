<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function industry(){
        $industries = Industry::all();

        return view('home', compact('industries'));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'jobTitle' => 'required',
            'companyName' => 'required',
            'industry' => 'required|exists:industry,id',
            'phoneNumber' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('thankyou');
    }    

    public function changeLanguage($lang){
        if (in_array($lang, ['en', 'id'])) {
            App::setLocale($lang);
        }
    
        return redirect()->back();
    } 
}
