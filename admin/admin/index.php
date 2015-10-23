<?php
    require_once '../frm/init.php';
    
    $page = new Ftl_PageBO();
    $page->setTitle("Listado de formularios registrados");
    $page->loadSripts("tooltip,form,checkbox");
    $page->checkSession();
    $opciones = array (
        
        'dataSource'        => array (
            'class'         => 'Ftl_Inscripto',
            'method'        => 'obtenerListado'
        ),
        'table'             => 'registro',
        'fields'                => array (
				'nombre'    => array('title'=>'Nombre','type'=>'text','filter'=>true),
				'email'  => array('title'=>'Email'),
				'fuerza'  => array('title'=>'Fuerza')
        ),

        'fieldId'               => 'id',
        
        'canOrder'          => false,
		'canDelete'         => true,
        'orderBy'           => 'fecha_ult_modificacion|DESC',

        'showActions'       => true,
        
        'resPerPage'        => 100,

    );


    $list = new Ftl_ListBO( $opciones );
    

    $page->showTop();
    $list->show();
    $page->showFoot();
 ?>
