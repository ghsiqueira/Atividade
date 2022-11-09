<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página</title>
</head>
<body>
    <h1>Informações do Usuário</h1>
    <section>
        <img src="<?=$value['img']?>">
        <p>Email: <?=$value['User'] ?></p>
        <p>Nome:<?=$value['name'] ?></p>
        <p>CPF:<?=$value['cpf'] ?></p> <br>
        <h2>Insira os numeros que deseja saber</h2>
        <form action="validacao.php" method="get">
            <label>Raiz Quadrada:</label><br>
            <input type="number" name="A" id=""><br>
            <label>Poteciação:</label><br>
            <input type="number" name="B" id=""><br>
            <button type="submit">Calcular</button>
        </form>                     
    </section>
</body>
</html>