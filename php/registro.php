<?php
    include_once 'conexion.php'; //importo la clase conexion
    include_once '../pages/register.html';
    include_once 'cregistro.php';
    

    class usuario{

        //metodo para insertar
        public function insertar(usuario $usu)
        {
            try{
                $this->pdo = Conexion::getInstance();
                $this->pdo->openConnection();
                $res = $this->pdo->useConnection()->prepare("INSERT INTO `registrou`(`nombre`, `apellido`, `nombre_de_usuario`, `correo_electronico`, `contraseña`) VALUES (?,?,?,?,?);"); //prepared Statement
                $res->execute([$usu->getnombre(),$usu->getapellido(),$usu->getnombre_de_usuario(),$usu->getcorreo_electronico(),$usu->getcontraseña()]);
                return TRUE;   
            }
            catch(PDOException $e)
            {
                error_log($e->getMessage());
                return FALSE;
            }
            finally{
                $this->pdo->closeConnection();
            }
        }

        
        public function getnombre(){
            return $this ->nombre;
        }        
        public function setnombre($nombre){
            $this->nombre = $nombre;
            return;
        }
        public function getapellido(){
            return $this ->apellido;
        }        
        public function setapellido($apellido){
            $this->apellido = $apellido;
            return;
        }
        public function getnombre_de_usuario(){
            return $this ->getnombre_de_usuario;
        }        
        public function setnombre_de_usuario($getnombre_de_usuario){
            $this->getnombre_de_usuario = $getnombre_de_usuario;
            return;
        }
        public function getcorreo_electronico(){
            return $this ->getcorreo_electronico;
        }        
        public function setcorreo_electronico($getcorreo_electronico){
            $this->getcorreo_electronico = $getcorreo_electronico;
            return;
        }
        public function getcontraseña(){
            return $this ->contraseña;
        }        
        public function setcontraseña($contraseña){
            $this->contraseña = $contraseña;
            return;
        }
     


    }
?>