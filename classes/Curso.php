<?php
    class Curso {
        private int $id;
        private string $nome;
        private string $descricao;
        private string $dataCadastro;
        private string $acao;
        private string $imagem;

        public function getIdCurso(): int
        {
            return $this->id;
        }

        public function setIdCurso(int $id): void
        {
            $this->id = $id;
        }

        public function getDataCadastro(): string
        {
            return $this->dataCadastro;
        }

        public function setDataCadastro(string $dataCadastro): void
        {
            $this->dataCadastro = $dataCadastro;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function setNome(string $nome): void 
        {
            $this->nome = $nome;
        }

        public function getDescricao(): string
        {
            return $this->descricao;
        }

        public function setDescricao(string $descricao): void
        {
            $this->descricao = $descricao;
        }

        public function getAcao(): string
        {
            return $this->acao;
        }

        public function setAcao(string $acao): void 
        {
            $this->acao = $acao;
        }

        public function getImagem(): string
        {
            return $this->imagem;
        }

        public function setImagem(string $imagem): void
        {
            $this->imagem = $imagem;
        }
    }
?>