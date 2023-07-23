<?php 

function PageWorker($query) {
    $homeArray = ["home", "Home","Index","index"];
    if(in_array($query, $homeArray)) {
        require "home.php";
    } else { 
        if(file_exists("core/".$query.".php")){ 
            
            require $query.".php"; 
        } else {
            require "404.php"; 
        }
    }
}
?>