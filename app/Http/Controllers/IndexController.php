<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function __construct()
	{
	   //$this->middleware('acceso');
	    //$this->middleware('auth.basic');
	}
    public function index()
    {
        return view('index.index');
    }
   
}