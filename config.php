<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$Capsule = new Capsule;
$Capsule->addConnection([
	
//    'driver'    => 'sqlite',
//    'database'  => __DIR__ . '/database/db.sqlite',
//    'prefix'    => ''	

    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'rashed_talmuri', 
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
		
]);
$Capsule->setAsGlobal();
$Capsule->bootEloquent();
