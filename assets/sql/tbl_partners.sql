--
-- Estrutura da tabela `tbl_partners`
--

DROP TABLE IF EXISTS `tbl_partners`;
CREATE TABLE IF NOT EXISTS `tbl_partners` (
    `id_partner`	int(10) auto_increment,
    `title_partner`	varchar(255), 
    `text_partner`	text,
    `price_partner`	float (10),
	`image_partner` text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_partner`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;