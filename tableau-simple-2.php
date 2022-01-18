<?php

session_start();

// TODO : gérér la position + optimiser le unset
if(isset($_GET["number"])){
    if ($_SESSION["tuile"] == -1){
        $_SESSION["tuile"] = $_GET["number"];
    }else{
        if ($_GET["number"] == $_SESSION["tuile"]){
            
            $pair_random_numbers = $_SESSION["pair_random_numbers"];
            unset($pair_random_numbers[array_search($_GET["number"], $pair_random_numbers)]);
            unset($pair_random_numbers[array_search($_GET["number"], $pair_random_numbers)]); 
            
            $_SESSION["pair_random_numbers"] = $pair_random_numbers;
        }
        $_SESSION["tuile"] = -1;
    }
}

if(isset($_GET["init"])){
    if ($_GET["init"] == true){
        unset($_SESSION['pair_random_numbers']);
    }
}

header("Location:jeux.php");


?>