<?php

require_once("config.php");

$result = null;

//Conecta
try{

//Drop BD
$con = new PDO("mysql:host=$host", $user, $pass);
$motor = $con->prepare("DROP DATABASE $bd");
$motor->execute();
$con = null;

//echo '<p>Dropped</p><hr>';     

//Create BD
$con = new PDO("mysql:host=$host", $user, $pass);
$motor = $con->prepare("CREATE DATABASE $bd");
$motor->execute();
$con = null;

//echo '<p>bd criada</p><hr>';

//Open BD
$con = new PDO("mysql:dbname=$bd;host=$host", $user, $pass);

//Tables:

//Utilisateurs
$sql = "CREATE TABLE Utilisateurs(
        code_util  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nom        VARCHAR(30),
        courriel   VARCHAR(30),
        nomUtil    VARCHAR(30),
        mp         VARCHAR(100),
        avatar     VARCHAR(250),
        UNIQUE (nomUtil)
        )";

$motor = $con->prepare($sql);
$motor->execute();

//echo '<p>Tabela user ok</p><hr>';

//Categories

$sql = "CREATE TABLE Categories(
        code_categ      INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        description     VARCHAR(30)
        )";

$motor = $con->prepare($sql);
$motor->execute();

//echo '<p>Tabela catego criada</p><hr>';


//Films
$sql = "CREATE TABLE Films(
        code_film       INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        titre           VARCHAR(30),
        realisateur     VARCHAR(30),
        description     TEXT(500),
        code_categ      INT NOT NULL,
        duree           INT,
        prix            FLOAT,
        image           VARCHAR(250),
        preview         VARCHAR(250),
        FOREIGN KEY(code_categ) REFERENCES categories(code_categ) ON DELETE CASCADE
        )";

$motor = $con->prepare($sql);
$motor->execute();

//echo '<p>Tabela films criada</p><hr>';

//Orders
$sql = "CREATE TABLE Commandes(
        code_commandes  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        code_util       INT NOT NULL,
        code_film       INT NOT NULL,
        date_commande   DATE,
        FOREIGN KEY(code_util) REFERENCES utilisateurs(code_util) ON DELETE CASCADE,       
        FOREIGN KEY(code_film) REFERENCES films(code_film) ON DELETE CASCADE
        )";

$motor = $con->prepare($sql);
$motor->execute();
$con = null;

//echo '<p>Tabela commande ok</p><hr>';
}
catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>