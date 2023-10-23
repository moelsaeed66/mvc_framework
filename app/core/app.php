<?php

namespace MVC\core;
class app{
    private $controllers;
    private $methods;
    private $params;

    public function __construct(){
        $this->getUrl();
        $this->render();

    }
    private function getUrl(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url=explode("/",$_SERVER['QUERY_STRING']);
            //get controller
            $this->controllers=isset($url[0])?$url[0]."controller":"homecontroller";
            //get method
            $this->methods=isset($url[1])?$url[1]:"index";
            //get params
            unset($url[0],$url[1]);
            $this->params=array_values($url);

        }else{
            $this->controllers="homecontroller";
            $this->methods="index";
            $this->params=[];
        }
    }

    private function render(){
        $controller="MVC\controllers\\".$this->controllers;
        if(class_exists($controller)){
            $controller=new $controller;
            if(method_exists($controller,$this->methods)){
                call_user_func_array([$controller,$this->methods],$this->params);
            }else{
                echo "this method: ".$this->methods." not exist";
            }
        }else{
            echo "this class: ".$this->controllers." not exist";
        }

    }


}
