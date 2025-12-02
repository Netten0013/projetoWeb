<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - High-Performance</title>

    <link rel="stylesheet" href="/projetoWeb/src/public/assets/css/dashboard.css">
</head>

<body class="dashboard-body">

    <!-- TOPBAR -->
    <header class="topbar">
        <h1>Dashboard</h1>

        <div class="user-info">
            <span>Admin</span>
            <img src="https://i.pravatar.cc/35" alt="avatar" class="avatar">
        </div>
    </header>

    <div class="dashboard-main-container">
        
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="logo">AdminPanel</div>

            <nav class="menu">
                <a href="index.php" class="menu-item active">Dashboard</a>
                <a href="carros.php" class="menu-item">Carros</a>
                <a href="usuarios.php" class="menu-item">Usuários</a>
            </nav>
        </aside>

        <!-- CONTEÚDO -->
        <main class="dashboard-content">

            <h1 class="dashboard-titulo">Visão Geral do Sistema</h1>
            
           
            <!-- GERENCIAMENTO DE CARROS -->
            <section id="gerenciar-carros" class="dashboard-section">
                <h2 class="secao-subtitulo">Gerenciamento de Carros</h2>
                
                <button class="botao-acao">+ Adicionar Novo Carro</button>
                
                <div class="tabela-container">
                    <table class="tabela-dados">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Ano</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Ferrari 488 GTB</td>
                                <td>2022</td>
                                <td>R$ 2.1M</td>
                                <td>
                                    <a href="#" class="action-link">Editar</a> 
                                    | 
                                    <a href="#" class="action-link delete">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Lamborghini Huracán</td>
                                <td>2021</td>
                                <td>R$ 1.8M</td>
                                <td>
                                    <a href="#" class="action-link">Editar</a> 
                                    | 
                                    <a href="#" class="action-link delete">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- GERENCIAMENTO DE USUÁRIOS -->
            <section id="gerenciar-usuarios" class="dashboard-section">
                <h2 class="secao-subtitulo">Gerenciamento de Usuários</h2>
                
                <button class="botao-acao">+ Adicionar Novo Usuário</button>

                <div class="tabela-container">
                    <table class="tabela-dados">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>101</td>
                                <td>João Silva</td>
                                <td>joao@mail.com</td>
                                <td>Cliente</td>
                                <td>
                                    <a href="#" class="action-link">Editar</a> 
                                    | 
                                    <a href="#" class="action-link delete">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Maria Admin</td>
                                <td>maria@admin.com</td>
                                <td>Admin</td>
                                <td>
                                    <a href="#" class="action-link">Editar</a> 
                                    | 
                                    <a href="#" class="action-link delete">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

    <footer class="rodape">
        <p>&copy; 2025 High-Performance Admin. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
