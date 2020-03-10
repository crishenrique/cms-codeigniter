--
-- Estrutura da tabela `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
	`id_user` 			int(10) NOT NULL auto_increment,
	`image_user`		text NOT NULL,
	`name_user`			varchar(255) NOT NULL,
	`description_user`	varchar(255) NOT NULL DEFAULT 'loremipsum',
	`email_user`		varchar(255) NOT NULL,
	`password_user`		varchar(255) NOT NULL,
	`registered`		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated`			datetime NOT NULL,
	`status`			tinyint(1) NOT NULL DEFAULT '1',
	`excluded`			tinyint(1) NOT NULL DEFAULT '0',

	PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_users` (`image_user`, `name_user`, `description_user`, `email_user`, `password_user`, `registered`, `updated`, `status`, `excluded`) 
	VALUES ('', 'root', 'loremipsum', '', '123', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '1', '0');

