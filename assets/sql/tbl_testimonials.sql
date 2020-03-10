--
-- Estrutura da tabela `tbl_testimonials`
--

DROP TABLE IF EXISTS `tbl_testimonials`;
CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
    `id_testimonial`		int(10) auto_increment,
    `name_testimonial`	varchar(255), 
    `text_testimonial`	text,
    `city_testimonial`	varchar(255),
	`image_testimonial`  text,
    `registered`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_testimonial`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

