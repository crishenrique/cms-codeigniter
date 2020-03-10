--
-- Estrutura da tabela `tbl_admin_logs`
--

DROP TABLE IF EXISTS `tbl_admin_logs`;
CREATE TABLE IF NOT EXISTS `tbl_admin_logs` (
	`id_admin_log` 		int NOT NULL auto_increment,
	`name_admin_log` 	varchar(255) DEFAULT NULL,
	`access_admin_log`	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	`ip_admin_log`		varchar(255) DEFAULT NULL,
	`status_admin_log`	tinyint(4) DEFAULT NULL,

    PRIMARY KEY (`id_admin_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
