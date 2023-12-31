<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bank</title>
    <link rel="stylesheet" href="css/cssReset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu-style.css">
</head>
<body>

    <header>
        <div class="logo-container">
            <img src="assets/img/php-logo.png" alt="" srcset="">
            <h1>BANK</h1>
        </div>
    </header>
    <main>
        <div class="main-screen-container">
            <h2>Olá bem vindo ao PHP Bank</h2>
                <div class="user-personal-info">
                    <?php 
                    include 'acessar.php';
                    $user2 = "Denis Fernando";

                    echo '<label for="">CLIENTE: ' . $user2 . '</label>';
                    echo '<label for="">CONTA: 19191919 &nbsp;&nbsp; AGÊNCIA: 19191919</label>';
                    
                    ?>
                    <!-- <label for="">CLIENTE: Fulano</label>
                    <label for="">CONTA: 19191919 &nbsp;&nbsp; AGÊNCIA: 19191919</label> -->
                </div>
            <div class="main-menu-container">
                <div class="main-menu-box">
                    <h2>MENU PRINCIPAL</h2>
                    <?php
                        for ($i = 1; $i <= 4; $i++) {
                            echo '<label for="" class="number-container">' . $i . '</label>';
                        }
                    ?>
                    <div class="option-container">
                        <label for="" class="number-container">1</label>
                        <label for="" class="option-boxes">SALDO</label>
                    </div>
                    <div class="option-container">
                        <label for="" class="number-container">2</label>
                        <label for="" class="option-boxes">DEPÓSITO</label>
                    </div>
                    <div class="option-container">
                        <label for="" class="number-container">3</label>
                        <label for="" class="option-boxes">SAQUE</label>
                    </div>
                    <a href="index.html">
                        <div class="option-container">
                            <label for="" class="number-container">4</label>
                            <label for="" class="option-boxes">SAIR</label>
                        </div>
                    </a>
                </div>
                <div class="screen-container">
                    <div class="balance-container">
                        <h2>SEU SALDO É R$10000</h2>
                    </div>
                    <div class="deposit-container">
                        <h2>Digite a quantia que deseja depositar?</h2>
                        <label for="">R$</label>
                        <label for="">Deposito efetuado com sucesso</label>
                    </div>
                    <div class="withdraw-container">
                        <h2>Escolha ou digite o valor que deseja sacar</h2>
                        <label for="">R$</label>
                        <div class="withdraw-options">
                            <button>$20</button>
                            <button>$40</button>
                            <button>$50</button>
                            <button>$60</button>
                            <button>$70</button>
                            <button>$80</button>
                            <button>$90</button>
                            <button>$100</button>
                        </div>
                        <label for="">Deposito efetuado com sucesso</label>
                    </div>
                </div>
                <div class="numbers-main-container">
                    <div class="numbers-container">
                        <button>1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>4</button>
                        <button>5</button>
                        <button>6</button>
                        <button>7</button>
                        <button>8</button>
                        <button>9</button>
                        <button>0</button>
                        <button>00</button>
                        <button>000</button>
                    </div>
                    <div class="numbers-menu">
                        <button>CANCEL</button>
                        <button>CLEAR</button>
                        <button>ENTER</button>
                        <button></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <label for="">PHP BANK Developed by&nbsp;</label>
        <a href="https://denferoli.github.io/DenisFernandoQATester/">Denis Fernando</a>
    </footer>
</body>
</html>