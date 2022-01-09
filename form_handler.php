<?php

if(isset($_POST['submit'])){
    pasval();
    echo $_POST['email'];
    echo "<br>";
    if(!empty($_POST['gender'])){
        echo $_POST['gender'];
    }
    echo "<br>";
    if(!empty($_POST['color'])){
        foreach($_POST['color'] as $colors){
            echo $colors." ";
        }
    }else{
        echo "“No favorite color!”.";
    }
    echo "<br>"."account registered";
}else{
    header("location:index.html");
}

function pasval(){
    if(strlen($_POST['password'])<8 || strlen($_POST['password'])>16){
        header("location:index.html?passwordShouldBeBetween8To16Characters");
    }
}

?>