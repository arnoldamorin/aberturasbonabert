<?php 
namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

use DB;
use Session;

class Menu extends Model{
    protected $table = 'sistema_menues';
    public $timestamps = false;

    protected $filable =[
        'idmenu','nombre','id_padre','orden','activo','url','css'
    ];
}




?>