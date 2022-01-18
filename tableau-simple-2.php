<?php

session_start();

// TODO : gérér la position + optimiser le unset
if(isset($_GET["number"])){
    $number = $_GET["number"];
    $tuile = $_SESSION["tuile"];

    if ($tuile == -1){
        $tuile = $number;
    }else{
        if ($number == $tuile){
            
            $pair_random_numbers = $_SESSION["pair_random_numbers"];
            unset($pair_random_numbers[array_search($number, $pair_random_numbers)]);
            unset($pair_random_numbers[array_search($number, $pair_random_numbers)]); 
            
            $_SESSION["pair_random_numbers"] = $pair_random_numbers;
        }
        $tuile = -1;
    }
    $_GET["number"] = $number;
    $_SESSION["tuile"]= $tuile;

}


if(isset($_GET["init"])){
    if ($_GET["init"] == true){
        unset($_SESSION['pair_random_numbers']);
    }
}

header("Location:jeux.php");


?>