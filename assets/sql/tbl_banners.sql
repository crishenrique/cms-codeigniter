--
-- Estrutura da tabela `tbl_banners`
--

DROP TABLE IF EXISTS `tbl_banners`;
CREATE TABLE IF NOT EXISTS `tbl_banners` (
    `id_banner`		int(10) auto_increment,
    `title_banner`	varchar(255), 
    `text_banner`	text,
    `link_banner`	varchar(255),
	`image_banner`  text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_banner`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

