--
-- Estrutura da tabela `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
CREATE TABLE IF NOT EXISTS `tbl_services` (
    `id_service`	int(10) auto_increment,
    `title_service`	varchar(255), 
    `text_service`	text,
	`image_service` text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_service`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

