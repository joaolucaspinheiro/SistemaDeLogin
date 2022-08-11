<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clouth High</title>
    <link rel="icon" href="../Favicon/favicon-16x16.png">
    <link rel="stylesheet" href="../Estilo/style.css">
</head>

<body>

    <div id="area">
        <form id="formulario" action="acesso.php" method="post" autocomplete="off" >
            <fieldset>
                <legend> Fazer login </legend>
                <label for="username" class="username"> Usuario:</label> 
                <br/>

                <input class="campo_login" type="text" name="login" id="username" /> 
                <label for="password" class="password"> Senha: </label>

                <input class="campo_senha" type="password" name="senha" id="password" /><br />
                <input type="submit" value="Acessar" id="botao" class="btn_submit" />
            </fieldset>




        </form>
    </div>
</body>

</html>