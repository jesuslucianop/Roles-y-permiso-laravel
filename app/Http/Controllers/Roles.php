<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class Roles extends Controller
{
  public function jesus()
  {

    $nombre = "pedro lopez";
  return view('Rol',['nombre'=>$nombre]);

  }
}
