<?php
class Database{
    // utiliza padrão singleton, cujo objetivo é garantir que apenas uma unica instancia de classe seja criada durante a execuç~so do programa , e que essa instancia seja utilizada sempre que nescessario
    private static $instanc = null;

     //Método público que retorna a conexão com o BD
    public static function getconnection(){
        //verifica se a instancia de conexão ainda não foi criada
        if(!self::$instanc){
            $host       ='localhost';
            $db         = 'sistema_usuarios';
            $user       = 'root';
            $password   = '';

            // A conexão usa o driver Mysql (Mysql:) e as informações de host e db
            self::$instanc = new PDO("Mysql:host=$host;dbname=$db",$user, $password);

            //Define o modo de erro para exceções, facilitando a depuração e tratamento do erro
            self::$instanc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instanc;

    }


}



?>