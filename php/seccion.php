<?php
    include_once 'conexion.php'; //importo la clase conexion
    include_once '../agregarseccion.html';
    

    class seccion{
    
        //metodo para insertar
        public function insertar(seccion $sec)
        {
            try{
                $this->pdo = Conexion::getInstance();
                $this->pdo->openConnection();
                $res = $this->pdo->useConnection()->prepare("INSERT INTO `seccion`(`id_seccion`, `nombre`, `tipo_de_noticia`) VALUES (?, ?, ?);"); //prepared Statement
                $res->execute([$sec->getid_seccion(),$sec->getnombre(),$sec->gettipodenoticia()]);
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
      //se crean los geter y seter con los datos
        public function getid_seccion(){
            return $this ->id_seccion;
        }        
        public function setid_seccion($id_seccion){
            $this->id_seccion = $id_seccion;
            return;
        }
        public function getnombre(){
            return $this ->nombre;
        }        
        public function setnombre($nombre){
            $this->nombre = $nombre;
            return;
        }
        public function gettipodenoticia(){
            return $this ->tipodenoticia;
        }        
        public function settipodenoticia($tipodenoticia){
            $this->tipodenoticia = $tipodenoticia;
            return;
        }
        

    }
?>

