<?php 
    require "connection.php";

    require "classes/Curso.php";

    $sql = "SELECT * FROM cursos ORDER BY id ";
    
    $stmt = $conn->query($sql);
    $curso = $stmt->fetchAll(PDO::FETCH_CLASS,"Curso");

    require_once "header_inc.php";
?>



<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Gerenciamento de Cursos</h1>
    <hr class="my-3">
    <p class="lead">Permite a inclusão, edição e exclusão dos cursos exibidos na página de cursos.</p>
</div>

<div class="container">
    <a class="btn btn-success" href="curso-create.php">Criar Novo Curso</a>
    <p></p>
    <table class="table table-bordered">
        <tr class="table-success text-center">
            <th>#</th>
            <th>Data Cadastro</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($curso as $cursos) { ?>
        <tr class="text-center">
            <td class="table-light" style="width:5%"><?= $cursos->getIdCurso(); ?></td>
            <td class="table-light" style="width:15%"><?= $cursos->getDataCadastro(); ?></td>
            <td class="table-light" style="width:25%"><?= $cursos->getNome(); ?></td>
            <td class="table-light" style="width:25%"><?= $cursos->getDescricao(); ?></td>
            <td class="table-light" style="width:25%">
                <img src="<?= $cursos->getImagem(); ?>" alt="Course Image" style="max-width: 100px; max-height: 100px;">
            </td>
            <td class="table-light" style="width:15%">
                <a href="curso-edit.php?id=<?= $cursos->getIdCurso(); ?>"><button type="button"
                        class="btn btn-primary">Editar</button></a>
                <a href="curso-destroy.php?id=<?= $cursos->getIdCurso(); ?>"><button type="button"
                        class="btn btn-danger">Excluir</button></a>
            </td>
        </tr>

        <?php } ?>
    </table>
</div>

<?php require_once "footer_inc.php"; ?>