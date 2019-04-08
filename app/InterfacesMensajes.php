<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces;
class InterfacesMensajes  extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'interfaces_mensajes';
    public function interfaces()
    {
        return $this->belongsTo(Interfaces::class);
    }
}
