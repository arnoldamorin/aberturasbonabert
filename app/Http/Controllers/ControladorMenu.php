<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades\Sistema\Usuario;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Menu;
use App\Entidades\Sistema\MenuArea;

require app_path().'/start/constants.php';
use Session;

class ControladorMenu extends Controller
{
    public function nuevo(){
        $titulo = "Nuevo menú";
        return view ('sistema.menu-nuevo',compact('titulo'));
    }
}
//resources/views/sistema/menu-nuevo.blade.php