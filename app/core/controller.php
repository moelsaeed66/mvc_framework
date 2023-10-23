<?php

namespace MVC\core;

class controller{

    public static function view($path,$param){
        extract($param);
        require_once (VIEWS.$path.".php");

    }

    public static function model($model){
        require_once MODELS.$model.'.php';
        return new $model;
    }
}
