<?php

//  Informacion_laboral_dao: ESTA CLASE CONTROLA EL ENVIO Y CONSULTA  DE LA INFORMACION DE LOS USUARIOS 
//  CAPA :MODELO
//  

class Informacion_laboral_dao extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

//    FUNCION QUE RETORNA TODOS LOS USUARIOS EN UN ARRAY
    function get_all_informacion_laboral() {
//      se almacena en la variable $query el resultado de la consulta de todos los registros de la tabla 'informacion_laboral'
        $query = $this->db->get('informacion_laboral');
//      retorna la respuesta como un  array de array
        return $query->result_array();
        // return $query->result();      RETORNA EL RESULT
        //return $query->row();         RETORNA LA PRIMERA FILA
        //return $query->row_array();   RETORNA LA PRIMERA FILA COMO ARREGLO
        //return $query;                RETORNA LA REPUESTA A LA CONSULTA
    }

//    FUNCION QUE BUSCA UN USUARIO Y SE LO ENTREGA A LA VISTA PREDETERMINADA  POR EL $_POST
    function get_informacion_laboral() {
//      se almacena en la variable $query el resultado de la consulta en la tabla 'informacion_laboral' donde 'informacion_laboral_id' = $_POST["informacion_laboral_id"]   
        $query = $this->db->get_where('informacion_laboral', array('informacion_laboral_id' => $_POST["informacion_laboral_id"]));
//      retorna la respuesta como un  array
        return $query->row_array();
    }

//    FUNCION QUE GUARDA UN USUARIO CON LA INFORMACION DEL $_POST
    function set_informacion_laboral() {
//      elimina el campo del boton lo cual prepara el $_POST para ser enviado a la tabla 'usuaio' 
        unset($_POST["mysubmit"]);
        $this->db->insert('informacion_laboral', $_POST);
    }

//    FUNCION QUE MODIFICA UN USUARIO CON LA INFORMACION DEL $_POST
    function update_informacion_laboral() {
//      condicion para modificar el informacion_laboral con el dato '$_POST["informacion_laboral_id"]' recibido     
        $this->db->where('informacion_laboral_id', $_POST["informacion_laboral_id"]);
//      elimina el campo del boton y del 'informacion_laboral_id' lo cual prepara el $_POST para ser enviado a la tabla 'usuaio'         
        unset($_POST["myGuardar"]);
        unset($_POST["informacion_laboral_id"]);     
        $this->db->update('informacion_laboral', $_POST);
    }

//    FUNCION QUE ELIMINA UN USUARIO CON LA INFORMACION DEL $_POST
    function delete_informacion_laboral() {
//      condicion para eliminar el informacion_laboral con el dato '$_POST["informacion_laboral_id"]' recibido   
        $this->db->where('informacion_laboral_id', $_POST["informacion_laboral_id"]);
        $this->db->delete('informacion_laboral');
    }

}
