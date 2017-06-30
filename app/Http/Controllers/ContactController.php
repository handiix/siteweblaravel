<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    
    public function newContact(){

    	$vary = new Contact();

    	$vary->name = "luce Renan";
    	$vary->email = "luce@gmail.com";
    	$vary->message = "j apprende la langue français";
    	
    	$vary->save();



    }
}
