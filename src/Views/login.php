<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - High-Performance</title>
    <link rel="stylesheet" href="/projetoWeb/src/public/assets/css/login.css">
    
</head>
<body class="login-body">
    <div class="login-container">
        <h1 class="titulo-secao">Login de Acesso</h1>
        
        <form class="login-form" method="POST" action="/projetoWeb/dashboard">
            <div class="form-group">
                <label for="email" class="login-label">E-mail:</label>
                <input type="text" id="email" name="email" class="login-input" placeholder="Seu e-mail ou nome de usuário" required>
            </div>
            
            <div class="form-group">
                <label for="password" class="login-label">Senha:</label>
                <input type="password" id="password" name="password" class="login-input" placeholder="Sua senha secreta" required>
            </div>
            
            <button type="submit" class="botao-modal-compra login-button">
                Entrar
            </button>
            
            <div class="recuperar-senha">
                <a href="#" class="rodape-links a">Esqueceu sua senha?</a>
            </div>
        </form>

    </div>
    <?php if (isset($_SESSION['erro_login'])): ?>
            <p style="color:red; margin-top: 15px;">
                <?= $_SESSION['erro_login']; ?>
            </p>
            <?php unset($_SESSION['erro_login']); ?>
        <?php endif; ?>
</body>
</html>