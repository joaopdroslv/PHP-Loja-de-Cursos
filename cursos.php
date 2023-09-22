<?php 
    require_once "header_inc.php";

    require "connection.php";

    require "classes/Curso.php";

    $sql = "SELECT * FROM cursos ORDER BY id ";

    $stmt = $conn->query($sql);
    $curso = $stmt->fetchAll(PDO::FETCH_CLASS,"Curso"); 
?>

<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Cursos</h1>
    <hr class="my-3">
    <p class="lead">Conheça os cursos disponíveis em nossa plataforma.</p>
</div>

<br />

<?php foreach ($curso as $cursos) { ?>

<div class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?= $cursos->getNome(); ?></h2>
            <p class="lead"><?= $cursos->getDescricao(); ?></p>
            <p class="lead">
                <a href="curso-show.php?id=<?= $cursos->getIdCurso(); ?>"><button type="button"
                        class="btn btn-primary btn-lg px-4 me-md-2">Saiba mais</button></a>
            </p>
        </div>
        <div class="col-md-5">
            <figure class="figure">
                <img src="<?= $cursos->getImagem(); ?>" class="figure-img img-fluid rounded"
                    alt="<?= $cursos->getNome(); ?>">
            </figure>
        </div>
    </div>
    <hr class="featurette-divider">
</div>

<?php } ?>

<?php require_once "footer_inc.php"; ?>