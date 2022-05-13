<?php
abstract class DB{ 

    private static $conn;

    public static function getConnection(){
        if( self::$conn !== null ){
            
            echo "conncted";
            return self::$conn;
    
        } 
        else{
          
            echo"not";
            self::$conn = new PDO ("mysql:host=localhost;dbname=ducktalk", "root", "root");
            return self:: $conn;
        }
    }
}