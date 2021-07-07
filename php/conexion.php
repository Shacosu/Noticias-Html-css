<?php
    class Conexion{
        private static $instance; //Singleton, que solo existe un objeto de la clase.
        private $host;
        private $user;
        private $pass;
        private $bd;
        private $pdo;
        private $charset;

        //Crear el constructor 

        private function __construct(){
            $this->host = "localhost";// localhost->127.0.0.1 = Mi computador
            $this->user = "root";
            $this->pass = "";
            $this->bd = "fakenoticias";//Colocar el nombre de la base de datos
            $this->charset = "utf8mb4";
        }

        //aqui llamo al objeto 
        public static function getInstance()
        {
            //aqui pregunto la variable instance tiene un objeto de esta clase
            if(!self::$instance instanceof self)

            {
                //crea un objeto de esta clase
                self::$instance = new self;
            }
            //si tiene entonces me salto lo de arriba y return el objeto
            return self::$instance;
        }

        //metodo para abrir la conexion
        public function openConnection(){
            $dsn = "mysql:host=".$this->host.";dbname=".$this->bd.";charset=".$this->charset; //"mysql:localhost=;dbname=disenoweb;charset=utf8mb4"
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 0;
        }

        //metodo para usar la conexion
        public function useConnection()
        {
            if($this->pdo != NULL)
                return $this->pdo;
            else 
                return 0;
        }

        //metodo para cerrar la conexion
        public function closeConnection(){
            $this->pdo = null;
        }
    }
?>