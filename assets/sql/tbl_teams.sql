--
-- Estrutura da tabela `tbl_teams`
--

DROP TABLE IF EXISTS `tbl_teams`;
CREATE TABLE IF NOT EXISTS `tbl_teams` (
    `id_team`		int(10) auto_increment,
    `name_team`	    varchar(255), 
    `office_team`   text,
    `link_team`	    varchar(255),
	`image_team`    text,
    `registered`    timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated`	    datetime DEFAULT NULL,
    `status` 		tinyint(1) DEFAULT '1',
    `excluded` 		tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_team`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

