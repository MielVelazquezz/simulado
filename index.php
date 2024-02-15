<?php 

    include('viacep.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>

        <section class="container">

            <form method="get" action="">

                <label for="cep">Informe seu CEP</label>
                <input type="text" name="cep" id="cepInput" required value="<?php echo $endereco->cep ?? '' ?>" >

                <label for="estado">Estado:</label>
                <input type="text" name="estado" value="<?php echo $endereco->uf  ?? '' ?>">
                
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $endereco->localidade  ?? '' ?>">
                
                <label for="rua">Rua:</label>
                <input type="text" name="rua" value="<?php echo $endereco->logradouro ?? '' ?>">
                
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $endereco->bairro ?? '' ?>">
                
                <button type="submit">Enviar</button>

            </form>

        </section>

    </main>

</body>

</html>
