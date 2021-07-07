<?php
    include_once 'conexion.php'; //importo la clase conexion
    include_once '../enviarnoticia.html';
    

    class enviar{
    
        //metodo para insertar
        public function insertar(enviar $nn)
        {
            try{
                $this->pdo = Conexion::getInstance();
                $this->pdo->openConnection();
                $res = $this->pdo->useConnection()->prepare("INSERT INTO `mensajes`(`noticias`) VALUES (?);"); //prepared Statement
                $res->execute([$nn->get_enviarnoti()]);
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
        public function get_enviarnoti(){
            return $this ->enviarnoti;
        }        
        public function set_enviarnoti($enviarnoti){
            $this->enviarnoti = $enviarnoti;
            return;
        }
       

    }
?>

