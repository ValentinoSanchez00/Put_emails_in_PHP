<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviar correos</title>
    </head>
    <body>
        <form class="" action="send.php" method="post">
            <label>Correo del destinatario</label>
            <input type="email" name="email"> <br>
            <label>Asunto</label>
            <input type="text" name="subjet"> <br>
            <label>Mensaje</label>
            <input type="text" name="message"> <br>
            <button type="submit" value="" name="send">Enviar</button>
        </form>


    </body>
</html>
