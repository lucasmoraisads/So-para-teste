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
                        <option value="acre">Acre - AC</option>
                        <option value="alagoas">Alagoas - AL</option>
                        <option value="amapa">Amapá - AP</option>
                        <option value="amazonas">Amazonas - AM</option>
                        <option value="baia">Bahia - BA</option>
                        <option value="ceara">Ceará - CE</option>
                        <option value="espirito santo">Espírito Santo - ES</option>
                        <option value="goias">Goiás - GO</option>
                        <option value="maranhao">Maranhão - MA</option>
                        <option value="moto grosso">Mato Grosso - MT</option>
                        <option value="mato grosso sul">Mato Grosso do Sul - MS</option>
                        <option value="minas gerais">Minas Gerais - MG</option>
                        <option value="para">Pará - PA</option>
                        <option value="paraiba">Paraíba - PB</option>
                        <option value="parana">Paraná - PR</option>
                        <option value="pernambuco">Pernambuco - PE</option>
                        <option value="piaui">Piauí - PI</option>
                        <option value="rio de janeiro">Rio de Janeiro - RJ</option>
                        <option value="Rio grande">Rio Grande do Norte - RN</option>
                        <option value="rio grande sul">Rio Grande do Sul - RS</option>
                        <option value="rondonia">Rondônia - RO</option>
                        <option value="roraima">Roraima - RR</option>
                        <option value="santa catarina">Santa Catarina - SC</option>
                        <option value="sao paulo">São Paulo - SP</option>
                        <option value="sergipe">Sergipe - SE</option>
                        <option value="tocantins">Tocantins - TO</option>
                        <option value="distrito federal">Distrito Federal - DF</option>
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