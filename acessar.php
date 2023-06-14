<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $password = $_POST["password"];
        $user = $_POST["login"];

        if ($password == 123) {
            header("Location: menu.html");
        } else {
            echo "Senha incorreta.";
        };
    };

?>