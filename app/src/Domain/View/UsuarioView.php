<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Leilao da Leila</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/assets/css/Leilao.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/Input.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/Button.css" />
</head>

<body>
    <div class="topnav">
        <h2 class="topnav text">
            Leilão da Leila
        </h2>
    </div>
    <div class="content">
        <form method="post" action="./src/Middleware/UsuarioMiddleware.php">
            <div class="bloco">
                <input placeholder="Usuario" name="username" id="username" class="form-control" required>
                <div class="floater"></div>
            </div>

            <div class="bloco">
                <button class="glow-on-hover" type="submit">Acessar o leilão da Leila</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <p>Desenvolvido por Ieleny</p>
    </div>
</body>

</html>