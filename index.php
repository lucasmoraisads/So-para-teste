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
                        <option value="">Selecione seu Estado</option>
                        <option value="Acre - AC">Acre - AC</option>
                        <option value="Alagoas">Alagoas - AL</option>
                        <option value="Amapá - AP">Amapá - AP</option>
                        <option value="Amazonas - AM">Amazonas - AM</option>
                        <option value="Bahia - BA">Bahia - BA</option>
                        <option value="Ceará - CE">Ceará - CE</option>
                        <option value="Espírito Santo - ES">Espírito Santo - ES</option>
                        <option value="Goiás - GO">Goiás - GO</option>
                        <option value="Maranhão - MA">Maranhão - MA</option>
                        <option value="Mato Grosso - MT">Mato Grosso - MT</option>
                        <option value="Mato Grosso do Sul - MS">Mato Grosso do Sul - MS</option>
                        <option value="Minas Gerais - MG">Minas Gerais - MG</option>
                        <option value="Pará - PA">Pará - PA</option>
                        <option value="Paraíba - PB">Paraíba - PB</option>
                        <option value="Paraná - PR">Paraná - PR</option>
                        <option value="Pernambuco - PE">Pernambuco - PE</option>
                        <option value="Piauí - PI">Piauí - PI</option>
                        <option value="Rio de Janeiro - RJ">Rio de Janeiro - RJ</option>
                        <option value="Rio Grande do Norte - RN">Rio Grande do Norte - RN</option>
                        <option value="Rio Grande do Sul - RS">Rio Grande do Sul - RS</option>
                        <option value="Rondônia - RO">Rondônia - RO</option>
                        <option value="Roraima - RR">Roraima - RR</option>
                        <option value="Santa Catarina - SC">Santa Catarina - SC</option>
                        <option value="São Paulo - SP">São Paulo - SP</option>
                        <option value="Sergipe - SE">Sergipe - SE</option>
                        <option value="Tocantins - TO">Tocantins - TO</option>
                        <option value="Distrito Federal - DF">Distrito Federal - DF</option>
                    </select> <br>

                    <label for="cidade">Cidade</label> <br>
                    <input type="text" name="cidade" placeholder="Cidade">
                    

                    <br>
                    <input type="submit" value="enviar">
                </form>

            </div>
        </div>
    </div>
</body>
</html>