<?php
    include('../session.php');

    if($_SESSION['permissaoUsuario'] != 's'){
        header('Location: ../index.php');
        exit;
    }
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="dashboard.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>

<header>
        <!-- BARRA DE MENU -->
        <nav>
            <!-- LOGO -->
            <a href="../index.php" class="" class="logo">
                <!-- Game Vault -->
                <img src="../IMG/logo.png" alt="">
            </a>

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            

            <!-- ITEMS DO MENU -->
            <ul class="nav-list">
                <li>Jogos</li>
                <li><a href="dashboard.php">Ver dados</a></li>
                <li><a href="inserir/inserir.php">Inserir dados</a></li>
                <li><a href="deletar/deletar.php">Deletar dados</a></li>
                <li><a href="atualizar/atualizar.php">Atualizar dados</a></li>
                <li><a href="ver_produtos/verProdutos.php">Ver Items</a></li>
                <li><a href="inserir_produto/inserirProduto.php">Novo item</a></li>
                <li><a href="atualizar_produto/atualizarProduto.php">Atualizar produto</a></li>
                <li><a href="deletar_produto/deletar.php">Deletar produto</a></li>
                <!-- <li><i class="bi bi-cart4"></i></li> -->
                <li><a href="../login/login.php"><i class="bi bi-box-arrow-in-right"></i></a></li>
            </ul>
        </nav>
        <script src="../mobile.js"></script>
    </header>

    <section>
        <center>
            <?php

            include('../login/conexao.php');

            $sql = "SELECT * FROM tblogin";
            $resultado = mysqli_query($conexao, $sql);

            echo '<table>
                <th colspan="5">Listagem de usuários</th>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>';

            while($reg = mysqli_fetch_array($resultado))
            {
                echo '<tr>
                        <td>'.$reg['id'].'</td>
                        <td>'.$reg['nome'].'</td>
                        <td>'.$reg['dt_nasc'].'</td>
                        <td>'.$reg['email'].'</td>
                        <td>'.$reg['senha'].'</td>
                    </tr>';
            }

            echo '</table>';
            mysqli_close($conexao);
            ?>


    </section>
    
</body>
</php>