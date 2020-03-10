--
-- Estrutura da tabela `tbl_postgraduations`
--

DROP TABLE IF EXISTS `tbl_postgraduations`;
CREATE TABLE IF NOT EXISTS `tbl_postgraduations` (
    `id_postgraduate`	    int(10) auto_increment,
    `title_postgraduate`	varchar(255), 
    `text_postgraduate` 	text,
    `price_postgraduate`	float (10),
	`image_postgraduate`    text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_postgraduate`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;