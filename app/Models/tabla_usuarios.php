<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Tabla_usuarios extends Model {
        protected $table = 'usuarios';
        protected $primaryKey = 'id_usuario';
        protected $returnType = 'object';
        protected $allowedFields = [
            'id_usuario', 'estatus_usuario', 'nombre_usuario', 'ap_usuario', 'am_usuario', 
            'sexo_usuario', 'email_usuario', 'password_usuario', 'imagen_usuario', 'id_rol'
        ];
        //===================================================

        public function add_data($data = array()) {
            if(!empty($data)){
               return $this->table($this->table)->insert($data);
            }else{
                return -1;
            }
        }// end create
    }