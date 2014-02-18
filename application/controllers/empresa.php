<?php

//  Empresa: ESTA CLASE CONTROLA  LA INFORMACION DE LOS USUARIOS 
//  CAPA : NEGOCIO
//  

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->model('empresa_dao');
         $this->load->library('ion_auth');
    }
    
    
    function index(){
        $this->router();
    }

//    FUNCION QUE RETORNA UNA VISTA DEPENDIENTE DE $VISTA_ID, ROUTEA LA VISTA
    public function router($vista_id=0) { //$vista_id se inicializa en 0 si no se le envia el parametro al metodo router() 
//      dependiedo de el valor de $vista_id entrega la vista requerida 
//        $this->data['content'] = 'empresa/empresa_delete';
//                //      $this->load->view('contenedor',  $this->data);
//                $this->load->view('contenedor', $this->data);
        if (empty($vista_id))
            $this->get_all_empresa();
        elseif ($vista_id == "delete"){
         //   $this->load->view('empresa/empresa_delete');
        $response['content'] = 'empresa/empresa_delete';
                $this->load->view('contenedor', $response);
        }  elseif ($vista_id == "update"){
              $response['content'] = 'empresa/empresa_update';
                $this->load->view('contenedor', $response);
        }  elseif ($vista_id == "cerrar"){
            		$this->ion_auth->logout();
          redirect('Main');
         
        } elseif ($vista_id == "create"){
         //   $this->load->view('empresa/empresa_create');
        $response['content'] = 'empresa/empresa_create';
                $this->load->view('contenedor', $response);
//      entraga el menu de hipervinculos para la navegación 
        } $this->load->view('empresa/empresa_menu');
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY Y EN UN JSON
    public function get_all_empresa() {
//      consulta al modelo todos los empresas 
        $lista_empresas = $this->empresa_dao->get_all_empresa();
//      recibe la lista de empresas como arreglo de arreglos y empaqueta en la repuesta
        $response["lista_empresas"] = $lista_empresas;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($lista_empresas);
         $response['content'] = 'empresa/empresa_show_all';
                $this->load->view('contenedor', $response);
       // $this->load->view('empresa/empresa_show_all', $response);
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    public function get_empresa() {
//     consulta al modelo la informacion de un empresa
        $empresa = $this->empresa_dao->get_empresa();
//      recibe la informacion del empresa como arreglo y empaqueta en la repuesta
        $response["empresa"] = $empresa;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($empresa);
//      si la solicitud es echa por el formulario de eliminar entrega esta vista
        if (!empty($_POST["myBuscarDelete"])){
             $response['content'] = 'empresa/empresa_delete';
                $this->load->view('contenedor', $response);
          //  $this->load->view('empresa/empresa_delete', $response);
//      si la solicitud es echa por el formulario de actualizar entrega esta vista
        } if (!empty($_POST["myBuscarUpdate"])){
          
        $response['content'] = 'empresa/empresa_update';
                $this->load->view('contenedor', $response);
        }
//      entraga el menu de hipervinculos para la navegación 
        $this->load->view('empresa/empresa_menu');
    }

//    FUNCION QUE CREA UN USUARIO CON LA INFORMACION DEL $_POST
    public function set_empresa() {
//      ordena al modelo crear un empresa
        $this->empresa_dao->set_empresa();
//      regresa al router para mostrar todos los empresas
        $this->router();
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    public function update_empresa() {
//      ordena al modelo modificar un empresa
        $this->empresa_dao->update_empresa();
//      regresa al router para mostrar todos los empresas
        $this->router();
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    public function delete_empresa() {
//      ordena al modelo eliminar un empresa
        $this->empresa_dao->delete_empresa();
//      regresa al router para mostrar todos los empresas
        $this->router();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
