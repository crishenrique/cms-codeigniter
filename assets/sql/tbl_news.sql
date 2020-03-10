--
-- Estrutura da tabela `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
	`id_news` 			int(10) NOT NULL auto_increment,
    `id_author_news`    int(10) NOT NULL DEFAULT '1',
	`title_news`		text NOT NULL,
	`abstract_news` 	varchar(255) NOT NULL,
	`text_news`		    text NOT NULL,
    `origin_news`       varchar(255) NOT NULL,
	`image_news`		varchar(255) NOT NULL,
	`registered`		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated`			datetime NOT NULL,
	`status`			tinyint(1) NOT NULL DEFAULT '1',
	`excluded`			tinyint(1) NOT NULL DEFAULT '0',

	PRIMARY KEY (`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;