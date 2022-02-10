<?php
	session_start();
	include('connect/conexao_servidor.php');

    $sql = "SELECT * FROM categoria_produto ";

    if (isset($_GET['busca']) && !empty($_GET['busca'])) {
        if ($_GET['campo'] == 'ID_CATEGORIA') {
            $sql .= "WHERE ID_CATEGORIA = " . $_GET['busca'];
        } else {
            $sql .= "WHERE " . $_GET['campo'] . " LIKE '%" . $_GET['busca'] . "%'";
        }
    }


    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <div>teste</div>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portal Produtos</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    	<link href="Página [Editar.Apagar.Visualizar]/css/global.css" type="text/css" rel="stylesheet">
	</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="img/img_icons/logo.png" width="142">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Página inicial</a> </li>
                    <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                    <li><a href="contato.php" class="nav-link">Contato</a></li>
                    <li><a href="sobre_nos.php" class="nav-link">Sobre nós</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-20">
    <div class="page-header">
        <br><h2 class="text-center ml-5">Categoria de Produtos</h2>
        <br><br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="produtos.php" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="busca" placeholder="Procurar..."
                        value="<?= isset($_GET['busca']) ? $_GET['busca'] : '' ?>" >
                    <select class="custom-select" name="campo">
                        <option value="ID_CATEGORIA">ID</option>
                        <option value="NOME_CATEGORIA" selected>Categoria</option>
                        <option value="DESCRICAO_CATEGORIA">Descrição</option>
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr class="text-left">
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td scope="row"><?= $row['ID_CATEGORIA']; ?></td>
                            <td nowrap="nowrap"><?= $row['NOME_CATEGORIA']; ?></td>
                            <td nowrap="nowrap">
                                <?= $row['DESCRICAO_CATEGORIA'] ? 
                                    $row['DESCRICAO_CATEGORIA'] : 
                                    "<small><i>SEM DESCRIÇÃO</i></small>"; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>
