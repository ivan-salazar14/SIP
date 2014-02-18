<?php

//  Registro_empresa: ESTA CLASE CONTROLA  LA INFORMACION DE LOS USUARIOS 
//  CAPA : NEGOCIO
//  

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registro_empresa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->model('registro_empresa_dao');
    }

    function index() {
        $this->router("create");
    }

//    FUNCION QUE RETORNA UNA VISTA DEPENDIENTE DE $VISTA_ID, ROUTEA LA VISTA
    public function router($vista_id = 0) { //$vista_id se inicializa en 0 si no se le envia el parametro al metodo router() 
//      dependiedo de el valor de $vista_id entrega la vista requerida 
//        $this->data['content'] = 'registro_empresa/registro_empresa_delete';
//                //      $this->load->view('contenedor',  $this->data);
//                $this->load->view('contenedor', $this->data);
        if (empty($vista_id))
            $this->get_all_registro_empresa();
        elseif ($vista_id == "delete") {
            $response['content'] = 'registro_empresa/registro_empresa_delete';
            $this->load->view('contenedor', $response);
        } elseif ($vista_id == "update") {
            $response['content'] = 'registro_empresa/registro_empresa_update';
            $this->load->view('contenedor', $response);
        } elseif ($vista_id == "create") {
            $response['content'] = 'registro_empresa/registro_empresa_create';
            $this->load->view('contenedor', $response);
//      entraga el menu de hipervinculos para la navegación 
        } //$this->load->view('registro_empresa/registro_empresa_menu');
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY Y EN UN JSON
    public function get_all_registro_empresa() {
//      consulta al modelo todos los registro_empresas 
        $lista_registro_empresas = $this->registro_empresa_dao->get_all_registro_empresa();
//      recibe la lista de registro_empresas como arreglo de arreglos y empaqueta en la repuesta
        $response["lista_registro_empresas"] = $lista_registro_empresas;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($lista_registro_empresas);
        $response['content'] = 'registro_empresa/registro_empresa_show_all';
        $this->load->view('contenedor', $response);
        // $this->load->view('registro_empresa/registro_empresa_show_all', $response);
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    public function get_registro_empresa() {
//     consulta al modelo la informacion de un registro_empresa
        $registro_empresa = $this->registro_empresa_dao->get_registro_empresa();
//      recibe la informacion del registro_empresa como arreglo y empaqueta en la repuesta
        $response["registro_empresa"] = $registro_empresa;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($registro_empresa);
//      si la solicitud es echa por el formulario de eliminar entrega esta vista
        if (!empty($_POST["myBuscarDelete"])) {
            $response['content'] = 'registro_empresa/registro_empresa_delete';
            $this->load->view('contenedor', $response);
            //  $this->load->view('registro_empresa/registro_empresa_delete', $response);
//      si la solicitud es echa por el formulario de actualizar entrega esta vista
        } if (!empty($_POST["myBuscarUpdate"])) {

            $response['content'] = 'registro_empresa/registro_empresa_update';
            $this->load->view('contenedor', $response);
        }
//      entraga el menu de hipervinculos para la navegación 
        $this->load->view('registro_empresa/registro_empresa_menu');
    }

//    FUNCION QUE CREA UN USUARIO CON LA INFORMACION DEL $_POST
    public function set_registro_empresa() {
//      ordena al modelo crear un registro_empresa
        $this->registro_empresa_dao->set_registro_empresa();
//      regresa al router para mostrar todos los registro_empresas
        $this->router();
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    public function update_registro_empresa() {
//      ordena al modelo modificar un registro_empresa
        $this->registro_empresa_dao->update_registro_empresa();
//      regresa al router para mostrar todos los registro_empresas
        $this->router();
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    public function delete_registro_empresa() {
//      ordena al modelo eliminar un registro_empresa
        $this->registro_empresa_dao->delete_registro_empresa();
//      regresa al router para mostrar todos los registro_empresas
        $this->router();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
