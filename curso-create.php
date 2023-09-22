<?php
    $nomeCurso = "";
    $dataCadastro = "";
    $descricaoCurso = "";
    $imagemCurso = "";
    $flag_msg = null;
    $msg = "";

    if (isset($_POST["enviar"])) {
        try {
            require('connection.php');

            $dataCadastro = $_POST["dataCadastro"];
            $nomeCurso = $_POST["nomeCurso"];
            $descricaoCurso = $_POST["descricaoCurso"];
            $imagemCurso = $_POST["imagemCurso"];
            
            if (empty($_POST["dataCadastro"]) || 
                empty($_POST["nomeCurso"]) || 
                empty($_POST["descricaoCurso"]) || 
                empty($_POST["imagemCurso"])) {

                $flag_msg = false;
                $msg = "Dados incompletos, preencha o formulário corretamente!";
            } else {
                $stmt = $conn->prepare("INSERT INTO cursos (nome, descricao, imagem, dataCadastro) VALUES (:nomeCurso, :descricaoCurso, :imagemCurso, :dataCadastro)");
                
                $stmt->bindParam(':nomeCurso', $nomeCurso);
                $stmt->bindParam(':descricaoCurso', $descricaoCurso);
                $stmt->bindParam(':imagemCurso', $imagemCurso);
                $stmt->bindParam(':dataCadastro', $dataCadastro);
                
                $stmt->execute();

                $flag_msg = true;
                $msg = "Curso cadastrado com sucesso!";
                $nomeCurso = "";
                $descricaoCurso= "";
                $imagemCurso = "";
                $dataCadastro = "";
            }
        } catch (PDOException $e) {
            $flag_msg = false;
            $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
        }

        $conn = null;
    } 
?>

<?php require_once "header_inc.php"; ?>

<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Cadastrar Curso</h1>
    <hr class="my-3">
    <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que
        iremos responder o mais breve possível.</p>
</div>
<div class="container">
    <?php 
    if (!is_null($flag_msg)) {
      if ($flag_msg) {
        echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
      }else{
        echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
      }
    }
  ?>

    <form method="post">
        <div class="form-group">
            <label for="dataCadastro">Data de Cadastro:<br></label>
            <input type="date" class="form-control" id="dataCadastro" name="dataCadastro" value="<?= $dataCadastro ?>"
                required>

        </div>

        <div class="form-group">
            <label for="nomeCurso">Nome do Curso:</label>
            <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" value="<?= $nomeCurso ?>" required>

        </div>

        <div class="form-group">
            <label for="descricaoCurso">Descrição do Curso:</label>
            <textarea class="form-control" id="descricaoCurso" name="descricaoCurso" rows="5"
                required><?= $descricaoCurso ?></textarea>

        </div>

        <div class="form-group">
            <label for="imagemCurso">URL da Imagem:</label>
            <input type="text" class="form-control" id="imagemCurso" name="imagemCurso" value="<?= $imagemCurso ?>"
                required>

        </div>
        <br>
        <div class="mb-4">
            <button type="submit" class="btn btn-primary mr-2" name="enviar">Cadastrar Curso</button>
            <a href="curso-create.php"><button type="button" class="btn btn-primary" name="limpar">Limpar</button></a>
        </div>
    </form>

</div>


<?php require_once "footer_inc.php"; ?>