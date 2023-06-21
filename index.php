<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bank</title>
    <link rel="stylesheet" href="css/cssReset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="assets/img/php-logo.png" alt="" srcset="">
            <h1>BANK</h1>
        </div>
    </header>
    <main>
        <div class="login-menu-container">
            <div class="text-container">
                <h2>FAÇA SEU LOGIN</h2>
            </div>
                <form action="acessar.php" method="POST">
                    <input type="text" name="login" placeholder="Nome" minlength="3" maxlength="20" required>
                    <input type="password" name="password" placeholder="Senha" minlength="3" maxlength="10" required>
                    <input type="submit" value="Acessar" id="submit-button">
                </form>
            <div class="forget-password-container">
                <label for="" title="A senha é '123'">Esqueceu sua senha?</label>
            </div>
        </div>
    </main>
    <footer>
        <label for="">PHP BANK Developed by&nbsp;</label>
        <a href="https://denferoli.github.io/DenisFernandoQATester/">Denis Fernando</a>
    </footer>
</body>
</html>