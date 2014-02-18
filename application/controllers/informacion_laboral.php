<?php

//  Informacion_laboral: ESTA CLASE CONTROLA  LA INFORMACION DE LOS USUARIOS 
//  CAPA : NEGOCIO
//  

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Informacion_laboral extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->model('informacion_laboral_dao');
    }
    
    
    function index(){
        $this->router("create");
    }

//    FUNCION QUE RETORNA UNA VISTA DEPENDIENTE DE $VISTA_ID, ROUTEA LA VISTA
    public function router($vista_id=0) { //$vista_id se inicializa en 0 si no se le envia el parametro al metodo router() 
//      dependiedo de el valor de $vista_id entrega la vista requerida 
//        $this->data['content'] = 'informacion_laboral/informacion_laboral_delete';
//                //      $this->load->view('contenedor',  $this->data);
//                $this->load->view('contenedor', $this->data);
        if (empty($vista_id))
            $this->get_all_informacion_laboral();
        elseif ($vista_id == "delete"){
        $response['content'] = 'informacion_laboral/informacion_laboral_delete';
                $this->load->view('contenedor', $response);
        }  elseif ($vista_id == "update"){
              $response['content'] = 'informacion_laboral/informacion_laboral_update';
                $this->load->view('contenedor', $response);
         
        } elseif ($vista_id == "create"){
        $response['content'] = 'informacion_laboral/informacion_laboral_create';
                $this->load->view('contenedor', $response);
//      entraga el menu de hipervinculos para la navegación 
        } //$this->load->view('informacion_laboral/informacion_laboral_menu');
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY Y EN UN JSON
    public function get_all_informacion_laboral() {
//      consulta al modelo todos los informacion_laborals 
        $lista_informacion_laborals = $this->informacion_laboral_dao->get_all_informacion_laboral();
//      recibe la lista de informacion_laborals como arreglo de arreglos y empaqueta en la repuesta
        $response["lista_informacion_laborals"] = $lista_informacion_laborals;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($lista_informacion_laborals);
         $response['content'] = 'informacion_laboral/informacion_laboral_show_all';
                $this->load->view('contenedor', $response);
       // $this->load->view('informacion_laboral/informacion_laboral_show_all', $response);
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    public function get_informacion_laboral() {
//     consulta al modelo la informacion de un informacion_laboral
        $informacion_laboral = $this->informacion_laboral_dao->get_informacion_laboral();
//      recibe la informacion del informacion_laboral como arreglo y empaqueta en la repuesta
        $response["informacion_laboral"] = $informacion_laboral;
//      codifica los datos en objeto  JSON y lo empaqueta en la repuesta 
//      header("Content-Type:text/javascript");
        $response["json"] = json_encode($informacion_laboral);
//      si la solicitud es echa por el formulario de eliminar entrega esta vista
        if (!empty($_POST["myBuscarDelete"])){
             $response['content'] = 'informacion_laboral/informacion_laboral_delete';
                $this->load->view('contenedor', $response);
          //  $this->load->view('informacion_laboral/informacion_laboral_delete', $response);
//      si la solicitud es echa por el formulario de actualizar entrega esta vista
        } if (!empty($_POST["myBuscarUpdate"])){
          
        $response['content'] = 'informacion_laboral/informacion_laboral_update';
                $this->load->view('contenedor', $response);
        }
//      entraga el menu de hipervinculos para la navegación 
        $this->load->view('informacion_laboral/informacion_laboral_menu');
    }

//    FUNCION QUE CREA UN USUARIO CON LA INFORMACION DEL $_POST
    public function set_informacion_laboral() {
//      ordena al modelo crear un informacion_laboral
        $this->informacion_laboral_dao->set_informacion_laboral();
//      regresa al router para mostrar todos los informacion_laborals
        $this->router();
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    public function update_informacion_laboral() {
//      ordena al modelo modificar un informacion_laboral
        $this->informacion_laboral_dao->update_informacion_laboral();
//      regresa al router para mostrar todos los informacion_laborals
        $this->router();
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    public function delete_informacion_laboral() {
//      ordena al modelo eliminar un informacion_laboral
        $this->informacion_laboral_dao->delete_informacion_laboral();
//      regresa al router para mostrar todos los informacion_laborals
        $this->router();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
