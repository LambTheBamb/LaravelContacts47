<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $companies = [
            1 => ['name'=> 'Zaf Comp', 'contacts'=>3],
    
            2 => ['name'=> 'Google', 'contacts'=>5],
        ];
    
        $contacts = $this->contactvariable();
        return view('contacts.index',compact('contacts','companies'));

    }
       protected function contactvariable(){

        return($contacts = [
            1 => ['name' => 'Osama', 'phone' => '03363241166'],
    
            2 => ['name' => 'Baba', 'phone' => '03012947545'],
    
            3 => ['name' => 'Mumi', 'phone' => '0336424727'],
    
            4 => ['name' => 'Abdullah', 'phone' => '033654447'],
    
            5 => ['name' => 'Taqweem', 'phone' => '03362414557'],
    
    
        ]);
        
    }

    public function create(){

        return view('contacts.create');


    }

    protected function show($id){

        $contacts = $this->contactvariable();
        abort_if(!isset($contacts[$id]), 403);
        $contact = $contacts[$id];
    //return "Contact". $id;
  //  abort_if(!isset($contacts[$id]), 404);
        return view('contacts.show')->with('contact', $contact);


    }
}
