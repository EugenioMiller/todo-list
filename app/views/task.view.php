<?php

require_once 'libs/Smarty.class.php';

class TaskView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarTareas($tareas) {
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->display('home.tpl');
    }

    public function showEditForm($tarea){
        $this->smarty->assign('tarea', $tarea);
        $this->smarty->display('formEdit.tpl');
    }
}