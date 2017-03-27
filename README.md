##FAIRE DES APPELS A DES FICHIER EXTERIEUR DE PUBLIC##

#NOTE:


-Architecture:


-web ----------------- |-css
                       |-js
                       |-index.php    ------> Autoloader <?php
                                                        require '../app/Autoloader.php';
                                                        ?>

-app ------- |----------------------> Tables|
             |-Autoloader.php               |- Article.php
             |-Database.php
             |-App.php


-config----------------|-config.php             


-pages ------- |-home.php
               |-template -----------|
               |                     |-Default.php
               |-single.php

-sass---| 
        |-Style.scss

-README.MD
-sassScript.bat
-New_app.sublime-workspace

##PDO

//Conexion mSQL

$pdo = new PDO('mysql:dbname=newapp;host=localhost;charset=UTF8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->exec('INSERT INTO articles SET titre="mon titre", date="'.date('Y-m-d H:i:s').'"');

echo "ok c'\est bon";

///////////////////////////////////////////////////////////////////////////////

##PDO afficher Article
<?php
$statement = $pdo->query('SELECT * FROM articles');
$datas =$statement->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($datas as $post): ?>
    <li>
        <a href="index.php?p=article&id=<?= $post->id;?><?=$post->titre;?"></a>
    </li>
<?pfp endforeach; ?>

////////////////////////////////////////////////////////////////////////////

*
L'objectif es de mettre des articles dans une base de données, 
Et de les chargés et les mettre en formes automatiquements, et avoir une mains facile sur les modifications. *


/////////////////////////////////////////////////////////////////////////////

Class de tables 

Catégoriser des articles a l'aide d'ID dans la Base de données.

LEFT JOIN permet de lié une colonne as un table
#exemple : "SELECT
            FROM 
            LEFT JOIN
            ON "


DYSIGNE PATHERM \\ Manière de codage



instancié une class une seul fois dans App/Config.php




##Dossier demo :




CarFactory::getCar()



Class de Car Factory 
<?php



class CarFactory{
  public static function getCar($type){
  $type = ucfirst($type);
  $class_name = "Car$type" //Car4x4
  return new $class_name();


  }
}

l'appelle :
$voiture1 = CarFactory::getCar('4x4'); // reponse Car4x4
