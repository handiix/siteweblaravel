<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
   public function Handix(){

   		$var = new Service();

   		$var->titre ="Tetire de service";
   		$var->discription="test dis test dis tes te";
   		$var->stat="Text";

   		$var->save();

   }

   public function listServices(){

   	$list = Service::all();

   	return view('listi', ['x' => $list ]);
   }
}
