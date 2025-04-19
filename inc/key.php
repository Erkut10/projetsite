<?php

define('SERVER','mysql:server=localhost;dbname=porsche');
define('LOGIN',"root");
define('PASSWORD','');

try{
    $connexion=new PDO(SERVER,LOGIN,PASSWORD);
} catch (Exception $e){
    echo $e->getMessage();
}

