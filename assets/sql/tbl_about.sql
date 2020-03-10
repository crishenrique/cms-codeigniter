--
-- Estrutura da tabela `tbl_abouts`
--

DROP TABLE IF EXISTS `tbl_abouts`;
CREATE TABLE IF NOT EXISTS `tbl_abouts` (
    `id_about`	int(10) auto_increment,
    `title_about`	varchar(255), 
    `text_about`	text,
	`image_about` text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_about`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

