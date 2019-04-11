<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Interfaces;
use App\InterfacesMensajes;
class RestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic');
    }
    public function index()
    {
        abort(404);
    }
    public function show($id)
    {
        abort(404);
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $datos = json_decode(file_get_contents('php://input'), true);
        //echo $datos['root'][0]['interface'] ;exit;
        $mensaje='Ingreso normal. ';
        foreach($datos['root'] as $dato)
        {
            $existe=Interfaces::where(['nombre'=>$dato['interface']])->first();
            if(is_object($existe))
            {
                $registro=InterfacesMensajes::create
                (
                    [
                        'interfaces_id'=>$existe->id,
                        'documento'=> $dato['documento'],
                        'mensaje'=> $dato['mensaje'],
                        'id_mensaje'=> $dato['id_mensaje'],
                        'fecha'=>date('Y-m-d h:i:s'),
                        'estado'=>'1'
                    ]
                );
            }else
            {
                $interface=Interfaces::create
                (
                    [
                        'nombre'=>$dato['interface']
                    ]
                );
                $registro=InterfacesMensajes::create
                (
                    [
                        'interfaces_id'=>$interface->id,
                        'documento'=> $dato['documento'],
                        'mensaje'=> $dato['mensaje'],
                        'id_mensaje'=> $dato['id_mensaje'],
                        'fecha'=>date('Y-m-d h:i:s'),
                        'estado'=>'1'
                    ]
                );
                $mensaje.='Se agregó la interface '.$dato['interface'].'. ';
            }
            
            
        }
        $data=array
            (
                'status'=>'success',
                'mensaje'=>$mensaje
            );
        return response()->json( $data,201);
    }

   
}
