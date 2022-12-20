<?php

class Securite{
    public const COOKIE_NAME="truc";

    public static function secureHTML($chaine){
        return htmlentities($chaine);
    }
    
}