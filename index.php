<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Turtle</title>
</head>
<body>
    <div>
        <div>
            <div>
                <form action="proces.php" method="post">
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" placeholder="Digite seu nome"><br>
                    <label for="sobrenome">Sobrenome</label><br>
                    <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome"><br>
                    <label for="cpf">CPF</label><br>
                    <input type="cpf" name="cpf" placeholder="Digite seu CPF"><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="Digite seu Email"><br>
                    <label for="date">Data de Nacimento</label><br>
                    <input type="date" name="date" ><br>
                    <label for="estado">Estado</label> <br>   
                    <select name="estado" id="estado">
                        <option value=""></option>
                    </select>
                    

                    <br>
                    <input type="submit" value="enviar">
                </form>

            </div>
        </div>
    </div>
</body>
</html>