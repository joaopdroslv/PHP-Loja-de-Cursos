<?php 
    if (isset($_GET['id'])) {
        require "connection.php";

        require "classes/Curso.php";

        $id = $_GET['id'];
        $lida = true;

        $sql = "SELECT * FROM cursos WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Curso');
        $curso = $stmt->fetch();

    } else {
        header("location: curso-list.php");

        exit;
    }

    require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Curso de <?= $curso->getNome(); ?></h1>
    <hr class="my-3">
    <p class="lead">Ver detalhes do curso.</p>
</div>

<div class="container">
    <a class="btn btn-primary" href="cursos.php">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Data Cadastrada:</strong>
                <?= date('d/m/Y', strtotime($curso->getDataCadastro())); ?>
            </div>
            <div class="form-group">
                <strong>Nome: </strong>
                <?= $curso->getNome(); ?>
            </div>
            <div class="form-group">
                <strong>Descrição: </strong>
                <?= $curso->getDescricao(); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <img src="<?= $curso->getImagem(); ?>" alt="Course Image" style="max-width: 100%; max-height: 400px;">
            </div>
        </div>
    </div>
</div>

<?php require_once "footer_inc.php"; ?>