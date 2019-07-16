<?php
namespace Sts\Models;
use PDO;
/**
 * Description of Conn
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Conn {

    public static $Host = 'localhost';
    public static $User = 'root';
    public static $Pass = '';
    public static $Dbname = 'celke';
    private static $Connect = null;

    private static function conectar() {
        try {

            if (self::$Connect == null)://se a conexao for nula, ele irá fazer a conexão.
                self::$Connect = new PDO('mysql:host=' . self::$Host . ';dbname=' . self::$Dbname, self::$User, self::$Pass);
                return self::$Connect;
            endif;
        } catch (Exception $ex) {
            echo "Mensagem:" . $ex->getMessage();
        }
    }

    public function getConn() {// somente este método irá acessar o 'conectar'
        return self::conectar();
    }

}
