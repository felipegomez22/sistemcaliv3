<?php
use illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

DB::table('calificaciones')->where('idcalificacion',$_GET['id'])->delete();

echo"Calificación eliminada con ID:{$_GET['id']}
<a class='button' href='consulter.php'>Volver</a>";