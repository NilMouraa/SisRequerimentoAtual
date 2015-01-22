-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2015 às 01:53
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdsistemarequerimento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula` double NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nmAluno` varchar(40) NOT NULL,
  `periodo` varchar(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`matricula`),
  KEY `matricula` (`matricula`,`telefone`,`nmAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `telefone`, `nmAluno`, `periodo`, `email`) VALUES
(201217060405, '(31) 8789-7858', 'Elisa Daniel', '6', 'elisaDaniel@hotmail.com'),
(201217060421, '(31) 7504-5039', 'Nil Martins', '4', 'nil2678@hotmail.com'),
(201217060431, '(31) 3848-5886', 'Joaquim Barbosa', '2', 'futuroJoaquim@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `cdCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nmCurso` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cdCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cdCurso`, `nmCurso`) VALUES
(1, 'Engenharia da ComputaÃ§Ã£o ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `cdDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nmDisciplina` varchar(200) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  PRIMARY KEY (`cdDisciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`cdDisciplina`, `nmDisciplina`, `sigla`) VALUES
(1, 'Algebra Linear', 'Al'),
(2, 'Geometria analitica e Algebra vetorial', 'Gaav'),
(3, 'Calculo I', 'Calc I'),
(4, 'Calculo II', 'Calc II'),
(5, 'Calculo III', 'Calc III'),
(6, 'Calculo IV', 'Calc IV'),
(7, 'Fisica I', 'Fis I'),
(8, 'Fisica II', 'Fis II'),
(9, 'Fisica III', 'Fis III'),
(10, 'Fisica Experimental I', 'FisExpI'),
(11, 'Fisica Experimental II', 'FisExpII');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_corequisito`
--

CREATE TABLE IF NOT EXISTS `disciplina_corequisito` (
  `cdDisciplinaCoRequisito` int(11) NOT NULL,
  `cdDisciplina` int(11) NOT NULL,
  PRIMARY KEY (`cdDisciplinaCoRequisito`,`cdDisciplina`),
  KEY `fk_disciplina_has_disciplina1_disciplina2_idx` (`cdDisciplina`),
  KEY `fk_disciplina_has_disciplina1_disciplina1_idx` (`cdDisciplinaCoRequisito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina_corequisito`
--

INSERT INTO `disciplina_corequisito` (`cdDisciplinaCoRequisito`, `cdDisciplina`) VALUES
(8, 10),
(9, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_prerequisito`
--

CREATE TABLE IF NOT EXISTS `disciplina_prerequisito` (
  `cdDisciplinaPreRequisito` int(11) NOT NULL,
  `cdDisciplina` int(11) NOT NULL,
  PRIMARY KEY (`cdDisciplinaPreRequisito`,`cdDisciplina`),
  KEY `fk_disciplina_has_disciplina_disciplina2_idx` (`cdDisciplina`),
  KEY `fk_disciplina_has_disciplina_disciplina1_idx` (`cdDisciplinaPreRequisito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina_prerequisito`
--

INSERT INTO `disciplina_prerequisito` (`cdDisciplinaPreRequisito`, `cdDisciplina`) VALUES
(2, 1),
(4, 1),
(3, 4),
(4, 5),
(3, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionalidade`
--

CREATE TABLE IF NOT EXISTS `funcionalidade` (
  `cdFuncionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `nmFuncionalidade` varchar(50) NOT NULL,
  PRIMARY KEY (`cdFuncionalidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `funcionalidade`
--

INSERT INTO `funcionalidade` (`cdFuncionalidade`, `nmFuncionalidade`) VALUES
(1, 'Excluir usuario ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionalidade_perfil`
--

CREATE TABLE IF NOT EXISTS `funcionalidade_perfil` (
  `cdFuncionalidade` int(11) NOT NULL,
  `cdPerfil` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cdFuncionalidade`,`cdPerfil`),
  KEY `fk_Funcionalidade_has_Perfil_Perfil1_idx` (`cdPerfil`),
  KEY `fk_Funcionalidade_has_Perfil_Funcionalidade1_idx` (`cdFuncionalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `cdPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `nmPerfil` varchar(20) NOT NULL,
  PRIMARY KEY (`cdPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`cdPerfil`, `nmPerfil`) VALUES
(1, 'admin'),
(2, 'aluno'),
(3, 'coordenador ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE IF NOT EXISTS `requerimento` (
  `cdRequerimento` int(11) NOT NULL AUTO_INCREMENT,
  `nmRequerimento` varchar(15) DEFAULT NULL,
  `observacao` varchar(500) DEFAULT NULL,
  `matricula` double NOT NULL,
  `codSituacao` int(11) NOT NULL,
  `cdCurso` int(11) NOT NULL,
  `cdDisciplina` int(11) NOT NULL,
  `cdTipoRequerimento` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL,
  `data` varchar(12) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  PRIMARY KEY (`cdRequerimento`),
  KEY `fk_requerimento_aluno_idx` (`matricula`),
  KEY `fk_requerimento_situacaoRequerimento1_idx` (`codSituacao`),
  KEY `fk_requerimento_Curso1_idx` (`cdCurso`),
  KEY `fk_requerimento_disciplina1_idx` (`cdDisciplina`),
  KEY `fk_requerimento_TipoRequerimento1_idx` (`cdTipoRequerimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `requerimento`
--

INSERT INTO `requerimento` (`cdRequerimento`, `nmRequerimento`, `observacao`, `matricula`, `codSituacao`, `cdCurso`, `cdDisciplina`, `cdTipoRequerimento`, `periodo`, `data`, `semestre`) VALUES
(1, 'teste 1', 'Teste 1', 201217060405, 4, 1, 1, 3, 5, '2010', NULL),
(2, 'Teste req', 'teste requerimento', 201217060405, 4, 1, 1, 3, 6, '2010', NULL),
(3, 'teste req 2', 'testee Teste teste teste teste testee Teste teste teste teste vtestee Teste teste teste teste testee Teste teste teste teste', 201217060405, 4, 1, 1, 3, 2, '2010', NULL),
(4, 'teste req 3', 'testeee', 201217060405, 2, 1, 1, 1, 4, NULL, NULL),
(5, 'teste 4', 'teste5', 201217060405, 3, 1, 1, 1, 2, NULL, NULL),
(6, 'Teste ultimo', 'Requerimento teste', 201217060405, 3, 1, 7, 1, 5, NULL, NULL),
(7, 'dado1', 'dado1', 201217060405, 4, 1, 1, 1, 2, '2011', 1),
(8, 'dado2', 'dado2', 201217060405, 4, 1, 1, 1, 2, '2011', 2),
(9, 'dado3', 'dado3', 201217060405, 4, 1, 2, 1, 2, '2012', 1),
(10, 'dado4', 'dado4', 201217060405, 4, 1, 2, 1, 3, '2012', 2),
(11, 'dado5', 'dado5', 201217060421, 4, 1, 3, 1, 4, '2013', 1),
(12, 'dado6', 'dado6', 201217060421, 4, 1, 3, 1, 5, '2013', 2),
(13, 'dado7', 'dado7', 201217060421, 4, 1, 1, 3, 2, '2011', 1),
(14, 'dado8', 'dado8', 201217060421, 4, 1, 1, 3, 2, '2011', 2),
(15, 'dado9', 'dado9', 201217060421, 4, 1, 2, 3, 2, '2012', 1),
(16, 'dado10', 'dado10', 201217060421, 4, 1, 2, 3, 3, '2012', 2),
(17, 'dado11', 'dado11', 201217060421, 4, 1, 3, 3, 4, '2013', 1),
(18, 'dado12', 'dado12', 201217060421, 4, 1, 3, 3, 5, '2013', 2),
(19, 'dado13', 'dado13', 201217060421, 4, 1, 1, 3, 2, '2011', 1),
(20, 'dado14', 'dado14', 201217060421, 4, 1, 1, 3, 2, '2011', 2),
(21, 'dado15', 'dado15', 201217060405, 4, 1, 2, 3, 2, '2012', 1),
(22, 'dado16', 'dado16', 201217060405, 4, 1, 2, 3, 3, '2012', 2),
(23, 'dado17', 'dado17', 201217060405, 4, 1, 3, 3, 4, '2013', 1),
(24, 'dado18', 'dado18', 201217060405, 4, 1, 3, 3, 5, '2013', 2),
(25, 'dado19', 'dado19', 201217060405, 4, 1, 1, 3, 2, '2011', 1),
(26, 'dado20', 'dado20', 201217060405, 4, 1, 1, 3, 2, '2011', 2),
(27, 'dado21', 'dado21', 201217060405, 4, 1, 2, 3, 2, '2012', 1),
(28, 'dado22', 'dado22', 201217060405, 4, 1, 2, 3, 3, '2012', 2),
(29, 'dado23', 'dado23', 201217060405, 4, 1, 3, 3, 4, '2013', 1),
(30, 'dado24', 'dado24', 201217060405, 4, 1, 3, 3, 5, '2013', 2),
(34, 'dado25', 'dado25', 201217060431, 4, 1, 1, 3, 4, '2012', 1),
(35, 'dado25', 'dado25', 201217060431, 4, 1, 1, 3, 1, '2012', 1),
(36, 'dado25', 'dado25', 201217060431, 4, 1, 1, 3, 1, '2012', 1),
(37, 'dado28', 'dado28', 201217060431, 4, 1, 2, 1, 4, '2012', 1),
(38, 'dado29', '', 201217060405, 4, 1, 3, 1, 6, '2012', 1),
(39, 'dado30', 'dado30', 201217060405, 4, 1, 1, 1, 9, '2012', 1),
(40, 'dado31', 'dado31', 201217060405, 4, 1, 11, 1, 9, '2013', 1),
(41, 'teste 1', 'Teste 1', 201217060405, 4, 1, 1, 3, 5, '2010', NULL),
(42, 'quebra2013', 'quebra2013', 201217060405, 4, 1, 11, 3, 1, '2013', 1),
(43, 'quebra2013_2', 'quebra2013_2', 201217060405, 4, 1, 8, 3, 1, '2013', 2),
(44, 'quebra2013_3', 'quebra2013_3', 201217060405, 4, 1, 2, 3, 2, '2013', 2),
(45, 'Quebra2012', 'Quebra2012', 201217060405, 4, 1, 11, 3, 2, '2012', 1),
(46, 'Quebra2011', 'Quebra2011', 201217060405, 4, 1, 11, 3, 3, '2011', 1),
(47, 'Quebra2011_2', 'Quebra2011_2', 201217060405, 4, 1, 5, 3, 1, '2011', 0),
(48, 'Quebra2011_3', 'Quebra2011_3', 201217060405, 4, 1, 8, 3, 5, '2011', 1),
(49, 'Quebra2010', 'Quebra2010', 201217060405, 4, 1, 2, 3, 2, '2010', 1),
(50, 'Quebra2010_1', 'Quebra2010_1', 201217060405, 4, 1, 3, 3, 2, '2010', 1),
(57, 'Quebra2010_4', 'Quebra2010_4', 201217060405, 4, 1, 9, 3, 4, '2010', 2),
(58, 'requerimentoNov', 'requerimentoNovo', 201217060405, 1, 1, 4, 3, 3, '2012', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `req_requisito`
--

CREATE TABLE IF NOT EXISTS `req_requisito` (
  `cdDisciplina` int(11) NOT NULL,
  `cdRequerimento` int(11) NOT NULL,
  `tipoRequisito` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cdDisciplina`,`cdRequerimento`),
  KEY `fk_disciplina_has_requerimento_requerimento1_idx` (`cdRequerimento`),
  KEY `fk_disciplina_has_requerimento_disciplina1_idx` (`cdDisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `req_requisito`
--

INSERT INTO `req_requisito` (`cdDisciplina`, `cdRequerimento`, `tipoRequisito`) VALUES
(1, 1, 'p'),
(1, 7, 'p'),
(1, 12, 'p'),
(1, 17, 'p'),
(1, 22, 'p'),
(1, 27, 'p'),
(1, 42, 'p'),
(2, 8, 'p'),
(2, 13, 'p'),
(2, 18, 'p'),
(2, 23, 'p'),
(2, 28, 'p'),
(2, 42, 'p'),
(2, 43, 'p'),
(3, 1, 'p'),
(3, 9, 'p'),
(3, 14, 'p'),
(3, 19, 'p'),
(3, 24, 'p'),
(3, 29, 'p'),
(3, 42, 'p'),
(4, 1, 'p'),
(4, 10, 'p'),
(4, 11, 'p'),
(4, 15, 'p'),
(4, 16, 'p'),
(4, 20, 'p'),
(4, 21, 'p'),
(4, 25, 'p'),
(4, 26, 'p'),
(4, 30, 'p'),
(4, 42, 'p'),
(5, 7, 'p'),
(5, 42, 'p'),
(5, 43, 'p');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaorequerimento`
--

CREATE TABLE IF NOT EXISTS `situacaorequerimento` (
  `codSituacao` int(11) NOT NULL AUTO_INCREMENT,
  `nmSituacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codSituacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `situacaorequerimento`
--

INSERT INTO `situacaorequerimento` (`codSituacao`, `nmSituacao`) VALUES
(1, 'Novo'),
(2, 'Indeferido'),
(3, 'Com Pendencia'),
(4, 'Deferido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiporequerimento`
--

CREATE TABLE IF NOT EXISTS `tiporequerimento` (
  `cdTipoRequerimento` int(11) NOT NULL AUTO_INCREMENT,
  `nmTipoRequerimento` varchar(150) NOT NULL,
  PRIMARY KEY (`cdTipoRequerimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tiporequerimento`
--

INSERT INTO `tiporequerimento` (`cdTipoRequerimento`, `nmTipoRequerimento`) VALUES
(1, 'Matricula'),
(2, 'Tracamento'),
(3, 'Matrícula com Quebra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cdUsuario` double NOT NULL AUTO_INCREMENT,
  `nmUsuario` varchar(50) DEFAULT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `emailUsuario` varchar(150) NOT NULL,
  `cdPerfil` int(11) NOT NULL,
  PRIMARY KEY (`cdUsuario`),
  KEY `fk_usuario_Perfil1_idx` (`cdPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201217060406 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cdUsuario`, `nmUsuario`, `login`, `senha`, `tipo`, `emailUsuario`, `cdPerfil`) VALUES
(8, 'Rute Daniel', 'rute', '123', '', 'rute@email.com', 1),
(14, 'Administrador', 'admin', '123', '', '', 1),
(201217060405, 'Elisa de Araujo Daniel', 'elisa', '123', '', 'elisa2808@gmail.com', 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplina_corequisito`
--
ALTER TABLE `disciplina_corequisito`
  ADD CONSTRAINT `fk_disciplina_has_disciplina1_disciplina1` FOREIGN KEY (`cdDisciplinaCoRequisito`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplina_has_disciplina1_disciplina2` FOREIGN KEY (`cdDisciplina`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina_prerequisito`
--
ALTER TABLE `disciplina_prerequisito`
  ADD CONSTRAINT `fk_disciplina_has_disciplina_disciplina1` FOREIGN KEY (`cdDisciplinaPreRequisito`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplina_has_disciplina_disciplina2` FOREIGN KEY (`cdDisciplina`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionalidade_perfil`
--
ALTER TABLE `funcionalidade_perfil`
  ADD CONSTRAINT `fk_Funcionalidade_has_Perfil_Funcionalidade1` FOREIGN KEY (`cdFuncionalidade`) REFERENCES `funcionalidade` (`cdFuncionalidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Funcionalidade_has_Perfil_Perfil1` FOREIGN KEY (`cdPerfil`) REFERENCES `perfil` (`cdPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `requerimento`
--
ALTER TABLE `requerimento`
  ADD CONSTRAINT `fk_requerimento_aluno` FOREIGN KEY (`matricula`) REFERENCES `aluno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimento_Curso1` FOREIGN KEY (`cdCurso`) REFERENCES `curso` (`cdCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimento_disciplina1` FOREIGN KEY (`cdDisciplina`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimento_situacaoRequerimento1` FOREIGN KEY (`codSituacao`) REFERENCES `situacaorequerimento` (`codSituacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimento_TipoRequerimento1` FOREIGN KEY (`cdTipoRequerimento`) REFERENCES `tiporequerimento` (`cdTipoRequerimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `req_requisito`
--
ALTER TABLE `req_requisito`
  ADD CONSTRAINT `fk_disciplina_has_requerimento_disciplina1` FOREIGN KEY (`cdDisciplina`) REFERENCES `disciplina` (`cdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplina_has_requerimento_requerimento1` FOREIGN KEY (`cdRequerimento`) REFERENCES `requerimento` (`cdRequerimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_Perfil1` FOREIGN KEY (`cdPerfil`) REFERENCES `perfil` (`cdPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
