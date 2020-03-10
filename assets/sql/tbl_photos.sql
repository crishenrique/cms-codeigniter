--
-- Estrutura da tabela `tbl_photos`
--

DROP TABLE IF EXISTS `tbl_photos`;
CREATE TABLE IF NOT EXISTS `tbl_photos` (
    `id_photo` 			int(10) auto_increment,
	`title_photo`		varchar(255) DEFAULT 'loremipsum',
	`date_photo`		varchar(10) NOT NULL,
    `description_photo` varchar(255) DEFAULT 'loremipsum',
    `image_photo`       varchar(255) NOT NULL,
    `registered`        timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`           datetime DEFAULT NULL,
    `status` 		    tinyint(1) DEFAULT '1',
    `excluded` 		    tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;