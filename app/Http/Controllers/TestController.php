<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
	public function holaaa(Request $request){

		$users=DB::select('select * from GTD_DOCUMENTOS');
		dd($users);
	}
}