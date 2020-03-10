--
-- Estrutura da tabela `tbl_courses`
--

DROP TABLE IF EXISTS `tbl_courses`;
CREATE TABLE IF NOT EXISTS `tbl_courses` (
    `id_course`	int(10) auto_increment,
    `title_course`	varchar(255), 
    `text_course`	text,
    `price_course`	float (10),
	`image_course` text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_course`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;