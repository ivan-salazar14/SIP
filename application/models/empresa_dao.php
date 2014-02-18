<?php

//  Empresa_dao: ESTA CLASE CONTROLA EL ENVIO Y CONSULTA  DE LA INFORMACION DE LOS USUARIOS 
//  CAPA :MODELO
//  

class Empresa_dao extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY
    function get_all_empresa() {
//      se almacena en la variable $query el resultado de la consulta de todos los registros de la tabla 'empresa'
        $query = $this->db->get('empresa');
//      retorna la respuesta como un  array de array
        return $query->result_array();
        // return $query->result();      RETORNA EL RESULT
        //return $query->row();         RETORNA LA PRIMERA FILA
        //return $query->row_array();   RETORNA LA PRIMERA FILA COMO ARREGLO
        //return $query;                RETORNA LA REPUESTA A LA CONSULTA
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    function get_empresa() {
//      se almacena en la variable $query el resultado de la consulta en la tabla 'empresa' donde 'empresa_id' = $_POST["empresa_id"]   
        $query = $this->db->get_where('empresa', array('empresa_id' => $_POST["empresa_id"]));
//      retorna la respuesta como un  array
        return $query->row_array();
    }

//    FUNCION QUE GUARDA UN USUARIO CON LA INFORMACION DEL $_POST
    function set_empresa() {
//      elimina el campo del boton lo cual prepara el $_POST para ser enviado a la tabla 'usuaio' 
        unset($_POST["mysubmit"]);
        $this->db->insert('empresa', $_POST);
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    function update_empresa() {
//      condicion para modificar el empresa con el dato '$_POST["empresa_id"]' recibido     
        $this->db->where('empresa_id', $_POST["empresa_id"]);
//      elimina el campo del boton y del 'empresa_id' lo cual prepara el $_POST para ser enviado a la tabla 'usuaio'         
        unset($_POST["myGuardar"]);
        unset($_POST["empresa_id"]);     
        $this->db->update('empresa', $_POST);
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    function delete_empresa() {
//      condicion para eliminar el empresa con el dato '$_POST["empresa_id"]' recibido   
        $this->db->where('empresa_id', $_POST["empresa_id"]);
        $this->db->delete('empresa');
    }

}
