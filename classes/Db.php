<?php
abstract class DB{ // abstract om niet meer new te gebruiken dat helpen om veel studenten toe te voegen 
    // je kunt geen nieuwe objecten maken 
    private static $conn;

    public static function getConnection(){
        if( self::$conn !== null ){
            // er is een connectie (connection found)
            echo "conncted";
            return self::$conn;
    
        } // slef kun je vergelijken met this maar hier kan je this niet gebruiken omdat je geen object, geen new hebt
        else{
            // no connection found 
            echo"not";
            self::$conn = new PDO ("mysql:host=localhost;dbname=ducktalk", "root", "root");
            return self:: $conn;
        }
    }
}