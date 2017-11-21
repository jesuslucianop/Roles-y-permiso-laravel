<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class Prueba extends Controller
{


    public function test(){
    $users = DB::select('select * from clientes where id = ?', [1]);
    $nombre = "pedro lopez";
	return view('vista',['nombre'=>$nombre,'usuarios'=>$users]);

    }
}
