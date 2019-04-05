<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth.basic');
    }
   
    public function alimentador(Request $request)
    {
        //echo bcrypt(';T-Lz2qXKHZ*DoorkgON');
        $datos = json_decode(file_get_contents('php://input'), true);
        print_r($datos);exit;
        //return response()->json( $array,$codigo);
    }

   
}