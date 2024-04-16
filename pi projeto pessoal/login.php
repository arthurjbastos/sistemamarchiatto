<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2> 
            
            <!--O ADMIN PADRÃO DEFINIDO MANUALMENTE 
            NO PHPMYADMIN É USUÁRIO: adminteste SENHA: 123-->

            <form action="php/logar.php" method="POST">
                <div class="input-group">
                    <label for="username">Usuário:</label>
                    <input type="text" id="inputusername" name="usuariologin" placeholder="Digite seu usuário"required>
                </div>
                <div class="input-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="inputpassword" name="senhalogin" placeholder="Digite sua senha" required>
                </div>
                <button type="submit">Acessar</button>
            </form>
        </div>
    </div>
</body>
</html>
