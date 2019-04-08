<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Interfaces  extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'interfaces';
}
