<?php
    include_once 'conexion.php'; //importo la clase conexion
    include_once '../agregarnoticias.html';
    include_once 'cnoticia.php';
    

    class noticias{

        //metodo para insertar
        public function insertar(noticias $noti)
        {
            try{
                $this->pdo = Conexion::getInstance();
                $this->pdo->openConnection();
                $res = $this->pdo->useConnection()->prepare("INSERT INTO `noticias`(`codigo_noticia`, `fuente`, `medio_difucion`, `nombre_autor`, `estado`, `seccion`, `descripcion`) VALUES (?,?,?,?,?,?,?);"); //prepared Statement
                $res->execute([$noti->getcodnoticia(),$noti->getfuente(),$noti->getmediodifucion(),$noti->getnombreautor(),$noti->getestado(),$noti->getseccion(),$noti->getdescripcion()]);
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
        // se crean los geter y seter con lo datos
        public function getcodnoticia(){
            return $this ->codnoticia;
        }        
        public function setcodnoticia($codnoticia){
            $this->codnoticia = $codnoticia;
            return;
        }
        public function getfuente(){
            return $this ->fuente;
        }        
        public function setfuente($fuente){
            $this->fuente = $fuente;
            return;
        }
        public function getmediodifucion(){
            return $this ->mediodifucion;
        }        
        public function setmediodifucion($mediodifucion){
            $this->mediodifucion = $mediodifucion;
            return;
        }
        public function getnombreautor(){
            return $this ->nombreautor;
        }        
        public function setnombreautor($nombreautor){
            $this->nombreautor = $nombreautor;
            return;
        }
        public function getestado(){
            return $this ->estado;
        }        
        public function setestado($estado){
            $this->estado = $estado;
            return;
        }
        public function getseccion(){
            return $this ->seccion;
        }        
        public function setseccion($seccion){
            $this->seccion = $seccion;
            return;
        }
        public function getdescripcion(){
            return $this ->descripcion;
        }        
        public function setdescripcion($descripcion){
            $this->descripcion = $descripcion;
            return;
        }


    }
?>