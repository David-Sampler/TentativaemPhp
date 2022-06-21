<?php

include('./usuario.php');
include('./reclamacoes.php');
require_once "./src/connection.php";

$user = new usuario(990888999, "David", 19, "98982392");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <header>
        <h1 style="text-align:center">

        </h1>
    </header>
    
    <div class="formulario">
    <h1 style="text-align: center">Reclamações</h1>
        <form action="/action_page.php">
            <label for="fname">Insira Seu cpf</label>
            <input type="text" id="fname" name="firstname" placeholder="cpf">

            <label for="lname">Nome</label>
            <input type="text" id="lname" name="lastname" placeholder="Nome completo">

            <label for="type">TIPO</label>
            <select id="type" name="type">
                <option value="ANIMAIS">ANIMAIS</option>
                <option value="COMIDAS">COMIDAS</option>
                <option value="OUTROS">OUTROS</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>



<body>

</body>

</html>