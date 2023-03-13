<?php
//include_once("../../connection.php");
class bernaDAO{

    public static function getLogInfo($mail){
        
        include_once("connection.php");
        $stmt3 = $connexio ->prepare("SELECT ID, mail, user_password FROM usuarios WHERE mail=?");
        $stmt3->bind_param("s", $mail);
        $stmt3->execute();
        $result = $stmt3->get_result();

        $clienteDB = $result->fetch_assoc();

        
        $connexio ->close();
        return $clienteDB;
    }

    public static function register($mail, $password){
        include_once("connection.php");
       // $con = database::connect();
        $safePassword = password_hash($password, PASSWORD_BCRYPT);
        // $stmt = $connexio ->prepare("INSERT INTO usuarios(`mail`,`user_password`) VALUES ('$mail', '$safePassword')");
        
        $insert = $connexio -> query("INSERT into usuarios VALUES ( null,'$mail','$safePassword')");
        // $insert->execute();
    }
}

?>