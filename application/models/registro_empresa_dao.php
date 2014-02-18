<?php

//  Registro_empresa_dao: ESTA CLASE CONTROLA EL ENVIO Y CONSULTA  DE LA INFORMACION DE LOS USUARIOS 
//  CAPA :MODELO
//  

class Registro_empresa_dao extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY
    function get_all_registro_empresa() {
//      se almacena en la variable $query el resultado de la consulta de todos los registros de la tabla 'registro_empresa'
        $query = $this->db->get('registro_empresa');
//      retorna la respuesta como un  array de array
        return $query->result_array();
        // return $query->result();      RETORNA EL RESULT
        //return $query->row();         RETORNA LA PRIMERA FILA
        //return $query->row_array();   RETORNA LA PRIMERA FILA COMO ARREGLO
        //return $query;                RETORNA LA REPUESTA A LA CONSULTA
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    function get_registro_empresa() {
//      se almacena en la variable $query el resultado de la consulta en la tabla 'registro_empresa' donde 'registro_empresa_id' = $_POST["registro_empresa_id"]   
        $query = $this->db->get_where('registro_empresa', array('registro_empresa_id' => $_POST["registro_empresa_id"]));
//      retorna la respuesta como un  array
        return $query->row_array();
    }

//    FUNCION QUE GUARDA UN USUARIO CON LA INFORMACION DEL $_POST
    function set_registro_empresa() {
//      elimina el campo del boton lo cual prepara el $_POST para ser enviado a la tabla 'usuaio' 
        unset($_POST["mysubmit"]);
        $this->db->insert('registro_empresa', $_POST);
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    function update_registro_empresa() {
//      condicion para modificar el registro_empresa con el dato '$_POST["registro_empresa_id"]' recibido     
        $this->db->where('registro_empresa_id', $_POST["registro_empresa_id"]);
//      elimina el campo del boton y del 'registro_empresa_id' lo cual prepara el $_POST para ser enviado a la tabla 'usuaio'         
        unset($_POST["myGuardar"]);
        unset($_POST["registro_empresa_id"]);
        $this->db->update('registro_empresa', $_POST);
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    function delete_registro_empresa() {
//      condicion para eliminar el registro_empresa con el dato '$_POST["registro_empresa_id"]' recibido   
        $this->db->where('registro_empresa_id', $_POST["registro_empresa_id"]);
        $this->db->delete('registro_empresa');
    }

}
