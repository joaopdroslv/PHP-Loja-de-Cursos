-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/09/2023 às 03:38
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojacursos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `mensagem` text NOT NULL,
  `tipo` text NOT NULL,
  `data` datetime NOT NULL,
  `lida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `mensagem`, `tipo`, `data`, `lida`) VALUES
(2, 'JOÃO PEDRO DA SILVA', 'joaopedro@gmail.com', 'Como faço para me inscrever no curso de Laravel?', 'Dúvida', '0000-00-00 00:00:00', 1),
(3, 'YASMIN DAINEZE', 'yasmindaineze@gmail.com', 'Poderiam adicionar um curso de Javascript também!', 'Sugestão', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `dataCadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `descricao`, `imagem`, `dataCadastro`) VALUES
(12, 'Python', 'Entre no mundo da programação de forma envolvente e eficaz! Este curso abrangente apresenta a linguagem Python de maneira acessível, abordando desde noções básicas até técnicas avançadas de desenvolvimento de software. Aprenda a criar programas, automatizar tarefas, manipular dados e desenvolver aplicações web. Com projetos práticos e exemplos do mundo real, você estará pronto para explorar oportunidades em análise de dados, desenvolvimento web, automação e muito mais. Junte-se a nós e domine uma das linguagens de programação mais populares e versáteis da atualidade, o Python.', './images/img-curso-python.png', '2023-09-21 00:00:00'),
(13, 'PHP', 'Aprenda a linguagem de programação web mais utilizada do mundo! Este curso abrangente abordará desde os conceitos básicos até recursos avançados, capacitando você a criar sites dinâmicos e aplicativos web interativos. Explore tópicos como manipulação de bancos de dados, criação de formulários, integração com HTML e CSS, além de práticas recomendadas de segurança. Adquira as habilidades necessárias para desenvolver suas próprias aplicações web com PHP neste curso empolgante e prático.', './images/img-curso-php.png', '2023-09-21 00:00:00'),
(15, 'Laravel', 'Torne-se um mestre na construção de aplicações web robustas e elegantes! Neste curso especializado, você mergulhará no framework Laravel, líder em desenvolvimento PHP. Aprenda a criar sistemas escaláveis, seguros e de alto desempenho, explorando recursos avançados como autenticação, manipulação de banco de dados, integração de APIs e muito mais. Com foco em boas práticas de desenvolvimento e arquitetura moderna, este curso capacitará você a construir aplicativos web de classe mundial. Desenvolva suas habilidades e esteja pronto para enfrentar desafios emocionantes no mundo do desenvolvimento web com o Laravel.', './images/img-curso-laravel.jpg', '2023-09-21 00:00:00'),
(16, 'Javascript', 'Aprenda desde o básico até conceitos avançados para desenvolver aplicativos web interativos. Domine a linguagem de programação essencial para o desenvolvimento front-end e destaque-se como um desenvolvedor web versátil.', './images/img-curso-javascript.jpg', '2023-09-21 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
