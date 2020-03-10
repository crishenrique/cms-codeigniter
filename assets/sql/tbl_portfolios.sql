--
-- Estrutura da tabela `tbl_portfolios`
--

DROP TABLE IF EXISTS `tbl_portfolios`;
CREATE TABLE IF NOT EXISTS `tbl_portfolios` (
    `id_portfolio`	    int(10) auto_increment,
    `title_portfolio`   varchar(255),
    `text_portfolio`    varchar(255),
    `link_portfolio`    varchar(255),
	`image_portfolio`   text,
    `registered`	    timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	        datetime DEFAULT NULL,
    `status` 		    tinyint(1) DEFAULT '1',
    `excluded` 		    tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_portfolio`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

