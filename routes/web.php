<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function contactvariable(){

    return($contacts = [
        1 => ['name' => 'Osama', 'phone' => '03363241166'],

        2 => ['name' => 'Baba', 'phone' => '03012947545'],

        3 => ['name' => 'Mumi', 'phone' => '0336424727'],

        4 => ['name' => 'Abdullah', 'phone' => '033654447'],

        5 => ['name' => 'Taqweem', 'phone' => '03362414557'],


    ]);
    
}

Route::get('/', function () {
 
   return view('welcome');

});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

    ####Testing It now ###

    /*$contacts = [
        1 => ['name' => 'Osama', 'phone' => '03363241166'],

        2 => ['name' => 'Baba', 'phone' => '03012947545'],

        3 => ['name' => 'Mumi', 'phone' => '0336424727'],

        4 => ['name' => 'Abdullah', 'phone' => '033654447'],

        5 => ['name' => 'Taqweem', 'phone' => '03362414557'],


    ];
    $companies = [
        1 => ['name'=> 'Zaf Comp', 'contacts'=>3],

        2 => ['name'=> 'Google', 'contacts'=>5],
    ];

    $contacts = contactvariable();
    return view('contacts.index',compact('contacts','companies'));
 */



//create was just contacts.create view
Route::get('/contacts/create',[ContactController::class,'create'])->name('contacts.create');


Route::get('/contacts/{id}',[ContactController::class,'show'] )->name('contacts.show');

  /*  $contacts = contactvariable();
    abort_if(!isset($contacts[$id]), 403);
    $contact = $contacts[$id];
    //return "Contact". $id;
  //  abort_if(!isset($contacts[$id]), 404);
    return view('contacts.show')->with('contact', $contact);*/




Route::get('/contacts/works',function() {

    return "<h1>Seeing it as changing </h1>";


});




/*Route::get('/contacts/{contactid}',function($contactid) {

    return "Contact " . $contactid;

})->where('contactid','[0-9]+');

Route::get('/computers/{name?}',function($name=null) {

    if ($name){

return "company" . $name;
        
    }
    else {

        return "fucked up future";
    }


})->where('name','[a-zA-Z]+');


Route::fallback(function () {

return "<h1:> Sadly, We no longer try to act this exists</h1>"; 
});*/