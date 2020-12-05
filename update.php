<?php
use illuminate\Database\Capsule\Manager as DB;


require 'vendor\autoload.php';
require 'config\database.php';

DB::table('calificaiones')
->where('idcalificacion',$_POST['idcalificacion'])
->update(['idcalificacion'=> $_POST['calificacion']]);

echo "Calificación actualizada con ID:{$_POST ['idcalificacion']}
<a class='button' href='consultar.php'>VOLVER</a>";