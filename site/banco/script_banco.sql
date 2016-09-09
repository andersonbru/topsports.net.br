CREATE TABLE IF NOT EXISTS `u448687765_site`.`tbl_estados` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `sigla` VARCHAR(2) NULL COMMENT '',
  `estado` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `u448687765_site`.`tbl_cidades` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `cidade` VARCHAR(250) NULL COMMENT '',
  `cep` INT(8) NULL COMMENT '',
  `id_estados` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_tbl_cidades_tbl_estados1_idx` (`id_estados` ASC)  COMMENT '',
  CONSTRAINT `fk_tbl_cidades_tbl_estados1`
    FOREIGN KEY (`id_estados`)
    REFERENCES `u448687765_site`.`tbl_estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `u448687765_site`.`tbl_categorias` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(200) NULL COMMENT '',
  `status` INT(1) NULL COMMENT '0 - Inativo ou 1 - Ativo',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `u448687765_site`.`tbl_contatos` (
  `id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(250) NULL COMMENT '',
  `email` VARCHAR(250) NULL COMMENT '',
  `telefone` BIGINT(11) NULL COMMENT '',
  `msg` LONGTEXT NULL COMMENT '',
  `status` INT(1) NULL COMMENT '',
  `id_cidades` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_tbl_contatos_tbl_cidades1_idx` (`id_cidades` ASC)  COMMENT '',
  CONSTRAINT `fk_tbl_contatos_tbl_cidades1`
    FOREIGN KEY (`id_cidades`)
    REFERENCES `u448687765_site`.`tbl_cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `u448687765_site`.`tbl_empresa` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(250) NULL COMMENT '',
  `email` VARCHAR(200) NULL COMMENT '',
  `senha` VARCHAR(40) NULL COMMENT '',
  `telefone` BIGINT(11) NULL COMMENT '',
  `celular` BIGINT(11) NULL COMMENT '',
  `logradouro` VARCHAR(250) NULL COMMENT '',
  `numero` VARCHAR(20) NULL COMMENT '',
  `bairro` VARCHAR(100) NULL COMMENT '',
  `complemento` VARCHAR(200) NULL COMMENT '',
  `cep` INT(8) NULL COMMENT '',
  `titulo` VARCHAR(50) NULL COMMENT '',
  `logo` VARCHAR(250) NULL COMMENT '',
  `favicon` VARCHAR(250) NULL COMMENT '',
  `descricao` VARCHAR(250) NULL COMMENT '',
  `id_cidades` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_tbl_empresa_tbl_cidades1_idx` (`id_cidades` ASC)  COMMENT '',
  CONSTRAINT `fk_tbl_empresa_tbl_cidades1`
    FOREIGN KEY (`id_cidades`)
    REFERENCES `u448687765_site`.`tbl_cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_fabricantes` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(250) NULL COMMENT '',
  `status` INT(1) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_marca` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(250) NULL COMMENT '',
  `status` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_param_valor` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `valor_tipo` VARCHAR(100) NULL COMMENT '',
  `valor_id` VARCHAR(100) NULL COMMENT '',
  `valor_desc` LONGTEXT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_sabores` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(150) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_produtos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(200) NULL COMMENT '',
  `especificacoes` LONGTEXT NULL COMMENT '',
  `valor_custo` FLOAT(10,2) NULL COMMENT '',
  `valor_venda` FLOAT(10,2) NULL COMMENT '',
  `peso` INT(10) NULL COMMENT 'Peso em grama',
  `id_categorias` INT(10) NOT NULL COMMENT '',
  `id_marca` INT(10) NOT NULL COMMENT '',
  `id_fabricantes` INT(10) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_tbl_produtos_tbl_categorias_idx` (`id_categorias` ASC)  COMMENT '',
  INDEX `fk_tbl_produtos_tbl_marca1_idx` (`id_marca` ASC)  COMMENT '',
  INDEX `fk_tbl_produtos_tbl_fabricantes1_idx` (`id_fabricantes` ASC)  COMMENT '',
  CONSTRAINT `fk_tbl_produtos_tbl_categorias`
    FOREIGN KEY (`id_categorias`)
    REFERENCES `u448687765_site`.`tbl_categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_produtos_tbl_marca1`
    FOREIGN KEY (`id_marca`)
    REFERENCES `u448687765_site`.`tbl_marca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_produtos_tbl_fabricantes1`
    FOREIGN KEY (`id_fabricantes`)
    REFERENCES `u448687765_site`.`tbl_fabricantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_estoque` (
  `id_produtos` INT(10) NOT NULL COMMENT '',
  `id_sabores` INT(10) NULL COMMENT '',
  `qtd` INT(10) NULL COMMENT '',
  INDEX `fk_tbl_estoque_tbl_sabores1_idx` (`id_sabores` ASC)  COMMENT '',
  INDEX `fk_tbl_estoque_tbl_produtos1_idx` (`id_produtos` ASC)  COMMENT '',
  PRIMARY KEY (`id_produtos`)  COMMENT '',
  CONSTRAINT `fk_tbl_estoque_tbl_sabores1`
    FOREIGN KEY (`id_sabores`)
    REFERENCES `u448687765_site`.`tbl_sabores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_estoque_tbl_produtos1`
    FOREIGN KEY (`id_produtos`)
    REFERENCES `u448687765_site`.`tbl_produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;