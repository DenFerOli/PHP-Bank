<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $password = $_POST["password"];
        $user = $_POST["login"];

        if ($password == 123) {
            header("Location: menu.php");
        } else {
            echo "<h3>Seu login ou senha estão incorretos.</h3><br>";
            echo '<button><a href="index.html">Voltar.</a></button><br>';
        };
    };

?> 