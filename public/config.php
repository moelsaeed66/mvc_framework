<?php


//define files paths
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT."core".DS);
define("VIEWS",APP."views".DS);
define("CONTROLLERS",APP."controllers".DS);
define("MODELS",APP."models".DS);
define("LIBS",APP."libs".DS);
define("CORE",APP."core".DS);


//define main path
define("BUEL","http://mvc_framework.test/");


//define database constant
define("DB_PASS","");
define("DB_NAME","student");
define("DB_USER","root");
define("DB_HOST","localhost");

include ("../vendor/autoload.php");
$app=new \MVC\core\app();


