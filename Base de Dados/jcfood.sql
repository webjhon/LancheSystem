/*
Navicat MySQL Data Transfer

Source Server         : Servidor Local
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : jcfood

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-08-27 19:52:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `telefone` decimal(12,0) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `whats` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for funcionarios
-- ----------------------------
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for pedido_produto
-- ----------------------------
DROP TABLE IF EXISTS `pedido_produto`;
CREATE TABLE `pedido_produto` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `valor` float NOT NULL,
  `mesa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_pedido_produto_1` (`id_cliente`),
  KEY `fk_produtos_pedido_produto_2` (`id_produto`),
  KEY `fk_funcionarios` (`id_funcionario`),
  CONSTRAINT `fk_clientes_pedido_produto_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  CONSTRAINT `fk_funcionarios` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`),
  CONSTRAINT `fk_produtos_pedido_produto_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` char(30) DEFAULT NULL,
  `unidade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
