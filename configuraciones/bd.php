<?php

class BD
{
    public static $instancia = null;

    public static function crearInstancia()
    {
        // Conexión a base de datos
        if ( !isset(self::$instancia) ) {
            
            /*controlar errores*/ 
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            //                                                      nombre db   user password
            self::$instancia = new PDO('mysql:host=localhost;dbname=diplomas', 'root', '', $opciones);
            echo "conectado...";
        }
        return self::$instancia; //Returnar null si no se conecta a la DB

    }
}

?>