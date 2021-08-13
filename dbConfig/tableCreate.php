<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=collective_sports_team;port=3306','root','',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Création de la table team
        $req1 = "CREATE TABLE IF NOT EXISTS collective_sports_team.team(
            idTeam INT NOT NULL AUTO_INCREMENT,
            nameTeam VARCHAR(255),
            stadeTeam VARCHAR(255),
            cityTeam VARCHAR(255),
            postalcodeTeam VARCHAR(255),
            sportTeam VARCHAR(255),
            levelTeam VARCHAR(255),
            logoTeam VARCHAR(255),
            dateCreateMarque TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idTeam));";

        $pdo->exec($req1);
    }
    
    catch (PDOException $e){
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }