<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dix;

class DixController extends Controller
{
	public function newDix() {

		$vary = new Dix();

		$vary->name = "Handix";
		$vary->save();


		echo "Je suis Handix" . "$vary";

		/*$newDix->name = "hhondix";
		$newDix->email = "han@gmail.com";
		$newDix->message = "kkkkkkk";

		$newDix->save();*/

	}
}
