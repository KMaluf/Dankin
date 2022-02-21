<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <?php
            $nome = $_GET['nome'];
            $email = $_GET['email']
            
        ?>
        <form>
            <input type="text" name= "nome">
            <input type="text" name = "email">
            <input type="submit" name = "ação" value="Enviar">
        </form>    
    </body>


</html>