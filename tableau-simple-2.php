<?php

session_start();

// TODO : gérér la position + optimiser le unset
if(isset($_GET["number"]) && isset($_GET["index"])){
    $number = $_GET["number"];
    $index = $_GET["index"];

    $tuile = $_SESSION["tuile"];

    if ($tuile["number"] == -1){
        $tuile["number"] = $number;
        $tuile["index"] = $index;
    }else{
        if ($number == $tuile["number"] && $index !=  $tuile["index"]){
            
            $pair_random_numbers = $_SESSION["pair_random_numbers"];
            unset($pair_random_numbers[array_search($number, $pair_random_numbers)]);
            unset($pair_random_numbers[array_search($number, $pair_random_numbers)]); 
            
            $_SESSION["pair_random_numbers"] = $pair_random_numbers;
        }
        $tuile["number"] = -1;
        $tuile["index"] = 0;
    }
    //$_GET["number"] = $number;
    $_SESSION["tuile"] = $tuile;

}

if(isset($_GET["init"])){
    if ($_GET["init"] == true){
        unset($_SESSION['pair_random_numbers']);
    }
}

header("Location:jeux.php");


?>