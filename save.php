<?php

require "admin/frm/init.php";

$reg = new Ftl_Inscripto;

$reg->setNombre("Adrian");
$reg->setEmail("adriang_1174@hotmail.com");
$reg->setFuerza("Colegio Militar");

$reg->guardar();

?>