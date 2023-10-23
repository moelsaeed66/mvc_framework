<?php

namespace MVC\core;

class helper{
    public static function redirect($path){
        header("location:".BURL.$path);
    }
}
