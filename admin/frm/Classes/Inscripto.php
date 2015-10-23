<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registrado
 *
 * @author Luki
 */
//require_once '../frm/init.php';
class Ftl_Inscripto extends Ftl_ClaseBase{
    //put your code here
    const TABLE             = 'registro';
   

    public $nombre;
    public $email;
    public $fuerza;


    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFuerza() {
        return $this->fuerza;
    }

    public function setFuerza($fuerza) {
        $this->fuerza = $fuerza;
    }

    public function  __construct($id=null,$guid=false)
    {
        parent::__construct();
        if ($id){
            if ($guid)
            {
                $this->_recuperarPorGuid(DB_PREFIX . self::TABLE,$id);
            }
            else
            {
                $this->_recuperarPorId(DB_PREFIX . self::TABLE,$id);
            }
        }
    }

    public static function login ($params)
    {
        
        $respuesta = new Ftl_Response();
        $respuesta->state = 0;

        $oUsuario = new Ftl_Registrado();
        $oUsuario->_recuperarPorLogin(DB_PREFIX . self::TABLE, "id,estado", $params);

        return $oUsuario;

    }

    public static function cambiarEstado ($id,$estado,$guid=false)
    {
        return parent::_cambiarEstado(DB_PREFIX . self::TABLE, $id, $estado, $guid);
    }

    public static function eliminar($id,$guid=false)
    {
        return parent::_eliminar(DB_PREFIX . self::TABLE, $id, $guid);
    }


    public static function obtenerListado ($pagina=1,$reg_x_pagina=50,$filtros=null,$orden=null)
    {
        $campos = "*, r.nombre";
        $from   = DB_PREFIX . self::TABLE . " r" ;
        return parent::_obtenerListadoPaginado($campos, $from, $pagina, $reg_x_pagina, $filtros, $orden);
    }

    public function guardar()
    {
        
        $res = null;
        self::$db = FTL_DB::getInstance();

        $datos = array (

            "nombre"                => $this->getNombre(),
            "email"                 => $this->getEmail(),
            "fuerza"                => $this->getFuerza(),
            "fecha_ult_modificacion"=> date("Y-m-d H:i:s")
        );

        if ($this->getId() > 0)
        {
            $res = self::$db->update( DB_PREFIX.'registro',$datos,'id='.self::$db->escape($this->getId()) );
        }
        else
        {
            $datos["fecha_alta"]    = $this->getFechaAlta();
            $res = self::$db->insert( DB_PREFIX.'registro',$datos );
            if ( $res )
                $this->setId ( $res );
        }
         

        self::$db->close();

        return $res;




    }

}
?>
