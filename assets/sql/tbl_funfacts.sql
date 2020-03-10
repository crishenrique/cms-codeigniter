--
-- Estrutura da tabela `tbl_funfacts`
--

DROP TABLE IF EXISTS `tbl_funfacts`;
CREATE TABLE IF NOT EXISTS `tbl_funfacts` (
    `id_funfact`    int(10) auto_increment,
    `title_funfact` varchar(255), 
    `value_funfact` int(10),
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_funfact`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

