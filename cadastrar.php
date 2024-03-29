<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="first-content">
                <div class="first-colunn">
                    <h2 class="tittle"><i class="fa-solid fa-right-to-bracket"></i>Cadastro</h2>
                    <i class="fa-solid fa-heart"></i>
                    <div class="form">
                        <input type="text" placeholder="Nome do Usuário">
                        <input type="email" id="email" placeholder="Digite seu Email">
                        <input type="password" id="senha" placeholder=" Crie uma Senha">
                        <input type="submit" value="Entrar" onclick="cadastro()">
                    </div>
                    <button class="btn-primary" onclick="window.location.href = 'login.php'">Voltar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
