<?php 
    require_once "../controladores/ctrlClientes.php";
    require_once "../modelos/mdlClientes.php";
    
    class ajaxClientes{
        PUBLIC $idClientes;
        
        PUBLIC function cargarDatos(){
            $tabla = "cliente";
            $parametro = "cliente";
            $id = $this->idClientes;
            $datos = ControladorClientes::crtlCargarCliente($tabla,$parametro, $id);
            echo json_encode($datos);
        }
    }


    if (isset($_POST['idClientes'])){
        $objAjaxClientes = new ajaxClientes();
        $objAjaxClientes->idClientes = $_POST['idClientes'];
        if($_POST['edit'] == 'edit'){
            $objAjaxClientes->cargarDatos();
        }
        else{
            #$objAjaxClientes->eliminarDatos();
        }
    }
