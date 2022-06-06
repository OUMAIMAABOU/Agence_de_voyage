<?php
class cookies{
    public static function set($type,$message){
        setcookie($type,$message,time()+3,"/");
    }
}